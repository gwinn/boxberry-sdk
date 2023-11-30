<?php

namespace Gwinn\Boxberry\Model\Response\Geography\CourierListCities;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierListCitiesResponse.
 *
 * @category Models
 *

 */
class CourierListCities
{
    /**
     * Населенный пункт
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("City")
     */
    public $city;

    /**
     * Район.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Region")
     */
    public $region;

    /**
     * Область.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Area")
     */
    public $area;

    /**
     * Срок доставки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliveryPeriod")
     */
    public $deliveryPeriod;
}
