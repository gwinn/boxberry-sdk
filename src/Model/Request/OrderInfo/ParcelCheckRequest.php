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
class ParcelCheckRequest implements RequestInterface
{
    /**
     * Код отслеживания отправления.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImId")
     */
    public $imIds;
}
