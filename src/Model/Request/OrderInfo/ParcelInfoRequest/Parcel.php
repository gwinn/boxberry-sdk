<?php

namespace Gwinn\Boxberry\Model\Request\ParcelInfoRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Parcel
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\ParcelInfoRequest
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Parcel
{
    /**
     * Трек-номер посылки
     *
     * @var string $track
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     *
     */
    public $track;

    /**
     * Номер заказа ИМ
     *
     * @var string $order_id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order_id")
     *
     */
    public $order_id;
}
