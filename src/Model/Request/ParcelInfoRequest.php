<?php

namespace Gwinn\Boxberry\Model\Request;

use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Customer;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Export;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Kurdost;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Shop;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelInfoRequest
{
    /**
     * Массив посылок
     *
     * @var array $parcels
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\ParcelInfoRequest\Parcel>")
     * @JMS\SerializedName("parcels")
     *
     */
    public $parcels;
}
