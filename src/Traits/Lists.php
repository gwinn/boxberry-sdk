<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Builders\ResponseBuilder;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Request\AccrualOfServices\ListServicesRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListCitiesFullRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListCitiesRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListPointsRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListPointsShortRequest;
use Gwinn\Boxberry\Model\Request\Tracking\ListStatusesFullRequest;
use Gwinn\Boxberry\Model\Request\Tracking\ListStatusesRequest;
use Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServices\ListServices;
use Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServicesResponse;
use Gwinn\Boxberry\Model\Response\Geography\CourierListCities\CourierListCities;
use Gwinn\Boxberry\Model\Response\Geography\CourierListCitiesResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListCities\ListCities;
use Gwinn\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull;
use Gwinn\Boxberry\Model\Response\Geography\ListCitiesFullResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListCitiesResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListPoints\ListPoints;
use Gwinn\Boxberry\Model\Response\Geography\ListPointsResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort;
use Gwinn\Boxberry\Model\Response\Geography\ListPointsShortResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListZips\ListZips;
use Gwinn\Boxberry\Model\Response\Geography\ListZipsResponse;
use Gwinn\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels;
use Gwinn\Boxberry\Model\Response\Geography\PointsForParcelsResponse;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatuses\ListStatuses;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFullResponse;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatusesResponse;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Lists.
 */
trait Lists
{
    /**
     * Метод позволяет получить список городов, в которых есть пункты выдачи заказов Boxberry.
     *
     * @group lists
     *
     * @throws ClientExceptionInterface
     * @throws ApiException
     */
    public function listCities(ListCitiesRequest $request): ListCitiesResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListCitiesResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListCitiesResponse::class, ListCities::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить список городов, в которых осуществляется доставка Boxberry.
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function listCitiesFull(ListCitiesFullRequest $request): ListCitiesFullResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListCitiesFullResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListCitiesFullResponse::class, ListCitiesFull::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить информацию о всех точках выдачи заказов.
     * Если вам необходимо увидеть точки, работающие с любым типом посылок, передайте параметр "prepaid" равный 1.
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function listPoints(ListPointsRequest $request): ListPointsResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListPointsResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListPointsResponse::class, ListPoints::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить коды всех отделений Boxberry
     * или для отдельно взятого города (при указании ''CityCode'') c датой последнего изменения.
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function listPointsShort(ListPointsShortRequest $request): ListPointsShortResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListPointsShortResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListPointsShortResponse::class, ListPointsShort::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить перечень и стоимость оказанных услуг по отправлению.
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function listServices(ListServicesRequest $request): ListServicesResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListServicesResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListServicesResponse::class, ListServices::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить информацию о статусах посылки. Обязательно наличие параметра (код отслеживания заказа).
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function listStatuses(ListStatusesRequest $request): ListStatusesResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListStatusesResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListStatusesResponse::class, ListStatuses::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить информацию о статусах посылки. Обязательно наличие параметра (код отслеживания заказа).
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function listStatusesFull(ListStatusesFullRequest $request): ListStatusesFullResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var ListStatusesFullResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(ListStatusesFullResponse::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить список почтовых индексов, для которых возможна курьерская доставка.
     *
     * @group lists
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function listZips(): ListZipsResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__));

        /** @var ListZipsResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ListZipsResponse::class, ListZips::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить список городов в которых осуществляется курьерская доставка.
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function courierListCities(): CourierListCitiesResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__));

        /** @var CourierListCitiesResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(
                CourierListCitiesResponse::class,
                CourierListCities::class
            )
        ;

        return $response;
    }

    /**
     * Позволяет получить список точек приёма посылок.
     *
     * @group lists
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function pointsForParcels(): PointsForParcelsResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__));

        /** @var PointsForParcelsResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(
                PointsForParcelsResponse::class,
                PointsForParcels::class
            )
        ;

        return $response;
    }
}
