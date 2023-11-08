<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
