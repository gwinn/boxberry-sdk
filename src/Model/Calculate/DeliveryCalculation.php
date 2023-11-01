<?php

namespace Gwinn\Boxberry\Model\Calculate;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class DeliveryCalculation
{
    /**
     * Массив вариантов расчетов для разных типов доставки
     *
     * @var array $deliveryCosts
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Calculate\DeliveryCalculation\DeliveryCostsRequest>")
     * @JMS\SerializedName("DeliveryCostsRequest")
     *
     */
    public $deliveryCosts = [];
}
