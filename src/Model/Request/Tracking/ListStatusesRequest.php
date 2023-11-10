<?php

namespace Gwinn\Boxberry\Model\Request\Tracking;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *

 */
class ListStatusesRequest implements RequestInterface
{
    /**
     * Код отслеживания заказа.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImId")
     */
    public $imId;
}
