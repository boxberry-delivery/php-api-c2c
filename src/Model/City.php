<?php


namespace Boxberry\C2C\Model;

use Boxberry\C2C\Message\Request\ListCitiesRequest;
use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

/**
 * Город
 *
 * @package Boxberry\Common\Models
 */
class City extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @see ListCitiesRequest
     * @var string Уникальный идентификатор (код) города в базе данных ИС Boxberry
     */
    public $code;

    /**
     * @var string Название города
     */
    public $name;

    /**
     * @var bool Принимает значение 1 – если в городе доступен прием писем и посылок, иначе – 0
     */
    public $lap_receive;

    /**
     *
     *
     * @var bool Принимает значение 1 – если в городе доступна выдача писем и посылок, иначе – 0
     */
    public $lap_take;

    /**
     * @var bool Принимает значение 1 – если в городе доступна курьерская доставка, иначе – 0
     */
    public $cd_available;
}
