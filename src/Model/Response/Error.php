<?php

namespace Gwinn\Boxberry\Model\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Error.
 *
 * @category Models
 *

 */
class Error
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("err")
     */
    public $errString;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("err")
     */
    public $errBool = false;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("error")
     */
    public $error = false;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("message")
     */
    public $message;
}
