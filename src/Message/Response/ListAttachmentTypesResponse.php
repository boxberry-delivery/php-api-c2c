<?php


namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\ListAttachmentTypesRequest;
use Boxberry\C2C\Model\AttachmentType;

/**
 * Class ListAttachmentTypesResponse
 *
 * @see     ListAttachmentTypesRequest
 * @package Boxberry\C2C\Message\Response
 */
class ListAttachmentTypesResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return AttachmentType[]|object[]
     */
    public function getCollection($collectionItem = AttachmentType::class)
    {
        return parent::getCollection($collectionItem);
    }
}
