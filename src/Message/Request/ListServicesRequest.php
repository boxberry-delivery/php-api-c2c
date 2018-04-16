<?php


namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\ListServicesResponse;

/**
 * Метод для получения списка дополнительных услуг.
 *
 * @method ListServicesResponse send()
 * @see     ListServicesResponse
 * @package Boxberry\C2C\Message\Request
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
