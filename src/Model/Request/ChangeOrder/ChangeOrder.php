<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *

 */
trait ChangeOrder
{
    /**
     * Трек-номер посылки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     */
    public $track;

    /**
     * Номер заказа ИМ.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderid")
     */
    public $orderId;
}
