<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
trait ChangeOrder
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
     * @var string $orderId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("orderid")
     *
     */
    public $orderId;
}
