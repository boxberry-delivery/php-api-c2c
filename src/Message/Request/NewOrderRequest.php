<?php


namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\NewOrderResponse;
use Boxberry\C2C\Model\Package;
use Boxberry\C2C\Model\Receiver;
use Boxberry\C2C\Model\SafeDeal;
use Boxberry\C2C\Model\Sender;
use Boxberry\Common\Helper;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Метод, позволяющий создать новый заказ.
 *
 * @method NewOrderResponse send()
 * @see     NewOrderResponse
 * @package Boxberry\C2C\Message\Request
 */
class NewOrderRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'NewOrder1';
    }

    /**
     * @param int $deliveryType     Тип доставки, возможные значения:
     *                              • 1, если доставка от двери до двери;
     *                              • 2, если доставка от двери до отделения;
     *                              • 3, если заставка от отделения до двери;
     *                              • 4, если доставка от отделения до отделения.
     *
     * @return $this
     */
    public function setDeliveryType($deliveryType)
    {
        return $this->setParameter('delivery_type', $deliveryType);
    }

    /**
     * @param int $publicPrice Объявленная стоимость в копейках
     *
     * @return $this
     */
    public function setPublicPrice($publicPrice)
    {
        return $this->setParameter('public_price', $publicPrice);
    }

    /**
     * @param int $payerType    Плательщик:
     *                          • 1, если отправитель;
     *                          • 2, если получатель;
     *
     * @return $this
     */
    public function setPayerType($payerType)
    {
        return $this->setParameter('payer_type', $payerType);
    }

    /**
     * @param int $prepaydSum Предоплаченная сумма в копейках
     *
     * @return $this
     */
    public function setPrepaydSum($prepaydSum)
    {
        return $this->setParameter('prepayd_sum', $prepaydSum);
    }

    /**
     * @param array|Sender $sender Информация об отправителе
     *
     * @return $this
     */
    public function setSender($sender)
    {
        if (is_object($sender)) {
            $sender = Helper::filterEmpty((array)$sender);
        }

        return $this->setParameter('sender', (array)$sender);
    }

    /**
     * @param array|Receiver $receiver Данные о получателе
     *
     * @return $this
     */
    public function setReceiver($receiver)
    {
        if (is_object($receiver)) {
            $receiver = Helper::filterEmpty((array)$receiver);
        }

        return $this->setParameter('receiver', (array)$receiver);
    }

    /**
     * @param array|Package $package Упаковка
     *
     * @return $this
     */
    public function setPackage($package)
    {
        return $this->setParameter('package', (array)$package);
    }

    /**
     * @param string $promoCode Промокод
     *
     * @return $this
     */
    public function setPromoCode($promoCode)
    {
        return $this->setParameter('promo_code', $promoCode);
    }

    /**
     * @param string[] $listServices Массив данных кодов дополнительных услуг
     *
     * @return $this
     */
    public function setListServices($listServices)
    {
        return $this->setParameter('list_services', $listServices);
    }

    /**
     * @param array|SafeDeal $safeDeal Данные о безопасной сделке
     *
     * @return $this
     */
    public function setSafeDeal($safeDeal)
    {
        return $this->setParameter('safe_deal', $safeDeal);
    }

    /**
     * @inheritdoc
     */
    public function getValidationRules()
    {
        $baseRules = parent::getValidationRules();

        $rules = [
            'delivery_type' => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'int']),
                new Assert\Choice(['choices' => [1, 2, 3, 4]]),
            ]),
            'public_price'  => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'int']),
            ]),
            'payer_type'    => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'int']),
                new Assert\Choice(['choices' => [1, 2]]),
            ]),
            'prepayd_sum'   => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'int']),
            ]),
            'sender'        => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
                new Assert\Collection([
                    'city'        => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'point_code'  => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'client_name' => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'document'    => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'int']),
                    ]),
                    'doc_series'  => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'doc_num'     => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'phone'       => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'email'       => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'zip'         => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'address'     => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                ]),
            ]),
            'receiver'      => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
                new Assert\Collection([
                    'city'        => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'point_code'  => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'client_name' => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'phone'       => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'email'       => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'zip'         => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'address'     => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                ]),
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
                    'attachment_id'    => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                ]),
            ]),
            'promo_code'    => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'string']),
            ]),
            'list_services' => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
            ]),
            'safe_deal'     => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
                new Assert\Collection([
                    'title'            => new Assert\Required([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'string']),
                    ]),
                    'payer_commission' => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Choice(['choices' => ['consumer', 'supplier']]),
                    ]),
                    'payer_target'     => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Choice(['choices' => ['account', 'card']]),
                    ]),
                    'goods'            => new Assert\Optional([
                        new Assert\NotBlank(),
                        new Assert\Type(['type' => 'array']),
                        new Assert\Collection([
                            'title'            => new Assert\Required([
                                new Assert\NotBlank(),
                                new Assert\Type(['type' => 'string']),
                            ]),
                            'payer_commission' => new Assert\Optional([
                                new Assert\NotBlank(),
                                new Assert\Choice(['choices' => ['consumer', 'supplier']]),
                            ]),
                            'payer_target'     => new Assert\Optional([
                                new Assert\NotBlank(),
                                new Assert\Choice(['choices' => ['account', 'card']]),
                            ]),
                            'goods'            => new Assert\Optional([
                                new Assert\NotBlank(),
                                new Assert\Type(['type' => 'array']), //
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ];

        return array_merge($baseRules, $rules);
    }
}
