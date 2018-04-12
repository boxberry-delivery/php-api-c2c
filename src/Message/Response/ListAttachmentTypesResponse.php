<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListAttachmentTypesRequest;
use Dumkaaa\Boxberry\Api\C2C\Model\AttachmentType;

/**
 * Class ListAttachmentTypesResponse
 *
 * @see     ListAttachmentTypesRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
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
