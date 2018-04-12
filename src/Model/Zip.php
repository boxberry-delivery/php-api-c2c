<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

/**
 * Почтовый индекс
 *
 * @package Dumkaaa\Boxberry\Api\Common\Models
 */
class Zip extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @var string Уникальный идентификатор (код) города в базе данных ИС Boxberry
     */
    public $city;

    /**
     * @var string Почтовый индекс
     */
    public $zip;
}
