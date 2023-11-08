<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Parcel.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Parcel
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
     * @JMS\SerializedName("order_id")
     */
    public $orderId;
}
