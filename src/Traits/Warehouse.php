<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model;
use Gwinn\Boxberry\Model\Calculate\DeliveryCalculation;
use Gwinn\Boxberry\Model\Calculate\DeliveryCosts;
use Gwinn\Boxberry\Model\CourierShipment\CreateIntake;
use Gwinn\Boxberry\Model\Geography\PointsDescription;
use Gwinn\Boxberry\Model\Geography\ZipCheck;
use Gwinn\Boxberry\Model\OrderInfo\OrdersBalance;
use Gwinn\Boxberry\Model\Request\CreateIntakeRequest;
use Gwinn\Boxberry\Model\Request\DeliveryCalculationRequest;
use Gwinn\Boxberry\Model\Request\DeliveryCostsRequest;
use Gwinn\Boxberry\Model\Request\WarehouseRequest;
use Gwinn\Boxberry\Model\Response\Response;

/**
 * Class Service
 *
 * @package  Gwinn\Boxberry\Traits
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Warehouse
{
    /**
     * Сервис позволяет создать склады.
     *
     * @group services
     *
     * @param WarehouseRequest $request
     * @return Response
     * @throws ApiException
     * @throws GuzzleException
     */
    public function warehouseCreate(WarehouseRequest $request): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__)
                    ],
                    $this->serializer->toArray($request)
                )
            ]
        );

        return new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            )
        );
    }

    /**
     * Сервис позволяет обновить информацию о складе.
     *
     * @group services
     *
     * @param WarehouseRequest $request
     * @return Response
     * @throws ApiException
     * @throws GuzzleException
     */
    public function warehouseUpdate(WarehouseRequest $request): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__)
                    ],
                    $this->serializer->toArray($request)
                )
            ]
        );

        return new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            )
        );
    }

    /**
     * Сервис позволяет удалить склады.
     *
     * @group services
     *
     * @param string $code
     * @return Response
     * @throws ApiException
     * @throws GuzzleException
     */
    public function warehouseDelete(string $code): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'code' => $code
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            )
        ));
    }

    /**
     * Сервис позволяет получить список активных складов.
     *
     * @group services
     *
     * @param string $code
     * @return Response
     * @throws ApiException
     * @throws GuzzleException
     */
    public function warehouseInfo(string $code=''): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                ],
                array_filter([
                    'code' => $code ?: false,
                ])
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            )
        ));
    }
}
