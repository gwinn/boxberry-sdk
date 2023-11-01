<?php

namespace Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class PickupPoint
{
    /**
     * Код пункта выдачи
     *
     * @var string $pickupPointCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickup_point_code")
     *
     */
    public $pickupPointCode;

    /**
     * Адрес пункта выдачи
     *
     * @var string $pickupPointAdress
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pickup_point_adress")
     *
     */
    public $pickupPointAdress;
}
