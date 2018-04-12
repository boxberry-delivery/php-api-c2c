<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListStatusesRequest;
use Dumkaaa\Boxberry\Api\C2C\Model\ListStatuses;

/**
 * Class ListStatusesResponse
 *
 * @see     ListStatusesRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
 */
class ListStatusesResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return ListStatuses[]|object[]
     */
    public function getCollection($collectionItem = ListStatuses::class)
    {
        return parent::getCollection($collectionItem);
    }
}
