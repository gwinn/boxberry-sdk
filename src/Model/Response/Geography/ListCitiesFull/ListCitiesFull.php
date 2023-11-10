<?php

namespace Gwinn\Boxberry\Model\Response\Geography\ListCitiesFull;

use Gwinn\Boxberry\Model\Response\Geography\ListCities\ListCities;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesFullResponse.
 *
 * @category Models
 *

 */
class ListCitiesFull extends ListCities
{
    /**
     * Наличие пунктов выдачи заказов в городе (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("PickupPoint")
     */
    public $pickupPoint;

    /**
     * Наличие курьерской доставки в городе.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CourierDelivery")
     */
    public $courierDelivery;
}
