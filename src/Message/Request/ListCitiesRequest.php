<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Request;

use Dumkaaa\Boxberry\Api\C2C\Message\Response\ListCitiesResponse;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Метод позволяет получить список городов, в которых есть пункты выдачи заказов Boxberry.
 *
 * @method ListCitiesResponse send()
 * @see     ListCitiesResponse
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Request
 */
class ListCitiesRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListCities';
    }

    /**
     * @param bool $lapReceive Доступен прием писем и посылок
     *
     * @return $this
     */
    public function setLapReceive($lapReceive)
    {
        return $this->setParameter('lap_receive', $lapReceive);
    }

    /**
     * @param bool $lapTake Доступна выдача писем и посылок
     *
     * @return $this
     */
    public function setLapTake($lapTake)
    {
        return $this->setParameter('lap_take', $lapTake);
    }

    /**
     * @param bool $cdAvailable Доступна курьерская доставка
     *
     * @return $this
     */
    public function setCdAvailable($cdAvailable)
    {
        return $this->setParameter('cd_available', $cdAvailable);
    }

    /**
     * @inheritdoc
     */
    public function getValidationRules()
    {
        $baseRules = parent::getValidationRules();

        $rules = [
            'lap_receive'  => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'bool']),
            ]),
            'lap_take'     => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'bool']),
            ]),
            'cd_available' => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'bool']),
            ]),
        ];

        return array_merge($baseRules, $rules);
    }
}
