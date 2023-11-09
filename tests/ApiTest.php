<?php

namespace Gwinn\Boxberry\Tests;

use Gwinn\Boxberry\Model\Request\AccrualOfServices\ListServicesRequest;
use Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest;
use Gwinn\Boxberry\Model\Request\Calculate\DeliveryCostsRequest;
use Gwinn\Boxberry\Model\Request\CourierShipment\CreateIntakeRequest;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelSendRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListCitiesFullRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListCitiesRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListPointsRequest;
use Gwinn\Boxberry\Model\Request\Geography\ListPointsShortRequest;
use Gwinn\Boxberry\Model\Request\Geography\PointsDescriptionRequest;
use Gwinn\Boxberry\Model\Request\Geography\ZipCheckRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelCheckRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelSendStoryRequest;
use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelStoryRequest;
use Gwinn\Boxberry\Model\Request\Tracking\ListStatusesFullRequest;
use Gwinn\Boxberry\Model\Request\Tracking\ListStatusesRequest;
use Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServices\ListServices;
use Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServicesResponse;
use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult;
use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculationResponse;
use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCostsResponse;
use Gwinn\Boxberry\Model\Response\CourierShipment\CreateIntakeResponse;
use Gwinn\Boxberry\Model\Response\CreateOrder\ParcelCreateResponse;
use Gwinn\Boxberry\Model\Response\CreateOrder\ParcelSendResponse;
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
use Gwinn\Boxberry\Model\Response\Geography\PointsDescriptionResponse;
use Gwinn\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels;
use Gwinn\Boxberry\Model\Response\Geography\PointsForParcelsResponse;
use Gwinn\Boxberry\Model\Response\Geography\ZipCheck\ZipCheck;
use Gwinn\Boxberry\Model\Response\Geography\ZipCheckResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelCheckResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\ParcelInfo;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfoResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelListResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStory\ParcelSendStory;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStoryResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelStory\ParcelStory;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelStoryResponse;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatuses\ListStatuses;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFullResponse;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatusesResponse;
use Pock\Enum\RequestMethod;
use Pock\Exception\JsonException;

/**
 * Class ApiTest.
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @internal
 * @coversNothing
 */
class ApiTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @throws JsonException
     */
    public function test(string $method, array $mockData, array $responseData, array $requestData = null): void
    {
        $this->client = $this->getMock($mockData);
        $request = null !== $requestData ?
            $this->serializer->deserialize(
                file_get_contents(
                    self::REQUESTS_FOLDER . $requestData['filename']
                ),
                $requestData['className'],
                'json'
            ) : null;
        $response = $this->client->{$method}($request);
        if (!empty($response)) {
            static::assertResponseList($response, $responseData['responseElementClass'], $responseData['responseType']);
        }
    }

    public function dataProvider(): array
    {
        return [
            'parcelCreate' => [
                'method' => 'parcelCreate',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelCreate.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelCreateResponse::class,
                    'responseType' => ParcelCreateResponse::class,
                ],
                'requestData' => [
                    'filename' => 'parcelCreate.json',
                    'className' => ParcelCreateRequest::class,
                ],
            ],
            'parcelSendStory' => [
                'method' => 'parcelSendStory',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelSendStory.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelSendStory::class,
                    'responseType' => ParcelSendStoryResponse::class,
                ],
                'requestData' => [
                    'filename' => 'parcelSendStory.json',
                    'className' => ParcelSendStoryRequest::class,
                ],
            ],
            'parcelSend' => [
                'method' => 'parcelSend',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelSend.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelSendResponse::class,
                    'responseType' => ParcelSendResponse::class,
                ],
                'requestData' => [
                    'filename' => 'parcelSend.json',
                    'className' => ParcelSendRequest::class,
                ],
            ],
            'parcelStory' => [
                'method' => 'parcelStory',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelStory.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelStory::class,
                    'responseType' => ParcelStoryResponse::class,
                ],
                'requestData' => [
                    'filename' => 'parcelStory.json',
                    'className' => ParcelStoryRequest::class,
                ],
            ],
            'parcelList' => [
                'method' => 'parcelList',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelList.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelListResponse::class,
                    'responseType' => ParcelListResponse::class,
                ],
            ],
            'parcelCheck' => [
                'method' => 'parcelCheck',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelCheck.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelCheckResponse::class,
                    'responseType' => ParcelCheckResponse::class,
                ],
                'requestData' => [
                    'filename' => 'parcelCheck.json',
                    'className' => ParcelCheckRequest::class,
                ],
            ],
            'parcelInfo' => [
                'method' => 'parcelInfo',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelInfo.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ParcelInfo::class,
                    'responseType' => ParcelInfoResponse::class,
                ],
                'requestData' => [
                    'filename' => 'parcelInfo.json',
                    'className' => ParcelInfoRequest::class,
                ],
            ],
            'listCities' => [
                'method' => 'listCities',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listCities.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListCities::class,
                    'responseType' => ListCitiesResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listCities.json',
                    'className' => ListCitiesRequest::class,
                ],
            ],
            'listCitiesFull' => [
                'method' => 'listCitiesFull',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listCitiesFull.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListCitiesFull::class,
                    'responseType' => ListCitiesFullResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listCitiesFull.json',
                    'className' => ListCitiesFullRequest::class,
                ],
            ],
            'listPoints' => [
                'method' => 'listPoints',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listPoints.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListPoints::class,
                    'responseType' => ListPointsResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listPoints.json',
                    'className' => ListPointsRequest::class,
                ],
            ],
            'listPointsShort' => [
                'method' => 'listPointsShort',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listPointsShort.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListPointsShort::class,
                    'responseType' => ListPointsShortResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listPointsShort.json',
                    'className' => ListPointsShortRequest::class,
                ],
            ],
            'listServices' => [
                'method' => 'listServices',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listServices.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListServices::class,
                    'responseType' => ListServicesResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listServices.json',
                    'className' => ListServicesRequest::class,
                ],
            ],
            'listStatuses' => [
                'method' => 'listStatuses',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listStatuses.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListStatuses::class,
                    'responseType' => ListStatusesResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listStatuses.json',
                    'className' => ListStatusesRequest::class,
                ],
            ],
            'listStatusesFull' => [
                'method' => 'listStatusesFull',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listStatusesFull.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListStatusesFullResponse::class,
                    'responseType' => ListStatusesFullResponse::class,
                ],
                'requestData' => [
                    'filename' => 'listStatusesFull.json',
                    'className' => ListStatusesFullRequest::class,
                ],
            ],
            'listZips' => [
                'method' => 'listZips',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'listZips.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ListZips::class,
                    'responseType' => ListZipsResponse::class,
                ],
            ],
            'courierListCities' => [
                'method' => 'courierListCities',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'courierListCities.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => CourierListCities::class,
                    'responseType' => CourierListCitiesResponse::class,
                ],
            ],
            'pointsForParcels' => [
                'method' => 'pointsForParcels',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'pointsForParcels.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => PointsForParcels::class,
                    'responseType' => PointsForParcelsResponse::class,
                ],
            ],
            'pointsDescription' => [
                'method' => 'pointsDescription',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'pointsDescription.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => PointsDescriptionResponse::class,
                    'responseType' => PointsDescriptionResponse::class,
                ],
                'requestData' => [
                    'filename' => 'pointsDescription.json',
                    'className' => PointsDescriptionRequest::class,
                ],
            ],
            'zipCheck' => [
                'method' => 'zipCheck',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'zipCheck.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => ZipCheck::class,
                    'responseType' => ZipCheckResponse::class,
                ],
                'requestData' => [
                    'filename' => 'zipCheck.json',
                    'className' => ZipCheckRequest::class,
                ],
            ],
            'deliveryCosts' => [
                'method' => 'deliveryCosts',
                'mockData' => [
                    'requestedMethod' => RequestMethod::GET,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'deliveryCosts.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => DeliveryCostsResponse::class,
                    'responseType' => DeliveryCostsResponse::class,
                ],
                'requestData' => [
                    'filename' => 'deliveryCosts.json',
                    'className' => DeliveryCostsRequest::class,
                ],
            ],
            'deliveryCalculation' => [
                'method' => 'deliveryCalculation',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'deliveryCalculation.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => DeliveryCalculationResult::class,
                    'responseType' => DeliveryCalculationResponse::class,
                ],
                'requestData' => [
                    'filename' => 'deliveryCalculation.json',
                    'className' => DeliveryCalculationRequest::class,
                ],
            ],
            'createIntake' => [
                'method' => 'createIntake',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::RESPONSE_FOLDER . 'createIntake.json'
                    ),
                ],
                'responseData' => [
                    'responseElementClass' => CreateIntakeResponse::class,
                    'responseType' => CreateIntakeResponse::class,
                ],
                'requestData' => [
                    'filename' => 'createIntake.json',
                    'className' => CreateIntakeRequest::class,
                ],
            ],
        ];
    }
}
