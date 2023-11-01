<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Model;
use Gwinn\Boxberry\Model\Calculate\DeliveryCosts;
use Gwinn\Boxberry\Model\CourierShipment\CreateIntake;
use Gwinn\Boxberry\Model\Geography\PointsDescription;
use Gwinn\Boxberry\Model\Geography\ZipCheck;
use Gwinn\Boxberry\Model\OrderInfo\OrdersBalance;
use Gwinn\Boxberry\Model\Request\CreateIntakeRequest;
use Gwinn\Boxberry\Model\Request\DeliveryCostsRequest;
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
trait Service
{
    /**
     * Метод позволяет получить всю информацию по пункту выдачи, включая фотографии.
     *
     * @group services
     *
     * @param string $code Код ПВЗ
     * @param integer $photo Если photo равно 1 - будет возвращен массив полноразмерных изображений ПВЗ в base64.
     *
     * @return Response
     * @throws GuzzleException
     */
    public function pointsDescription(string $code, int $photo = 0): Response
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

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            PointsDescription::class
        ));
    }

    /**
     * Метод позволяет получить всю информацию по пункту выдачи, включая фотографии.
     *
     * @group services
     *
     * @param string $zip Код ПВЗ
     *
     * @return Response
     * @throws GuzzleException
     */
    public function zipCheck(string $zip): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'zip' => $zip
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ZipCheck::class)
        ));
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
     * @throws GuzzleException
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

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            DeliveryCosts::class
        ));
    }

    /**
     * Создание заявки на забор посылок
     *
     * @group services
     *
     * @param CreateIntakeRequest $request
     *
     * @return Response
     * @throws GuzzleException
     */
    public function createIntake(CreateIntakeRequest $request): Response
    {
        $options = [
            'form_params' => array_merge(
                [
                'token' => $this->token,
                'method' => ucfirst(__FUNCTION__)
                ],
                $this->serializer->serialize($request, 'json')
            )
         ];

        return new Response($this->client->post(self::API_URL, $options), CreateIntake::class);
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
     * @throws GuzzleException
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
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', OrdersBalance::class)
        ));
    }
}
