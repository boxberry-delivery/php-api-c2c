<?php


namespace Dumkaaa\Boxberry\Api\C2C\Model;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListCitiesRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListPointsRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListZipsRequest;
use Dumkaaa\Boxberry\Api\Common\Model\AbstractModel;
use Dumkaaa\Boxberry\Api\Common\Model\CreateFromAttributesTrait;

class Sender extends AbstractModel
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
     * @var string ФИО отправителя
     */
    public $client_name;

    /**
     * @var int Тип документа:
     *      • 1, если паспорт РФ;
     *      • 2, если паспорт иностранного гражданина;
     *      • 3, военный билет;
     *      • 4, Загранпаспорт.
     */
    public $document;

    /**
     * @var string Серия документа
     */
    public $doc_series;

    /**
     * @var string Номер документа
     */
    public $doc_num;

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
