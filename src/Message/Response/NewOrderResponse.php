<?php

namespace Boxberry\C2C\Message\Response;

use Boxberry\Common\Exception\RuntimeException;

/**
 * Class NewOrderResponse.
 *
 * @see     NewOrderResponse
 *
 * @package Boxberry\C2C\Message\Response
 */
class NewOrderResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return bool
     *
     * @throws \Boxberry\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public function getCollection($collectionItem = '')
    {
        throw new RuntimeException('Method not supported, `use getData()` instead');
    }
}
