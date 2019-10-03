<?php

namespace Boxberry\C2C\Message\Response;

use Boxberry\C2C\Message\Request\CalculationLapRequest;
use Boxberry\Common\Exception\RuntimeException;

/**
 * Class CalculationLapResponse.
 *
 * @see     CalculationLapRequest
 *
 * @package Boxberry\C2C\Message\Response
 */
class CalculationLapResponse extends AbstractResponse
{
    /**
     * @inheritdoc
     *
     * @return bool
     *
     * @throws \Boxberry\Common\Exception\RuntimeException
     * @throws RuntimeException
     */
    public function getCollection($collectionItem = '')
    {
        throw new RuntimeException('Method not supported, `use getData()` instead');
    }
}
