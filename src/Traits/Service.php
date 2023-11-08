<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Builders\ResponseBuilder;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest;
use Gwinn\Boxberry\Model\Request\Calculate\DeliveryCostsRequest;
use Gwinn\Boxberry\Model\Request\CourierShipment\CreateIntakeRequest;
use Gwinn\Boxberry\Model\Request\Geography\PointsDescriptionRequest;
use Gwinn\Boxberry\Model\Request\Geography\ZipCheckRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\OrdersBalanceRequest;
use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculationResponse;
use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCostsResponse;
use Gwinn\Boxberry\Model\Response\CourierShipment\CreateIntakeResponse;
use Gwinn\Boxberry\Model\Response\Geography\PointsDescriptionResponse;
use Gwinn\Boxberry\Model\Response\Geography\ZipCheck\ZipCheck;
use Gwinn\Boxberry\Model\Response\Geography\ZipCheckResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\OrdersBalance\OrdersBalance;
use Gwinn\Boxberry\Model\Response\OrderInfo\OrdersBalanceResponse;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Service.
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Service
{
    /**
     * Метод позволяет получить всю информацию по пункту выдачи, включая фотографии.
     *
     * @group services
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function pointsDescription(PointsDescriptionRequest $request): PointsDescriptionResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var PointsDescriptionResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(PointsDescriptionResponse::class)
        ;
        return $response;
    }

    /**
     * Метод позволяет получить всю информацию по пункту выдачи, включая фотографии.
     *
     * @group services
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function zipCheck(ZipCheckRequest $request): ZipCheckResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ZipCheckResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ZipCheckResponse::class, ZipCheck::class)
        ;
        return $response;
    }

    /**
     * Данный метод позволяет узнать стоимость доставки посылки до ПВЗ или клиента(курьерская доставка).
     * Все расчеты указаны в рублях. Описание полей смотрите в примере интеграции.
     *
     * @group services
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function deliveryCosts(DeliveryCostsRequest $request): DeliveryCostsResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var DeliveryCostsResponse $response*/
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(DeliveryCostsResponse::class)
        ;
        return $response;
    }

    /**
     * Данный метод позволяет узнать стоимость доставки посылки до ПВЗ или клиента(курьерская доставка).
     * Все расчеты указаны в рублях. Описание полей смотрите в примере интеграции.
     *
     * @group services
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function deliveryCalculation(DeliveryCalculationRequest $request): DeliveryCalculationResponse
    {
        $options = [
            'json' => array_merge(
                [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                ],
                $this->serializer->toArray($request)
            ),
        ];

        /** @var DeliveryCalculationResponse $response*/
        $response = (new ResponseBuilder($this->post($options)))
            ->serializeResponse(DeliveryCalculationResponse::class)
        ;
        return $response;
    }

    /**
     * Создание заявки на забор посылок.
     *
     * @group services
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function createIntake(CreateIntakeRequest $request): CreateIntakeResponse
    {
        $options = [
            'json' => array_merge(
                [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                ],
                $this->serializer->toArray($request)
            ),
        ];

        /** @var CreateIntakeResponse $response*/
        $response = (new ResponseBuilder($this->post($options)))
            ->serializeResponse(CreateIntakeResponse::class)
        ;
        return $response;
    }

    /**
     * Метод позволяет получить информацию по заказам, которые фактически переданы на доставку в Boxberry,
     * но они еще не доставлены клиенту.
     *
     * @group services
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function ordersBalance(OrdersBalanceRequest $request): OrdersBalanceResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var OrdersBalanceResponse $response*/
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(OrdersBalanceResponse::class, OrdersBalance::class)
        ;
        return $response;
    }
}
