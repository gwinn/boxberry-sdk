<?php
namespace Gwinn\Boxberry\Tests;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\CourierShipment\CreateIntake;
use Gwinn\Boxberry\Model\Request\CreateIntakeRequest;
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
class CreateIntakeTest extends TestCase
{
    /**
     * @throws JsonException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->request = $this->serializer->deserialize(
            file_get_contents(
                self::REQUESTS_FOLDER . 'createIntake.json'
            ),
            CreateIntakeRequest::class,
            'json');
    }

    /**
     * @throws ApiException
     * @throws GuzzleException
     */
    public function testCreateIntake(): void
    {
        $response = $this->client->createIntake($this->request);

        static::assertResponse($response);
        static::assertInstanceOf(CreateIntake::class, $response->getResponse());
    }
}
