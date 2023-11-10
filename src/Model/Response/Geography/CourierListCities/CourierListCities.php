<?php

namespace RetailCrm\Boxberry\Model\Response\Geography\CourierListCities;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierListCitiesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryPeriod")
     */
    public $deliveryPeriod;
}
