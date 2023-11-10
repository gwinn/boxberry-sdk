<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *

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
