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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $addressRecipient;
}
