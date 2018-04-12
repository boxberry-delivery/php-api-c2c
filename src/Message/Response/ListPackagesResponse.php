<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListPackagesRequest;
use Dumkaaa\Boxberry\Api\C2C\Model\Package;

/**
 * Class ListPackagesResponse
 *
 * @see     ListPackagesRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
 */
class ListPackagesResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return Package[]|object[]
     */
    public function getCollection($collectionItem = Package::class)
    {
        return parent::getCollection($collectionItem);
    }
}
