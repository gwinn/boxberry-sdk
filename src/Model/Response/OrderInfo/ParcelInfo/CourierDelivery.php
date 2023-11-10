<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *

 */
class CourierDelivery
{
    /**
     * Почтовый индекс адреса получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("postcode")
     */
    public $postCode;

    /**
     * Населенный пункт получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    public $city;

    /**
     * Адрес получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address_recipient")
     */
    public $addressRecipient;
}
