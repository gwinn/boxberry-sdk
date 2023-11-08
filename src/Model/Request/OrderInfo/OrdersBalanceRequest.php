<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class OrdersBalanceRequest
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
