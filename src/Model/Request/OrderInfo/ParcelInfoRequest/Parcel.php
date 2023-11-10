<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Parcel.
 *
 * @category Models
 *

 */
class Parcel
{
    /**
     * Трек-номер посылки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     */
    public $track;

    /**
     * Номер заказа ИМ.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order_id")
     */
    public $orderId;
}
