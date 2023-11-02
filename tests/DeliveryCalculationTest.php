<?php
namespace Gwinn\Boxberry\Tests;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Calculate\DeliveryCalculation;
use Gwinn\Boxberry\Model\Calculate\DeliveryCosts;
use Gwinn\Boxberry\Model\Request\DeliveryCalculationRequest;
use Gwinn\Boxberry\Model\Request\DeliveryCostsRequest;
use JsonException;

/**
 * Class DeliveryCostsTest
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class DeliveryCalculationTest extends TestCase
{
    /**
     * @throws JsonException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->request = $this->serializer->deserialize(
            file_get_contents(
                self::REQUESTS_FOLDER . 'deliveryCalculation.json'
            ),
            DeliveryCalculationRequest::class,
            'json'
        );
    }

    /**
     * @throws ApiException
     * @throws GuzzleException
     */
    public function testDeliveryCalculation(): void
    {
        $response = $this->client->deliveryCalculation($this->request);

        static::assertResponse($response);
        static::assertInstanceOf(DeliveryCalculation::class, $response->getResponse());
    }
}
