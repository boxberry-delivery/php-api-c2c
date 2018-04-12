<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException;

/**
 * Class NewOrderResponse
 *
 * @see     NewOrderResponse
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
 */
class NewOrderResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return bool
     * @throws \Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public function getCollection($collectionItem = '')
    {
        throw new RuntimeException('Method not supported, `use getData()` instead');
    }
}
