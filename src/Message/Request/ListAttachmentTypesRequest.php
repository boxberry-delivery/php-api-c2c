<?php


namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\ListAttachmentTypesResponse;

/**
 * Метод, возвращает список возможных типов вложений.
 *
 * @method ListAttachmentTypesResponse send()
 * @see     ListAttachmentTypesResponse
 * @package Boxberry\C2C\Message\Request
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
