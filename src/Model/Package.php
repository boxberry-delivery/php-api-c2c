<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

/**
 * Упаковка
 *
 * @package Dumkaaa\Boxberry\Api\Common\Models
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
