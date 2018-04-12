<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Request;

use Dumkaaa\Boxberry\Api\C2C\Message\Response\ListServicesResponse;

/**
 * Метод для получения списка дополнительных услуг.
 *
 * @method ListServicesResponse send()
 * @see     ListServicesResponse
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Request
 */
class ListServicesRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListServices';
    }
}
