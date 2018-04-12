<?php


namespace Dumkaaa\Boxberry\Api\C2C;

use Dumkaaa\Boxberry\Api\C2C\Message\Request\CalculationLapRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\DeleteParcelsRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListAttachmentTypesRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListCitiesRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListPackagesRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListPointsRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListServicesRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListStatusesRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\ListZipsRequest;
use Dumkaaa\Boxberry\Api\C2C\Message\Request\NewOrderRequest;
use Dumkaaa\Boxberry\Api\Common\AbstractDelivery;

class Delivery extends AbstractDelivery
{
    public function getName()
    {
        return 'C2C';
    }

    public function getDefaultParameters()
    {
        return [
            'endPoint' => null,
            'token'    => null,
        ];
    }

    public function setToken($token)
    {
        return $this->setParameter('token', $token);
    }

    public function setEndPoint($token)
    {
        return $this->setParameter('endPoint', $token);
    }

    /**
     * Метод позволяет рассчитать стоимость доставки ПиП.
     *
     * $options = [
     *      'sender_city'   string          (Required) Код города отправителя
     *      'receiver_city' string          (Required) Код города получателя
     *      'public_price'  int             (Required) Объявленная стоимость в копейках
     *      'promo_code'    string          (Optional) Промо код на скидку
     *      'package'       array|Package   (Required) Данные об упаковке
     *      'list_services' string[]        (Optional) Массив данных кодов дополнительных услуг
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return CalculationLapRequest
     */
    public function calculate(array $options)
    {
        $request = $this->createRequest(CalculationLapRequest::class, $options);

        /** @var CalculationLapRequest $request */
        return $request;
    }

    /**
     * Метод позволяет удалить посылки с указанными номерами накладных.
     *
     * $options = [
     *      'parcels' string[] (Required) Номера ЭН
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return DeleteParcelsRequest
     */
    public function deleteParcels(array $options)
    {
        $request = $this->createRequest(DeleteParcelsRequest::class, $options);

        /** @var DeleteParcelsRequest $request */
        return $request;
    }

    /**
     * Метод, возвращает список возможных типов вложений.
     *
     * $options = [
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListAttachmentTypesRequest
     */
    public function getAttachmentTypes(array $options = [])
    {
        $request = $this->createRequest(ListAttachmentTypesRequest::class, $options);

        /** @var ListAttachmentTypesRequest $request */
        return $request;
    }

    /**
     * Метод позволяет получить список городов, в которых есть пункты выдачи заказов Boxberry.
     *
     * $options = [
     *      'lap_receive'   bool (Optional) Доступен прием писем и посылок
     *      'lap_take'      bool (Optional) Доступна выдача писем и посылок
     *      'cd_available'  bool (Optional) Доступна курьерская доставка
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListCitiesRequest
     */
    public function getCities(array $options = [])
    {
        $request = $this->createRequest(ListCitiesRequest::class, $options);

        /** @var ListCitiesRequest $request */
        return $request;
    }

    /**
     * Метод для получения списка доступных упаковок.
     *
     * $options = [
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListPackagesRequest
     */
    public function getPackages(array $options = [])
    {
        $request = $this->createRequest(ListPackagesRequest::class, $options);

        /** @var ListPackagesRequest $request */
        return $request;
    }

    /**
     * Метод, позволяющий получить список ПВЗ.
     *
     * $options = [
     *      'payment'   bool    (Optional)  Только с возможностью приема оплаты
     *      'city'      string  (Optional)  Код города в ИС Boxberry
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListPointsRequest
     */
    public function getPoints(array $options = [])
    {
        $request = $this->createRequest(ListPointsRequest::class, $options);

        /** @var ListPointsRequest $request */
        return $request;
    }

    /**
     * Метод для получения списка дополнительных услуг.
     *
     * $options = [
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListServicesRequest
     */
    public function getServices(array $options = [])
    {
        $request = $this->createRequest(ListServicesRequest::class, $options);

        /** @var ListServicesRequest $request */
        return $request;
    }

    /**
     * Метод, позволяющий получить статусы отправления по номеру отслеживания.
     *
     * $options = [
     *      'tracking'   string (Required) Номер ЭН
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListStatusesRequest
     */
    public function getStatuses(array $options)
    {
        $request = $this->createRequest(ListStatusesRequest::class, $options);

        /** @var ListStatusesRequest $request */
        return $request;
    }

    /**
     * Метод позволяет получить список почтовых индексов, для которых возможна курьерская доставка.
     *
     * $options = [
     * ]
     * @param array $options Входные параметры (см. выше)
     *
     * @return ListZipsRequest
     */
    public function getZips(array $options = [])
    {
        $request = $this->createRequest(ListZipsRequest::class, $options);

        /** @var ListZipsRequest $request */
        return $request;
    }

    /**
     * Метод, позволяющий создать новый заказ.
     *
     * $options = [
     *      'delivery_type' int             (Required)  Тип доставки, возможные значения:
     *                                                      • 1, если доставка от двери до двери;
     *                                                      • 2, если доставка от двери до отделения;
     *                                                      • 3, если доставка от отделения до двери;
     *                                                      • 4, если доставка от отделения до отделения.
     *      'public_price'  int             (Required)  Объявленная стоимость в копейках
     *      'payer_type'    int             (Required)  Плательщик:
     *                                                      • 1, если отправитель;
     *                                                      • 2, если получатель;
     *      'prepayd_sum'   int             (Optional)  Предоплаченная сумма в копейках
     *      'sender'        array|Sender    (Required)  Информация об отправителе
     *      'receiver'      array|Receiver  (Required)  Данные о получателе
     *      'package'       array           (Required)  Упаковка
     *      'promo_code'    string          (Optional)  Промокод
     *      'list_services' string[]        (Optional)  Массив данных кодов дополнительных услуг
     *      'safe_deal'     array|SafeDeal  (Optional)  Данные о безопасной сделке
     * ]
     *
     * @param array $options Входные параметры (см. выше)
     *
     * @return NewOrderRequest
     */
    public function createOrder(array $options)
    {
        $request = $this->createRequest(NewOrderRequest::class, $options);

        /** @var NewOrderRequest $request */
        return $request;
    }
}
