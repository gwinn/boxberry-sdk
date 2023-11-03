<?php

namespace Gwinn\Boxberry\Tests;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\AccrualOfServices\ListServices;
use Gwinn\Boxberry\Model\Calculate\DeliveryCalculation;
use Gwinn\Boxberry\Model\Calculate\DeliveryCosts;
use Gwinn\Boxberry\Model\CourierShipment\CreateIntake;
use Gwinn\Boxberry\Model\CreateOrder\ParcelCreate;
use Gwinn\Boxberry\Model\CreateOrder\ParcelSend;
use Gwinn\Boxberry\Model\Geography\CourierListCities;
use Gwinn\Boxberry\Model\Geography\ListCities;
use Gwinn\Boxberry\Model\Geography\ListCitiesFull;
use Gwinn\Boxberry\Model\Geography\ListPoints;
use Gwinn\Boxberry\Model\Geography\ListPointsShort;
use Gwinn\Boxberry\Model\Geography\ListZips;
use Gwinn\Boxberry\Model\Geography\PointsDescription;
use Gwinn\Boxberry\Model\Geography\PointsForParcels;
use Gwinn\Boxberry\Model\Geography\ZipCheck;
use Gwinn\Boxberry\Model\OrderInfo\OrdersBalance;
use Gwinn\Boxberry\Model\OrderInfo\ParcelCheck;
use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;
use Gwinn\Boxberry\Model\OrderInfo\ParcelList;
use Gwinn\Boxberry\Model\OrderInfo\ParcelSendStory;
use Gwinn\Boxberry\Model\OrderInfo\ParcelStory;
use Gwinn\Boxberry\Model\Request\CancelOrderRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderDeliveryTypeRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderDetailsRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderIssueRequest;
use Gwinn\Boxberry\Model\Request\ChangeOrderStorageDateRequest;
use Gwinn\Boxberry\Model\Request\CreateIntakeRequest;
use Gwinn\Boxberry\Model\Request\DeliveryCalculationRequest;
use Gwinn\Boxberry\Model\Request\DeliveryCostsRequest;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Request\ParcelInfoRequest;
use Gwinn\Boxberry\Model\Response\SuccessResponse;
use Gwinn\Boxberry\Model\Tracking\ListStatuses;
use Gwinn\Boxberry\Model\Tracking\ListStatusesFull;
use Pock\Enum\RequestMethod;
use Pock\Exception\JsonException;

