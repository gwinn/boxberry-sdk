<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel;
use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest.
 *
 * @category Models
 *

 */
class ParcelInfoRequest implements RequestInterface
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
