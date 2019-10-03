<?php

namespace Boxberry\C2C\Model;

use Boxberry\Common\Exception\RuntimeException;
use Boxberry\Common\Model\AbstractModel;

class Status extends AbstractModel
{
    /**
     * @var string Статус
     */
    public $status;

    /**
     * @var string Код статуса
     */
    public $code;

    /**
     * @var string Дата установки статуса в формате “YYYY-MM-DD”
     */
    public $date;

    /**
     * @inheritdoc
     *
     * @throws \Boxberry\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public static function createFromAttributes(array $attributes)
    {
        throw new RuntimeException('Method not supported, use the standard object creation instead');
    }
}
