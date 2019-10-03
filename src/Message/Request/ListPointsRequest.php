<?php

namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\ListPointsResponse;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Метод, позволяющий получить список ПВЗ.
 *
 * @method ListPointsResponse send()
 *
 * @see     ListPointsResponse
 *
 * @package Boxberry\C2C\Message\Request
 */
class ListPointsRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListPoints';
    }

    /**
     * @param bool $payment Только с возможностью приема оплаты
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        return $this->setParameter('payment', $payment);
    }

    /**
     * @param string $city �од города в ИС Boxberry
     *                     Указывается если есть необходимость наложить фильтр по
     *                     городу, иначе возвращаются отделения во всех городах
     *
     * @return $this
     */
    public function setCity($city)
    {
        return $this->setParameter('city', $city);
    }

    /**
     * @inheritdoc
     */
    public function getValidationRules()
    {
        $baseRules = parent::getValidationRules();

        $rules = [
            'payment' => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'bool']),
            ]),
            'city' => new Assert\Optional([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'string']),
            ]),
        ];

        return array_merge($baseRules, $rules);
    }
}
