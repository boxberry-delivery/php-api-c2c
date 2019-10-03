<?php

namespace Boxberry\C2C\Message\Request;

use Boxberry\Common\Message\Request\AbstractRequest as BaseAbstractRequest;

abstract class AbstractRequest extends BaseAbstractRequest
{
    /**
     * Возвращает содержимое запроса.
     *
     * @return array|mixed
     */
    public function getData()
    {
        return $this->getParameters();
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        return $this->setParameter('api_token', $token);
    }

    /**
     * @return string|null
     */
    public function getToken()
    {
        return $this->getParameter('api_token');
    }
}
