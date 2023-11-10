<?php

namespace RetailCrm\Boxberry\Model\Response\OrderInfo;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\OrderInfo\OrdersBalance\OrdersBalance;
use JMS\Serializer\Annotation as JMS;

/**
 * Class OrdersBalanceResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class OrdersBalanceResponse extends ArrayResponse
{
    /**
     * @var OrdersBalance[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\OrderInfo\OrdersBalance\OrdersBalance>")
     */
    public $result;
}
