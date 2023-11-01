<?php

use Gwinn\Boxberry\Model\CreateOrder\ParcelCreate;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Customer;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Export;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Items;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Kurdost;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Shop;

/**
 * Class ParcelCreateTest
 *
 * @package  SaaS\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelCreateTest extends TestCase
{
    public function testParcelCreate(): void
    {
        $mockHandler = $this->getMockHandler(
            [['className' => ParcelCreate::class, 'statusCode' => 200]]
        );
        $apiClient = $this->getApiClient($mockHandler);

        $request = new ParcelCreateRequest();

        $kurdost = new Kurdost();
        $kurdost->addressp='addr';
        $kurdost->city='city';
        $kurdost->deliveryDate='2019-07-08';
        $kurdost->fragile='1';
        $kurdost->index='603034';
        $kurdost->optimize='1';
        $kurdost->packingStrict=1;
        $kurdost->packingType=1;
        $kurdost->strong='1';
        $kurdost->timesfrom1='11:00';
        $kurdost->timesfrom2='17:00';
        $kurdost->timesto1='16:00';
        $kurdost->timesto2='20:00';
        $shop = new Shop();
        $customer = new Customer();
        $items = new Items();
        $export = new Export();

        $request->kurdost = $kurdost;
        $request->shop = $shop;
        $request->customer = $customer;
        $request->export = $export;
        $request->items = [$items];

        $response = $apiClient->parcelCreate($request);

        static::assertResponse($response);
        static::assertInstanceOf(ParcelCreate::class, $response->getResponse());
    }
}
