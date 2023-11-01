<?php

namespace Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;

use Er1z\FakeMock\Annotations;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $pickupPointAdress;
}
