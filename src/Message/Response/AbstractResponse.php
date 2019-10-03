<?php

namespace Boxberry\C2C\Message\Response;

use Boxberry\Common\Message\Response\AbstractResponse as BaseAbstractResponse;

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