/**
 * Class ApiTest
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ApiTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @throws ApiException
     * @throws GuzzleException
     * @throws JsonException
     */
    public function test($method, $mockData, $responseData, $requestData): void
    {
        $this->client=$this->getMock($mockData);
        if(empty($requestData['arguments'])){
            $request = $this->serializer->deserialize(
                file_get_contents(
                    self::REQUESTS_FOLDER . $requestData['filename']
                ),
                $requestData['className'],
                'json'
            );
            $response = $this->client->$method($request);
        }
        else{
            $response = $this->client->$method(...$requestData['arguments']);
        }
        static::assertResponse($response);
        static::assertResponseList($response, $responseData['responseElementClass'], $responseData['responseType']);
    }

    public function dataProvider(): array
    {
        return [
            'parcelCreate'=>[
                'method'=>'parcelCreate',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelCreate.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelCreate::class,
                    'responseType'=>ParcelCreate::class,
                ],
                'requestData'=>[
                    'filename'=>'parcelCreate.json',
                    'className'=>ParcelCreateRequest::class,
                    'arguments'=>null,
                ]
            ],
            'parcelSendStory'=>[
                'method'=>'parcelSendStory',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelSendStory.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelSendStory::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['20210805','20210806']
                ]
            ],
            'parcelSend'=>[
                'method'=>'parcelSend',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelSend.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelSend::class,
                    'responseType'=>ParcelSend::class,
                ],
                'requestData'=>[
                    'arguments'=>['AAP114630642,AAP114630687', '2024-09-08'],
                ]
            ],
            'parcelStory'=>[
                'method'=>'parcelStory',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelStory.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelStory::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['20210805','20210806']
                ]
            ],
            'parcelList'=>[
                'method'=>'parcelList',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelList.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelList::class,
                    'responseType'=>ParcelList::class,
                ],
                'requestData'=>[
                    'arguments'=>[''],
                ]
            ],
            'parcelCheck'=>[
                'method'=>'parcelCheck',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelCheck.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelCheck::class,
                    'responseType'=>ParcelCheck::class,
                ],
                'requestData'=>[
                    'arguments'=>['AAP114630642']
                ]
            ],
            'parcelInfo'=>[
                'method'=>'parcelInfo',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'parcelInfo.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ParcelInfo::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'filename'=>'parcelInfo.json',
                    'className'=>ParcelInfoRequest::class,
                    'arguments'=>null,
                ]
            ],
            'listCities'=>[
                'method'=>'listCities',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listCities.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListCities::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['643']
                ]
            ],
            'listCitiesFull'=>[
                'method'=>'listCitiesFull',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listCitiesFull.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListCitiesFull::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['643']
                ]
            ],
            'listPoints'=>[
                'method'=>'listPoints',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listPoints.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListPoints::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['643', '68']
                ]
            ],
            'listPointsShort'=>[
                'method'=>'listPointsShort',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listPointsShort.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListPointsShort::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['643', '68']
                ]
            ],
            'listServices'=>[
                'method'=>'listServices',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listServices.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListServices::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['AAP114630642']
                ]
            ],
            'listStatuses'=>[
                'method'=>'listStatuses',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listStatuses.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListStatuses::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['AAP114630642']
                ]
            ],
            'listStatusesFull'=>[
                'method'=>'listStatusesFull',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listStatusesFull.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListStatusesFull::class,
                    'responseType'=>ListStatusesFull::class,
                ],
                'requestData'=>[
                    'arguments'=>['AAP114630642']
                ]
            ],
            'listZips'=>[
                'method'=>'listZips',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'listZips.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ListZips::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>[''],
                ]
            ],
            'courierListCities'=>[
                'method'=>'courierListCities',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'courierListCities.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>CourierListCities::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['']
                ]
            ],
            'pointsForParcels'=>[
                'method'=>'pointsForParcels',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'pointsForParcels.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>PointsForParcels::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>[''],
                ]
            ],
            'cancelOrder'=>[
                'method'=>'cancelOrder',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'changeOrder.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>SuccessResponse::class,
                    'responseType'=>SuccessResponse::class,
                ],
                'requestData'=>[
                    'filename'=>'cancelOrder.json',
                    'className'=>CancelOrderRequest::class,
                    'arguments'=>null,
                ]
            ],
            'changeOrderDetails'=>[
                'method'=>'changeOrderDetails',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'changeOrder.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>SuccessResponse::class,
                    'responseType'=>SuccessResponse::class,
                ],
                'requestData'=>[
                    'filename'=>'changeOrderDetails.json',
                    'className'=>ChangeOrderDetailsRequest::class,
                    'arguments'=>null,
                ]
            ],
            'changeOrderStorageDate'=>[
                'method'=>'changeOrderStorageDate',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'changeOrder.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>SuccessResponse::class,
                    'responseType'=>SuccessResponse::class,
                ],
                'requestData'=>[
                    'filename'=>'changeOrderStorageDate.json',
                    'className'=>ChangeOrderStorageDateRequest::class,
                    'arguments'=>null,
                ]
            ],
            'changeOrderIssue'=>[
                'method'=>'changeOrderIssue',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'changeOrder.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>SuccessResponse::class,
                    'responseType'=>SuccessResponse::class,
                ],
                'requestData'=>[
                    'filename'=>'changeOrderIssue.json',
                    'className'=>ChangeOrderIssueRequest::class,
                    'arguments'=>null,
                ]
            ],
            'changeOrderDeliveryType'=>[
                'method'=>'changeOrderDeliveryType',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'changeOrder.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>SuccessResponse::class,
                    'responseType'=>SuccessResponse::class,
                ],
                'requestData'=>[
                    'filename'=>'changeOrderDeliveryType.json',
                    'className'=>ChangeOrderDeliveryTypeRequest::class,
                    'arguments'=>null,
                ]
            ],
            'pointsDescription'=>[
                'method'=>'pointsDescription',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'pointsDescription.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>PointsDescription::class,
                    'responseType'=>PointsDescription::class,
                ],
                'requestData'=>[
                    'arguments'=>['99451'],
                ]
            ],
            'zipCheck'=>[
                'method'=>'zipCheck',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'zipCheck.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>ZipCheck::class,
                    'responseType'=>'array',
                ],
                'requestData'=>[
                    'arguments'=>['108818']
                ]
            ],
            'deliveryCosts'=>[
                'method'=>'deliveryCosts',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::GET,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'deliveryCosts.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>DeliveryCosts::class,
                    'responseType'=>DeliveryCosts::class,
                ],
                'requestData'=>[
                    'filename'=>'deliveryCosts.json',
                    'className'=>DeliveryCostsRequest::class,
                    'arguments'=>null,
                ]
            ],
            'deliveryCalculation'=>[
                'method'=>'deliveryCalculation',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'deliveryCalculation.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>DeliveryCalculation::class,
                    'responseType'=>DeliveryCalculation::class,
                ],
                'requestData'=>[
                    'filename'=>'deliveryCalculation.json',
                    'className'=>DeliveryCalculationRequest::class,
                    'arguments'=>null,
                ]
            ],
            'createIntake'=>[
                'method'=>'createIntake',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::RESPONSE_FOLDER . 'createIntake.json'
                    ),
                ],
                'responseData'=>[
                    'responseElementClass'=>CreateIntake::class,
                    'responseType'=>CreateIntake::class,
                ],
                'requestData'=>[
                    'filename'=>'createIntake.json',
                    'className'=>CreateIntakeRequest::class,
                    'arguments'=>null,
                ]
            ]
        ];
    }
}
