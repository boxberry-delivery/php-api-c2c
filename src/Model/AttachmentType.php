<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

/**
 * Тип вложения
 *
 * @package Dumkaaa\Boxberry\Api\Common\Models
 */
class AttachmentType extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @var string Код типа вложения
     */
    public $code;

    /**
     * @var string Название
     */
    public $name;

    /**
     * @var string Описание
     */
    public $description;
}
