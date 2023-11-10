<?php

namespace RetailCrm\Boxberry\Model\Request\OrderInfo;

use RetailCrm\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel;
use RetailCrm\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelInfoRequest implements RequestInterface
{
    /**
     * Массив посылок.
     *
     * @var Parcel[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel>")
     * @JMS\SerializedName("parcels")
     */
    public $parcels;
}
