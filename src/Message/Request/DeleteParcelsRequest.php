<?php


namespace Boxberry\C2C\Message\Request;

use Boxberry\C2C\Message\Response\DeleteParcelsResponse;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Метод позволяет удалить посылки с указанными номерами накладных.
 *
 * @method DeleteParcelsResponse send()
 * @see     DeleteParcelsResponse
 * @package Boxberry\C2C\Message\Request
 */
class DeleteParcelsRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'ListCities';
    }

    /**
     * @param string[] $parcels Номера ЭН
     *
     * @return $this
     */
    public function setParcels($parcels)
    {
        return $this->setParameter('parcels', $parcels);
    }

    /**
     * @inheritdoc
     */
    public function getValidationRules()
    {
        $baseRules = parent::getValidationRules();

        $rules = [
            'parcels' => new Assert\Required([
                new Assert\NotBlank(),
                new Assert\Type(['type' => 'array']),
            ]),
        ];

        return array_merge($baseRules, $rules);
    }
}
