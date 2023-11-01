<?php

namespace Gwinn\Boxberry\Model\Geography;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ListCitiesFull
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Geography
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class ListCitiesFull extends ListCities
{
    /**
     * Наличие пунктов выдачи заказов в городе (0/1)
     *
     * @var integer $pickupPoint
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("PickupPoint")
     *
     * @Annotations\FakeMockField(faker="numberBetween", arguments={0, 1})
     */
    public $pickupPoint;

    /**
     * Наличие курьерской доставки в городе
     *
     * @var integer $courierDelivery
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CourierDelivery")
     *
     * @Annotations\FakeMockField(faker="numberBetween", arguments={0, 1})
     */
    public $courierDelivery;
}
