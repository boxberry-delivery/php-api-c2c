<?php


namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\CalculationLapResponse;
use Boxberry\C2C\Model\Package;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Метод позволяет рассчитать стоимость доставки ПиП.
 *
 * @method CalculationLapResponse send()
 * @see     CalculationLapResponse
 * @package Boxberry\C2C\Message\Request
 */
class CalculationLapRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'CalculationLaP';
    }

    /**
     * @param string $city Код города отправителя
     *
     * @return $this
     */
    public function setSenderCity($city)
    {
        return $this->setParameter('sender_city', $city);
    }

    /**
     * @param string $city Код города получателя
     *
     * @return $this
     */
    public function setReceiverCity($city)
    {
        return $this->setParameter('receiver_city', $city);
    }

    /**
     * @param int $price Объявленная стоимость в копейках
     *
     * @return $this
     */
    public function setPublicPrice($price)
    {
        return $this->setParameter('public_price', $price);
    }

    /**
     * @param string $promocode Промо код на скидку
     *
     * @return $this
     */
    public function setPromoCode($promocode)
    {
        return $this->setParameter('promo_code', $promocode);
    }

    /**
     * @param array|Package $package Данные об упаковке
     *
     * @return $this
     */
    public function setPackage($package)
    {
        return $this->setParameter('package', (array)$package);
    }

    /**
     * @param string[] $listServices Массив данных кодов дополнительных услуг
     *
     * @return $this
     */
    public function setListServices($listServices)
    {
        return $this->setParameter('list_services', (array)$listServices);
    }

    /**
     * @inheritdoc
     */
    public function getValidationRules()
    {
        $baseRules = parent::getValidationRules();

        $rules = [
            'sender_city'   => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'string']),
            ]),
            'receiver_city' => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'string']),
            ]),
            'public_price'  => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'int']),
            ]),
            'promo_code'    => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'string']),
            ]),
            'package'       => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
                new Assert\Collection([
                    'boxberry_package' => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'int']),
                    ]),
                    'package_code'     => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'depth'            => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'int']),
                    ]),
                    'width'            => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'int']),
                    ]),
                    'height'           => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'int']),
                    ]),
                ]),
            ]),
            'list_services' => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
            ]),
        ];

        return array_merge($baseRules, $rules);
    }
}
