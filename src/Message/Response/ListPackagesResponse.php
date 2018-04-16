<?php


namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\ListPackagesRequest;
use Boxberry\C2C\Model\Package;

/**
 * Class ListPackagesResponse
 *
 * @see     ListPackagesRequest
 * @package Boxberry\C2C\Message\Response
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
