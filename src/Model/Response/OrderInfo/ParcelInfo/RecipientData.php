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
     */
    public $email;
}
