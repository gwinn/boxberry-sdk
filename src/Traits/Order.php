<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\CreateOrder\ParcelCreate;
use Gwinn\Boxberry\Model\CreateOrder\ParcelSend;
use Gwinn\Boxberry\Model\OrderInfo\ParcelCheck;
use Gwinn\Boxberry\Model\OrderInfo\ParcelList;
use Gwinn\Boxberry\Model\OrderInfo\ParcelSendStory;
use Gwinn\Boxberry\Model\OrderInfo\ParcelStory;
use Gwinn\Boxberry\Model\ParselDel;
use Gwinn\Boxberry\Model\Request\CancelOrderRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderDeliveryTypeRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderDetailsRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderIssueRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderStorageDateRequest;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Response\Response;
use Gwinn\Boxberry\Model\UpdateOrder\UpdateOrder;

/**
 * Class Parcel
 *
 * @package  Gwinn\Boxberry\Traits
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Order
{
    /**
     * Сервис для отзыва посылки (отмены доставки до получателя).
     *
     * @group orders
     *
     * @param CancelOrderRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function cancelOrder(CancelOrderRequest $request): Response
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

        return new Response($this->client->get(self::API_URL, $queryParam));
    }

    /**
     * Сервис для изменения данных посылки: ФИО, номер телефона получателя, e-mail получателя.
     *
     * @group orders
     *
     * @param ChangeOrderDetailsRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function changeOrderDetails(ChangeOrderDetailsRequest $request): Response
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

        return new Response($this->client->get(self::API_URL, $queryParam));
    }

    /**
     * Сервис для изменения срока хранения посылки
     *
     * @group orders
     *
     * @param ChangeOrderStorageDateRequest $request
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function changeOrderStorageDate(ChangeOrderStorageDateRequest $request): Response
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

        return new Response($this->client->get(self::API_URL, $queryParam));
    }

    /**
     * Сервис для изменения типа выдачи посылки.
     *
     * @group orders
     *
     * @param ChangeOrderIssueRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function changeOrderIssue(ChangeOrderIssueRequest $request): Response
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

        return new Response($this->client->get(self::API_URL, $queryParam));
    }

    /**
     * Сервис для изменения параметров доставки:
     * изменение ПВЗ
     * изменение доставки с ПВЗ на КД
     * изменение адреса КД
     * изменение с КД на ПВЗ.
     *
     * @group orders
     *
     * @param ChangeOrderDeliveryTypeRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function changeOrderDeliveryType(ChangeOrderDeliveryTypeRequest $request): Response
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

        return new Response($this->client->get(self::API_URL, $queryParam));
    }
}
