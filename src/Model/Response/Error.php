<?php

namespace Gwinn\Boxberry\Model\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Error
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Error
{
    /**
     * @var string $err
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("err")
     */
    public $err;

    /**
     * @var boolean $error
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("error")
     */
    public $error;

    /**
     * @var string $message
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("message")
     */
    public $message;
}
