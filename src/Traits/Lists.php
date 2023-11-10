<?php

namespace RetailCrm\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use RetailCrm\Boxberry\Builders\ResponseBuilder;
use RetailCrm\Boxberry\Exceptions\ApiException;
use RetailCrm\Boxberry\Model\Request\AccrualOfServices\ListServicesRequest;
use RetailCrm\Boxberry\Model\Request\Geography\ListCitiesFullRequest;
use RetailCrm\Boxberry\Model\Request\Geography\ListCitiesRequest;
use RetailCrm\Boxberry\Model\Request\Geography\ListPointsRequest;
use RetailCrm\Boxberry\Model\Request\Geography\ListPointsShortRequest;
use RetailCrm\Boxberry\Model\Request\Tracking\ListStatusesFullRequest;
use RetailCrm\Boxberry\Model\Request\Tracking\ListStatusesRequest;
use RetailCrm\Boxberry\Model\Response\AccrualOfServices\ListServices\ListServices;
use RetailCrm\Boxberry\Model\Response\AccrualOfServices\ListServicesResponse;
use RetailCrm\Boxberry\Model\Response\Geography\CourierListCities\CourierListCities;
use RetailCrm\Boxberry\Model\Response\Geography\CourierListCitiesResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListCities\ListCities;
use RetailCrm\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull;
use RetailCrm\Boxberry\Model\Response\Geography\ListCitiesFullResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListCitiesResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListPoints\ListPoints;
use RetailCrm\Boxberry\Model\Response\Geography\ListPointsResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort;
use RetailCrm\Boxberry\Model\Response\Geography\ListPointsShortResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListZips\ListZips;
use RetailCrm\Boxberry\Model\Response\Geography\ListZipsResponse;
use RetailCrm\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels;
use RetailCrm\Boxberry\Model\Response\Geography\PointsForParcelsResponse;
use RetailCrm\Boxberry\Model\Response\Tracking\ListStatuses\ListStatuses;
use RetailCrm\Boxberry\Model\Response\Tracking\ListStatusesFullResponse;
use RetailCrm\Boxberry\Model\Response\Tracking\ListStatusesResponse;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Lists.
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
