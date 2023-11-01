<?php

namespace Gwinn\Boxberry\Model\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierListCities
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class CourierListCities
{
    /**
     * Населенный пункт
     *
     * @var string $city
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("City")
     *
     */
    public $city;

    /**
     * Район
     *
     * @var string $region
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Region")
     *
     */
    public $region;

    /**
     * Область
     *
     * @var string $area
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Area")
     *
     */
    public $area;

    /**
     * Срок доставки
     *
     * @var integer $deliveryPeriod
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryPeriod")
     *
     */
    public $deliveryPeriod;
}
