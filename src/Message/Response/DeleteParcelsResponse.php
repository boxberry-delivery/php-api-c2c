<?php


namespace Dumkaaa\Boxberry\Api\C2C\Message\Response;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\DeleteParcelsRequest;
use Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException;

/**
 * Class DeleteParcelsResponse
 *
 * @see     DeleteParcelsRequest
 * @package Dumkaaa\Boxberry\Api\C2C\Message\Response
 */
class DeleteParcelsResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return void
     * @throws \Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException
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
     * @throws \Dumkaaa\Boxberry\Api\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public function getCollection($collectionItem = '')
    {
        throw new RuntimeException('Method not supported, `use getData()` instead');
    }
}
