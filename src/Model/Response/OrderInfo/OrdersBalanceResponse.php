<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\OrdersBalance\OrdersBalance;
use JMS\Serializer\Annotation as JMS;

/**
 * Class OrdersBalanceResponse.
 *
 * @category Models
 *

 */
class OrdersBalanceResponse extends ArrayResponse
{
    /**
     * @var OrdersBalance[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\OrderInfo\OrdersBalance\OrdersBalance>")
     */
    public $result;
}
