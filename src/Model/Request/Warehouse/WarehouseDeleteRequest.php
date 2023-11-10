<?php

namespace Gwinn\Boxberry\Model\Request\Warehouse;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest.
 *
 * @category Models
 *

 */
class WarehouseDeleteRequest implements RequestInterface
{
    /**
     * Уникальный код склада.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;
}
