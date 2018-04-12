<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\Common\Message\Response\AbstractResponse as BaseAbstractResponse;

abstract class AbstractResponse extends BaseAbstractResponse
{
    /**
     * @return array
     */
    public function getData()
    {
        return array_key_exists('data', $this->data) ? $this->data['data'] : null;
    }
}
