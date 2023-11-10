<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest.
 *
 * @category Models
 *

 */
class ParcelSendStoryRequest implements RequestInterface
{
    /**
     * период с в формате YYYYMMDD.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("from")
     */
    public $from;

    /**
     * период до в формате YYYYMMDD.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("to")
     */
    public $to;
}
