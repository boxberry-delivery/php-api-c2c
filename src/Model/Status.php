<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException;
use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;

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
     * @return void
     * @throws \Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public static function createFromAttributes(array $attributes)
    {
        throw new RuntimeException('Method not supported, use the standard object creation instead');
    }
}
