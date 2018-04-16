<?php


namespace Boxberry\C2C\Model;

use Boxberry\C2C\Message\Request\CalculationLapRequest;
use Boxberry\Common\Exception\RuntimeException;
use Boxberry\Common\Model\AbstractModel;

/**
 * Рассчет стоимости доставки ПиП.
 *
 * @see     CalculationLapRequest
 * @package Boxberry\C2C\Model
 */
class CalculationLap extends AbstractModel
{
    /**
     * @var int Стоимость доставки в копейках
     */
    public $price;

    /**
     * @var int Скидка по промокоду в %
     */
    public $promocode_discount;

    /**
     * @var int Тип доставки:
     *      1 – от двери до двери
     *      2 – от двери до отделения
     *      3 – от отделения до двери
     *      4 – от отделения до отделения
     */
    public $delivery_type;

    /**
     * @inheritdoc
     *
     * @return void
     * @throws \Boxberry\Common\Exception\RuntimeException
     */
    public static function createFromAttributes(array $attributes)
    {
        throw new RuntimeException('Method not supported, use the standard object creation instead');
    }
}
