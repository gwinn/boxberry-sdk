<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *

 */
class OrdersBalanceRequest implements RequestInterface
{
    /**
     * Возвращается список заказов только с постоплатой.
     * Возможные значения:
     * 0 - возвращается список заказов с постоплатой и предоплатой
     * 1 - возвращается список заказов только с постоплатой.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("OnlyPostpaid")
     */
    public $onlyPostpaid;
}
