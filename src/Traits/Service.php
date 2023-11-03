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
use Gwinn\Boxberry\Model\Response\Response;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Service
 *
 * @package  Gwinn\Boxberry\Traits
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Service
{
    /**
     * Метод позволяет получить всю информацию по пункту выдачи, включая фотографии.
     *
     * @group services
     *
     * @param string $code Код ПВЗ
     * @param bool $photo Если photo равно 1 - будет возвращен массив полноразмерных изображений ПВЗ в base64.
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function pointsDescription(string $code, bool $photo = false): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__),
                        'code' => $code
                    ],
                    array_filter([
                        'photo' => $photo ?: false
                    ])
                )
            ])
        );

        return new Response(
            $this->get($queryParam),
            PointsDescription::class
        );
    }

    /**
     * Метод позволяет получить всю информацию по пункту выдачи, включая фотографии.
     *
     * @group services
     *
     * @param string $zip
     * @param string $countryCode
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function zipCheck(string $zip, string $countryCode = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'zip' => $zip,
                    'CountryCode' => $countryCode ?: false
                ]
            ]
        );

        return new Response(
            $this->get($queryParam),
            sprintf('array<%s>', ZipCheck::class)
        );
    }

    /**
     * Данный метод позволяет узнать стоимость доставки посылки до ПВЗ или клиента(курьерская доставка).
     * Все расчеты указаны в рублях. Описание полей смотрите в примере интеграции.
     *
     * @group services
     *
     * @param DeliveryCostsRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function deliveryCosts(DeliveryCostsRequest $request): Response
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

        return new Response($this->get($queryParam),DeliveryCosts::class);
    }

    /**
     * Данный метод позволяет узнать стоимость доставки посылки до ПВЗ или клиента(курьерская доставка).
     * Все расчеты указаны в рублях. Описание полей смотрите в примере интеграции.
     *
     * @group services
     *
     * @param DeliveryCalculationRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function deliveryCalculation(DeliveryCalculationRequest $request): Response
    {
        $options = [
            'json' => array_merge(
                [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                ],
                $this->serializer->toArray($request)
            )
        ];

        return new Response($this->post($options),DeliveryCalculation::class);
    }

    /**
     * Создание заявки на забор посылок
     *
     * @group services
     *
     * @param CreateIntakeRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function createIntake(CreateIntakeRequest $request): Response
    {
        $options = [
            'json' => array_merge(
                [
                'token' => $this->token,
                'method' => ucfirst(__FUNCTION__)
                ],
                $this->serializer->toArray($request)
            )
         ];

        return new Response($this->post($options), CreateIntake::class);
    }

    /**
     * Метод позволяет получить информацию по заказам, которые фактически переданы на доставку в Boxberry,
     * но они еще не доставлены клиенту.
     *
     * @group services
     *
     * @param int $onlyPostpaid Если равно =1, возвращает список заказов только с постоплатой
     *
     * @return Response
     * @throws GuzzleException|ApiException
     * @throws ClientExceptionInterface
     */
    public function ordersBalance(int $onlyPostpaid = 0): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'OnlyPostpaid' => $onlyPostpaid
                ]
            ]
        );

        return (new Response(
            $this->get($queryParam),
            sprintf('array<%s>', OrdersBalance::class)
        ));
    }
}
