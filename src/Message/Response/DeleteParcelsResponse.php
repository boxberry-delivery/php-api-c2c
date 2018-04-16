<?php


namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\DeleteParcelsRequest;
use Boxberry\Common\Exception\RuntimeException;

/**
 * Class DeleteParcelsResponse
 *
 * @see     DeleteParcelsRequest
 * @package Boxberry\C2C\Message\Response
 */
class DeleteParcelsResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return void
     * @throws \Boxberry\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public function getData()
    {
        throw new RuntimeException('Method not supported, `use isSuccessful()` instead');
    }

    /**
     * @inheritdoc
     *
     * @return void
     * @throws \Boxberry\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public function getCollection($collectionItem = '')
    {
        throw new RuntimeException('Method not supported, `use getData()` instead');
    }
}
