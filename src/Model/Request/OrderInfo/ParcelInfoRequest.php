<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel;
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
class ParcelInfoRequest
{
    /**
     * Массив посылок.
     *
     * @var Parcel[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel>")
     * @JMS\SerializedName("parcels")
     */
    public $parcels;
}
