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
 * Class ApiErrorTest
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ApiErrorTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @throws ApiException
     * @throws GuzzleException
     * @throws JsonException
     */
    public function test($method, $mockData, $requestData): void
    {
        $this->expectException(ApiException::class);
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
    }

    public function dataProvider(): array
    {
        return [
            'ErrString'=>[
                'method'=>'deliveryCalculation',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::ERROR_RESPONSE_FOLDER . 'ErrString.json'
                    ),
                ],
                'requestData'=>[
                    'filename'=>'deliveryCalculation.json',
                    'className'=>DeliveryCalculationRequest::class,
                    'arguments'=>null,
                ]
            ],
            'ErrorMessage'=>[
                'method'=>'deliveryCalculation',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::ERROR_RESPONSE_FOLDER . 'ErrorMessage.json'
                    ),
                ],
                'requestData'=>[
                    'filename'=>'deliveryCalculation.json',
                    'className'=>DeliveryCalculationRequest::class,
                    'arguments'=>null,
                ]
            ],
            'ErrBool'=>[
                'method'=>'deliveryCalculation',
                'mockData'=>[
                    'requestedMethod'=>RequestMethod::POST,
                    'responseCode'=>200,
                    'response'=>file_get_contents(
                        self::ERROR_RESPONSE_FOLDER . 'ErrBool.json'
                    ),
                ],
                'requestData'=>[
                    'filename'=>'deliveryCalculation.json',
                    'className'=>DeliveryCalculationRequest::class,
                    'arguments'=>null,
                ]
            ],
        ];
    }
}
