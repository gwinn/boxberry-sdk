<?php

namespace RetailCrm\Boxberry\Model\Request\ChangeOrder;

use RetailCrm\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ChangeOrderDetailsRequest implements RequestInterface
{
    use ChangeOrder;

    /**
     * ФИО получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("fio")
     */
    public $fio;

    /**
     * Телефон получателя (10 цифр).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * e-mail получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;
}
