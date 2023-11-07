<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ChangeOrderDetailsRequest
{
    use ChangeOrder\ChangeOrder;

    /**
     * ФИО получателя
     *
     * @var string $fio
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("fio")
     */
    public $fio;

    /**
     * Телефон получателя (10 цифр)
     *
     * @var string $phone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * e-mail получателя
     *
     * @var string $email
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;
}
