<?php


namespace Boxberry\C2C\Model;

use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

/**
 * Отделение (ПВЗ)
 *
 * @package Boxberry\Common\Models
 */
class Point extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @var string Уникальный идентификатор (код) отделения в базе данных ИС Boxberry
     */
    public $code;

    /**
     * @var string Название отделения
     */
    public $name;

    /**
     * @var string Адрес отделения
     */
    public $address;

    /**
     * @var string График работы
     */
    public $shedule;

    /**
     * @var string Описание проезда
     */
    public $description;

    /**
     * @var int Срок доставки в днях
     */
    public $delivery;

    /**
     * @var string Уникальный идентификатор (код) города в базе данных ИС Boxberry
     */
    public $city;

    /**
     * @var string Название города
     */
    public $city_name;

    /**
     * @var string Название населенного пункта
     */
    public $settlement_name;

    /**
     * @var string Название региона
     */
    public $area_name;

    /**
     * @var string Название страны
     */
    public $country_name;

    /**
     * @var string GPS координаты
     */
    public $gps;

    /**
     * @var bool Принимает значение 1, если точка работает только с полностью оплаченными заказами, иначе - 0
     */
    public $only_prepayd;

    /**
     * @var bool Принимает значение 1, если в отделении есть возможность оплаты банковскими картами, иначе - 0
     */
    public $acquiring;

    /**
     * @var bool Принимает значение 1, если отделение принимает письма и посылки, 0 – если нет
     */
    public $lap_receive;

    /**
     * @var bool Принимает значение 1, если отделение выдает письма и посылки,, 0 – если нет
     */
    public $lap_take;
}
