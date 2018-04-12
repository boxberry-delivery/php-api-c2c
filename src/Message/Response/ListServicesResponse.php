<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListServicesRequest;
use Dumkaaa\Boxberry\Api\C2C\Model\Service;

/**
 * Class ListServicesResponse
 *
 * @see     ListServicesRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
 */
class ListServicesResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return Service[]|object[]
     */
    public function getCollection($collectionItem = Service::class)
    {
        return parent::getCollection($collectionItem);
    }
}
