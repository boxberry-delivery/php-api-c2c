<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListCitiesRequest;
use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

/**
 * Город
 *
 * @package Dumkaaa\Boxberry\Api\Common\Models
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
