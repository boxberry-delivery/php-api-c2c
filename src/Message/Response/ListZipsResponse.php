<?php


namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\ListZipsRequest;
use Boxberry\C2C\Model\Zip;

/**
 * Class ListZipsResponse
 *
 * @see     ListZipsRequest
 * @package Boxberry\C2C\Message\Response
 */
class ListZipsResponse extends AbstractResponse
{
    public function getData()
    {
        $data = $this->data;
        /** @var array $data */ //TODO

        return $data;
    }

    /**
     * @inheritdoc
     *
     * @return Zip[]|object[]
     */
    public function getCollection($collectionItem = Zip::class)
    {
        return parent::getCollection($collectionItem);
    }
}
