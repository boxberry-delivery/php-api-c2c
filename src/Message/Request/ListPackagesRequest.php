<?php

namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\ListPackagesResponse;

/**
 * Метод для получения списка доступных упаковок.
 *
 * @method ListPackagesResponse send()
 *
 * @see     ListPackagesResponse
 *
 * @package Boxberry\C2C\Message\Request
 */
class ListPackagesRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListPackages';
    }
}
