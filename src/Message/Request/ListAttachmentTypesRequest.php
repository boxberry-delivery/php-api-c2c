<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Request;

use Dumkaaa\Boxberry\Api\C2C\Message\Response\ListAttachmentTypesResponse;

/**
 * Метод, возвращает список возможных типов вложений.
 *
 * @method ListAttachmentTypesResponse send()
 * @see     ListAttachmentTypesResponse
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Request
 */
class ListAttachmentTypesRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListAttachmentTypes';
    }
}
