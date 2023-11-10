<?php

namespace Gwinn\Boxberry\Model\Request\AccrualOfServices;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *

 */
class ListServicesRequest implements RequestInterface
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
