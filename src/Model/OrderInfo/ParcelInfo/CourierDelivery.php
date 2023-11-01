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
class CourierDelivery
{
    /**
     * Почтовый индекс адреса получателя
     *
     * @var string $postCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("postcode")
     *
     */
    public $postCode;

    /**
     * Населенный пункт получателя
     *
     * @var string $city
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("citi")
     *
     */
    public $city;

    /**
     * Адрес получателя
     *
     * @var string $recipientAddress
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address_recipient")
     *
     */
    public $addressRecipient;
}
