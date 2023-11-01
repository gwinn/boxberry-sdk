<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Model\CreateOrder\ParcelCreate;
use Gwinn\Boxberry\Model\CreateOrder\ParselSend;
use Gwinn\Boxberry\Model\OrderInfo\ParselCheck;
use Gwinn\Boxberry\Model\OrderInfo\ParselList;
use Gwinn\Boxberry\Model\OrderInfo\ParselSendStory;
use Gwinn\Boxberry\Model\OrderInfo\ParselStory;
use Gwinn\Boxberry\Model\ParselDel;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Response\Response;
use Gwinn\Boxberry\Model;

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
     * @throws GuzzleException
     */
    public function parcelCreate(ParcelCreateRequest $request): Response
    {
        $options = [
            'form_params' => [
                'token' => $this->token,
                'method' => ucfirst(__FUNCTION__),
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
     * @throws GuzzleException
     */
    public function parselSendStory(string $from = '', string $to = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__)
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
            sprintf('array<%s>', ParselSendStory::class)
        ));
    }

    /**
     * Формирует акт передачи посылок в boxberry.
     * Обязательно наличие параметра (строки содержащей коды отслеживания заказов).
     *
     * @group parcels
     *
     * @param string $imIds Код отслеживания отправления
     *
     * @return Response
     * @throws GuzzleException
     */
    public function parselSend(string $imIds): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'ImIds' => $imIds
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParselSend::class)
        ));
    }

    /**
     * Позволяет получить список созданных через API посылок.
     * Если не указывать диапазоны дат, то будет возвращена последняя созданная посылка.
     *
     * @group parcels
     *
     * @param string $from период с в формате YYYYMMDD
     * @param string $to Код    период до в формате YYYYMMDD
     *
     * @return Response
     * @throws GuzzleException
     */
    public function parselStory(string $from = '', string $to = ''): Response
    {
        $queryParam = array_merge(
            $this->params,
            array_filter([
                'query' => array_merge(
                    [
                        'token' => $this->token,
                        'method' => ucfirst(__FUNCTION__)
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
            sprintf('array<%s>', ParselStory::class)
        ));
    }

    /**
     * Позволяет удалить посылку, но только в том случае, если она не была проведена в акте.
     * Внимание! сервис работает только с посылками созданными через API ЛК
     *
     * @group parcels
     *
     * @param string $imId Код отслеживания отправления
     *
     * @return Response
     * @throws GuzzleException
     */
    public function parselDel(string $imId): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'ImId' => $imId
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParselDel::class)
        ));
    }

    /**
     * Позволяет получить список всех трекинг кодов посылок которые есть в кабинете но не были сформированы в акт.
     * Строка сразу имеет вид необходимый для интеграции в метод ParselSend.
     *
     * @group parcels
     *
     * @return Response
     */
    public function parselList(): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__)
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParselList::class)
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
     * @throws GuzzleException
     */
    public function parselCheck(string $imId): Response
    {
        $queryParam = array_merge(
            $this->params,
            [
                'query' => [
                    'token' => $this->token,
                    'method' => ucfirst(__FUNCTION__),
                    'ImId' => $imId
                ]
            ]
        );

        return (new Response(
            $this->client->get(
                self::API_URL,
                $queryParam
            ),
            sprintf('array<%s>', ParselCheck::class)
        ));
    }
}
