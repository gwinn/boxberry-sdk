<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *

 */
class RecipientData
{
    /**
     * ФИО получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("full_name")
     */
    public $fullName;

    /**
     * Номер телефона получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * E-mail получателя для оповещений.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;
}
