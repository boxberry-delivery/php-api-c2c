<?php

namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\ListServicesRequest;
use Boxberry\C2C\Model\Service;

/**
 * Class ListServicesResponse.
 *
 * @see     ListServicesRequest
 *
 * @package Boxberry\C2C\Message\Response
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
