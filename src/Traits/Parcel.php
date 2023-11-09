<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Builders\ResponseBuilder;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelSendRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelCheckRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelSendStoryRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelStoryRequest;
use Gwinn\Boxberry\Model\Response\CreateOrder\ParcelCreateResponse;
use Gwinn\Boxberry\Model\Response\CreateOrder\ParcelSendResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelCheckResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\ParcelInfo;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfoResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelListResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStory\ParcelSendStory;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStoryResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelStory\ParcelStory;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelStoryResponse;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Parcel.
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Parcel
{
    /**
     * Данный метод позволяет создать посылку в Личном кабинете. В метод необходимо передать кодированный в JSON массив.
     *
     * @group parcels
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function parcelCreate(ParcelCreateRequest $request): ParcelCreateResponse
    {
        $options = [
            'json' => [
                'token' => $this->token,
                'method' => 'ParselCreate',
                'sdata' => $this->serializer->toArray($request),
            ],
        ];

        /** @var ParcelCreateResponse $response */
        $response = (new ResponseBuilder($this->post($options)))
            ->serializeResponse(ParcelCreateResponse::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить список созданных через API актов передачи.
     * Если не указывать диапазоны дат, то будет возвращен последний созданный акт.
     *
     * @group parcels
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function parcelSendStory(ParcelSendStoryRequest $request): ParcelSendStoryResponse
    {
        $queryParam = $this->getQueryParams('ParselSendStory', $request);

        /** @var ParcelSendStoryResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ParcelSendStoryResponse::class, ParcelSendStory::class)
        ;

        return $response;
    }

    /**
     * Формирует акт передачи посылок в boxberry.
     * Обязательно наличие параметра (строки содержащей коды отслеживания заказов).
     *
     * @group parcels
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function parcelSend(ParcelSendRequest $request): ParcelSendResponse
    {
        $queryParam = $this->getQueryParams('ParselSend', $request);

        /** @var ParcelSendResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(ParcelSendResponse::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить список созданных через API посылок.
     * Если не указывать диапазоны дат, то будет возвращена последняя созданная посылка.
     *
     * @group parcels
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function parcelStory(ParcelStoryRequest $request): ParcelStoryResponse
    {
        $queryParam = $this->getQueryParams('ParselStory', $request);

        /** @var ParcelStoryResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(ParcelStoryResponse::class, ParcelStory::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить список всех трекинг кодов посылок которые есть в кабинете но не были сформированы в акт.
     * Строка сразу имеет вид необходимый для интеграции в метод ParcelSend.
     *
     * @group parcels
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function parcelList(): ParcelListResponse
    {
        $queryParam = $this->getQueryParams('ParselList');

        /** @var ParcelListResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(ParcelListResponse::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить ссылку на файл печати этикеток, список штрих-кодов коробок в посылке через запятую (,),
     * список штрих-кодов выгруженных коробок в посылке через запятую (,).
     *
     * @group parcels
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function parcelCheck(ParcelCheckRequest $request): ParcelCheckResponse
    {
        $queryParam = $this->getQueryParams('ParselCheck', $request);

        /** @var ParcelCheckResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(ParcelCheckResponse::class)
        ;

        return $response;
    }

    /**
     * Позволяет получить ссылку на файл печати этикеток, список штрих-кодов коробок в посылке через запятую (,),
     * список штрих-кодов выгруженных коробок в посылке через запятую (,).
     *
     * @group parcels
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function parcelInfo(ParcelInfoRequest $request): ParcelInfoResponse
    {
        $options = [
            'json' => array_merge([
                'token' => $this->token,
                'method' => ucfirst(__FUNCTION__),
            ], $this->serializer->toArray($request)),
        ];
        /** @var ParcelInfoResponse $response */
        $response = (new ResponseBuilder($this->post($options)))
            ->serializeArrayResponse(ParcelInfoResponse::class, ParcelInfo::class)
        ;

        return $response;
    }
}
