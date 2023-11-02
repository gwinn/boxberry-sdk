<?php

namespace Gwinn\Boxberry\Tests;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\CreateOrder\ParcelCreate;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest;
use JsonException;

/**
 * Class ParcelCreateTest
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelCreateTest extends TestCase
{
    /**
     * @throws JsonException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->request = $this->serializer->deserialize(
                file_get_contents(
                    self::REQUESTS_FOLDER . 'parcelCreate.json'
                ),
            ParcelCreateRequest::class,
            'json');
    }

    /**
     * @throws ApiException
     * @throws GuzzleException
     */
    public function testParcelCreate(): void
    {
        $response = $this->client->parcelCreate($this->request);

        static::assertResponse($response);
        static::assertInstanceOf(ParcelCreate::class, $response->getResponse());
    }
}
