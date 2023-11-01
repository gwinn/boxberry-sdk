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
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Response\Response;

/**
 * Class Parcel
 *
 * @package  Gwinn\Boxberry\Traits
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Parcel
{
    /**
     * Данный метод позволяет создать посылку в Личном кабинете. В метод необходимо передать кодированный в JSON массив.
     *
     * @group parcels
     *
     * @param ParcelCreateRequest $request
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function parcelCreate(ParcelCreateRequest $request): Response
    {
        $options = [
            'form_params' => [
                'token' => $this->token,
                'method' => 'ParselCreate',
                'sdata' => $this->serializer->serialize($request, 'json')
            ]
         ];

        return new Response($this->client->post(self::API_URL, $options), ParcelCreate::class);
    }

    /**
     * Позволяет получить список созданных через API актов передачи.
     * Если не указывать диапазоны дат, то будет возвращен последний созданный акт.
     *
     * @group parcels
     *
     * @param string $from период с в формате YYYYMMDD
     * @param string $to Код    период до в формате YYYYMMDD
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function parcelSendStory(string $from = '', string $to = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => 'ParselSendStory'
                    ],
                    array_filter([
                        'from' => $from ?: false,
                        'to' => $to ?: false
                    ])
                )
            ])
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParcelSendStory::class)
        ));
    }

    /**
     * Формирует акт передачи посылок в boxberry.
     * Обязательно наличие параметра (строки содержащей коды отслеживания заказов).
     *
     * @group parcels
     *
     * @param string $imIds Код отслеживания отправления
     * @param string $shippingDate
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function parcelSend(string $imIds, string $shippingDate=''): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => 'ParselSend',
                    'ImIds' => $imIds,
                ],
                array_filter([
                    'shippingDate'=>$shippingDate ?: false,
                ])
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParcelSend::class)
        ));
    }

    /**
     * Позволяет получить список созданных через API посылок.
     * Если не указывать диапазоны дат, то будет возвращена последняя созданная посылка.
     *
     * @group parcels
     *
     * @param string $from период с в формате YYYYMMDD
     * @param string $to период до в формате YYYYMMDD
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function parcelStory(string $from = '', string $to = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => 'ParselStory'
                    ],
                    array_filter([
                        'from' => $from ?: false,
                        'to' => $to ?: false
                    ])
                )
            ])
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParcelStory::class)
        ));
    }

    /**
     * Позволяет получить список всех трекинг кодов посылок которые есть в кабинете но не были сформированы в акт.
     * Строка сразу имеет вид необходимый для интеграции в метод ParcelSend.
     *
     * @group parcels
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function parcelList(): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => 'ParselList',
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParcelList::class)
        ));
    }

    /**
     * Позволяет получить ссылку на файл печати этикеток, список штрих-кодов коробок в посылке через запятую (,),
     * список штрих-кодов выгруженных коробок в посылке через запятую (,).
     *
     * @group parcels
     *
     * @param string $imId Код отслеживания отправления
     *
     * @return Response
     * @throws GuzzleException|ApiException
     */
    public function parcelCheck(string $imId): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => 'ParselCheck',
                    'ImId' => $imId
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParcelCheck::class)
        ));
    }
}
