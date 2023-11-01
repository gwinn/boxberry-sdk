<?php

namespace Gwinn\Boxberry\Model\Geography;

use Er1z\FakeMock\Annotations;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierListCities
 *
 * @category Models
 * @package  SaaS\Service\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField()
     */
    public $deliveryPeriod;
}
