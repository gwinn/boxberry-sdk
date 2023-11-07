<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\Tracking
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class OrdersBalanceRequest
{
    /**
     * Если равно =1, возвращает список заказов только с постоплатой
     *
     * @var integer $onlyPostpaid
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("OnlyPostpaid")
     *
     */
    public $onlyPostpaid;
}
