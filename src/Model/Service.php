<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

/**
 * Сервис (доп. услуга)
 *
 * @package Dumkaaa\Boxberry\Api\Common\Models
 */
class Service extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @var string Уникальный идентификатор (код) услуги в базе данных ИС Boxberry
     */
    public $code;

    /**
     * @var string Название услуги
     */
    public $name;

    /**
     * @var string Описание
     */
    public $description;

    /**
     * @var bool Принимает значение 1, если услуга обязательна, 0 – если нет
     */
    public $required;

    /**
     * @var int Стоимость в копейках
     */
    public $price;

    /**
     * @var bool Принимает значение 1, если услуга применяется при КД, 0 – если нет
     */
    public $cd;
}
