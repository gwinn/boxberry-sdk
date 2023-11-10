<?php

namespace RetailCrm\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
