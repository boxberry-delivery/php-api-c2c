<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListPackagesRequest;
use Dumkaaa\Boxberry\Api\C2C\Model\Point;
use Dumkaaa\Boxberry\Api\Common\Message\ResponseInterface;

/**
 * Class ListPointsResponse
 *
 * @see     ListPackagesRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
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
