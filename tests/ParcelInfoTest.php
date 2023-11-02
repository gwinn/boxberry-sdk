<?php
namespace Gwinn\Boxberry\Tests;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\CourierShipment\CreateIntake;
use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;
use Gwinn\Boxberry\Model\Request\ParcelInfoRequest;
use JsonException;

/**
 * Class CreateIntakeTest
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelInfoTest extends TestCase
{
    /**
     * @throws JsonException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->request = $this->serializer->deserialize(
            file_get_contents(
                self::REQUESTS_FOLDER . 'parcelInfo.json'
            ),
            ParcelInfoRequest::class,
            'json');
    }

    /**
     * @throws ApiException
     * @throws GuzzleException
     */
    public function testParcelInfo(): void
    {
        $response = $this->client->parcelInfo($this->request);

        static::assertResponse($response);
        static::assertResponseList($response,ParcelInfo::class, 'array');
    }
}
