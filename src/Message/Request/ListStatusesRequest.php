<?php

namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\ListStatusesResponse;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Метод, позволяющий получить статусы отправления по номеру отслеживания.
 *
 * @method ListStatusesResponse send()
 *
 * @see     ListStatusesResponse
 *
 * @package Boxberry\C2C\Message\Request
 */
class ListStatusesRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListStatuses';
    }

    /**
     * @param string $tracking Номер ЭН
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        return $this->setParameter('tracking', $tracking);
    }

    /**
     * @inheritdoc
     */
    public function getValidationRules()
    {
        $baseRules = parent::getValidationRules();

        $rules = [
            'tracking' => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'string']),
            ]),
        ];

        return array_merge($baseRules, $rules);
    }
}
