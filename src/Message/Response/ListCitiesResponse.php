<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListCitiesRequest;
use Dumkaaa\Boxberry\Api\C2C\Model\City;

/**
 * Class ListCitiesResponse
 *
 * @see     ListCitiesRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
 */
class ListCitiesResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return City[]|object[]
     */
    public function getCollection($collectionItem = City::class)
    {
        return parent::getCollection($collectionItem);
    }

    /**
     * @inheritdoc
     *
     * @return City[]|object[]
     */
    public function getCollection2($collectionItem = City::class)
    {
        return parent::getCollection($collectionItem);
    }
}
