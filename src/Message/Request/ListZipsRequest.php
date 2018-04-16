<?php


namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\ListZipsResponse;

/**
 * Метод позволяет получить список почтовых индексов, для которых возможна курьерская доставка.
 *
 * @method ListZipsResponse send()
 * @see     ListZipsResponse
 * @package Boxberry\C2C\Message\Request
 */
class ListZipsRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListZips';
    }
}
