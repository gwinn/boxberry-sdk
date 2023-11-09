<?php

namespace Gwinn\Boxberry\Tests;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest;
use Pock\Enum\RequestMethod;
use Pock\Exception\JsonException;

/**
 * Class ApiErrorTest.
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
class ApiErrorTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param string $method
     * @param array $mockData
     * @param array $requestData
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws JsonException
     */
    public function test(string $method, array $mockData, array $requestData): void
    {
        $this->expectException(ApiException::class);
        $this->client = $this->getMock($mockData);
        $request = $this->serializer->deserialize(
            file_get_contents(
                self::REQUESTS_FOLDER . $requestData['filename']
            ),
            $requestData['className'],
            'json'
        );
        $this->client->{$method}($request);
    }

    public function dataProvider(): array
    {
        return [
            'ErrString' => [
                'method' => 'deliveryCalculation',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::ERROR_RESPONSE_FOLDER . 'ErrString.json'
                    ),
                ],
                'requestData' => [
                    'filename' => 'deliveryCalculation.json',
                    'className' => DeliveryCalculationRequest::class,
                ],
            ],
            'ErrorMessage' => [
                'method' => 'deliveryCalculation',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::ERROR_RESPONSE_FOLDER . 'ErrorMessage.json'
                    ),
                ],
                'requestData' => [
                    'filename' => 'deliveryCalculation.json',
                    'className' => DeliveryCalculationRequest::class,
                ],
            ],
            'ErrBool' => [
                'method' => 'deliveryCalculation',
                'mockData' => [
                    'requestedMethod' => RequestMethod::POST,
                    'responseCode' => 200,
                    'response' => file_get_contents(
                        self::ERROR_RESPONSE_FOLDER . 'ErrBool.json'
                    ),
                ],
                'requestData' => [
                    'filename' => 'deliveryCalculation.json',
                    'className' => DeliveryCalculationRequest::class,
                ],
            ],
        ];
    }
}
