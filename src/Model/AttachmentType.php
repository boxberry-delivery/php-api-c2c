<?php


namespace Boxberry\C2C\Model;

use Boxberry\Common\Model\AbstractModel;
use Boxberry\Common\Model\CreateFromAttributesTrait;

/**
 * Тип вложения
 *
 * @package Boxberry\Common\Models
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
