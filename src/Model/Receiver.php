<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

class Receiver extends AbstractModel
{
    use CreateFromAttributesTrait;

    /**
     * @see City
     * @see ListCitiesRequest
     * @var string Код города
     */
    public $city;

    /**
     * @see Point
     * @see ListPointsRequest
     * @var string Идентификатор отделения
     */
    public $point_code;

    /**
     * @var string ФИО получателя
     */
    public $client_name;

    /**
     * @var string Телефон
     */
    public $phone;

    /**
     * @var string Адрес e-mail
     */
    public $email;

    /**
     * @see Zip
     * @see ListZipsRequest
     * @var string Индекс отправителя
     */
    public $zip;

    /**
     * @var string Адрес отправителя
     */
    public $address;
}
