<?php


namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\ListPackagesRequest;
use Boxberry\C2C\Model\Point;
use Boxberry\Common\Message\ResponseInterface;

/**
 * Class ListPointsResponse
 *
 * @see     ListPackagesRequest
 * @package Boxberry\C2C\Message\Response
 */
class ListPointsResponse extends AbstractResponse implements ResponseInterface
{
    /**
     * @inheritdoc
     *
     * @return Point[]|object[]
     */
    public function getCollection($collectionItem = Point::class)
    {
        return parent::getCollection($collectionItem);
    }
}
