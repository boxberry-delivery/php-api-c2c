<?php

namespace Boxberry\C2C\Model;

use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

/**
 * Сервис (доп. услуга).
 *
 * @package Boxberry\Common\Models
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
