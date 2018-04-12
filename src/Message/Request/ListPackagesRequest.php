<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Request;

use Dumkaaa\Boxberry\Api\C2C\Message\Response\ListPackagesResponse;

/**
 * Метод для получения списка доступных упаковок.
 *
 * @method ListPackagesResponse send()
 * @see     ListPackagesResponse
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Request
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
