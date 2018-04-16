<?php


namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\ListStatusesRequest;
use Boxberry\C2C\Model\ListStatuses;

/**
 * Class ListStatusesResponse
 *
 * @see     ListStatusesRequest
 * @package Boxberry\C2C\Message\Response
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
