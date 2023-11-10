<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *

 */
class PickupPoint
{
    /**
     * Код пункта выдачи.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickup_point_code")
     */
    public $pickupPointCode;

    /**
     * Адрес пункта выдачи.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickup_point_address")
     */
    public $pickupPointAddress;
}
