<?php


namespace Boxberry\C2C\Model;

use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

/**
 * Почтовый индекс
 *
 * @package Boxberry\Common\Models
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
