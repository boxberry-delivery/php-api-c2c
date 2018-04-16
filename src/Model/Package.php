<?php


namespace Boxberry\C2C\Model;

use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

/**
 * Упаковка
 *
 * @package Boxberry\Common\Models
 */
class Package extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @var string Уникальный идентификатор (код) упаковки в базе данных ИС Boxberry
     */
    public $code;

    /**
     * @var string Название упаковки
     */
    public $name;

    /**
     * @var int Глубина упаковки в мм
     */
    public $depth;

    /**
     * @var int Ширина упаковки в мм
     */
    public $width;

    /**
     * @var int Высота упаковки в мм
     */
    public $height;

    /**
     * @var int Стоимость в копейках
     */
    public $price;
}
