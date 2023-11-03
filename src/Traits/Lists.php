<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\AccrualOfServices\ListServices;
use Gwinn\Boxberry\Model\Geography\CourierListCities;
use Gwinn\Boxberry\Model\Geography\ListCities;
use Gwinn\Boxberry\Model\Geography\ListCitiesFull;
use Gwinn\Boxberry\Model\Geography\ListPoints;
use Gwinn\Boxberry\Model\Geography\ListPointsShort;
use Gwinn\Boxberry\Model\Geography\ListZips;
use Gwinn\Boxberry\Model\Geography\PointsForParcels;
use Gwinn\Boxberry\Model\Response\Response;
use Gwinn\Boxberry\Model\Tracking\ListStatuses;
use Gwinn\Boxberry\Model\Tracking\ListStatusesFull;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Lists
 *
 * @package  Gwinn\Boxberry\Traits
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Lists
{
    /**
     * Метод позволяет получить список городов, в которых есть пункты выдачи заказов Boxberry.
     *
     * @group lists
     *
     * @param string $countryCode Код страны
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listCities(string $countryCode = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'CountryCode' => $countryCode ?: false
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListCities::class)
        ));
    }

    /**
     * Позволяет получить список городов, в которых осуществляется доставка Boxberry.
     *
     * @group lists
     *
     * @param string $countryCode
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listCitiesFull(string $countryCode = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'CountryCode' => $countryCode ?: false
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListCitiesFull::class)
        ));
    }

    /**
     * Позволяет получить информацию о всех точках выдачи заказов.
     * Если вам необходимо увидеть точки, работающие с любым типом посылок, передайте параметр "prepaid" равный 1
     *
     * @group lists
     *
     * @param string $countryCode
     * @param string $citycode
     * @param boolean $prepaid
     * @param bool $isIncludePostamat
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listPoints(
        string $countryCode = '',
        string $citycode = '',
        bool $prepaid = false,
        bool $isIncludePostamat = false
    ): Response {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__),
                        'prepaid' => (int) ($prepaid ?: false),
                        'is_include_postamat' => (int) ($isIncludePostamat ?: false),
                    ],
                    array_filter([
                        'CountryCode' => $countryCode ?: false,
                        'CityCode' => $citycode ?: false,
                    ])
                )
            ]
        );

        return new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListPoints::class)
        );
    }

    /**
     * Позволяет получить коды всех отделений Boxberry
     * или для отдельно взятого города (при указании ''CityCode'') c датой последнего изменения.
     *
     * @group lists
     *
     * @param string $countryCode
     * @param string $citycode Параметр города
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listPointsShort(
        string $countryCode = '',
        string $citycode = ''
    ): Response {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__)
                    ],
                    array_filter([
                        'CountryCode' => $countryCode ?: false,
                        'CityCode' => $citycode ?: false
                    ])
                )
            ]
        );

        return new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListPointsShort::class)
        );
    }

    /**
     * Позволяет получить перечень и стоимость оказанных услуг по отправлению.
     *
     * @group lists
     *
     * @param string $imId Код отслеживания заказа
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listServices(string $imId = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'ImId' => $imId ?: false
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListServices::class)
        ));
    }

    /**
     * Позволяет получить информацию о статусах посылки. Обязательно наличие параметра (код отслеживания заказа).
     *
     * @group lists
     *
     * @param string $imId Код отслеживания заказа
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listStatuses(string $imId = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'ImId' => $imId ?: false
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListStatuses::class)
        ));
    }

    /**
     * Позволяет получить информацию о статусах посылки. Обязательно наличие параметра (код отслеживания заказа).
     *
     * @group lists
     *
     * @param string $imId Код отслеживания заказа
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listStatusesFull(string $imId = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'ImId' => $imId ?: false
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            ListStatusesFull::class
        ));
    }

    /**
     * Позволяет получить список почтовых индексов, для которых возможна курьерская доставка.
     *
     * @group lists
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function listZips(): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__)
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ListZips::class)
        ));
    }

    /**
     * Позволяет получить список городов в которых осуществляется курьерская доставка
     *
     * @group lists
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function courierListCities(): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__)
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', CourierListCities::class)
        ));
    }

    /**
     * Позволяет получить список точек приёма посылок.
     *
     * @group lists
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function pointsForParcels(): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__)
                ]
            ])
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', PointsForParcels::class)
        ));
    }
}
