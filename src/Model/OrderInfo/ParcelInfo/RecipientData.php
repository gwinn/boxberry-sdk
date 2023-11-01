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
class RecipientData
{
    /**
     * ФИО получателя
     *
     * @var string $fullName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("full_name")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $fullName;

    /**
     * Номер телефона получателя
     *
     * @var string $phone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $phone;

    /**
     * E-mail получателя для оповещений
     *
     * @var string $email
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $email;
}
