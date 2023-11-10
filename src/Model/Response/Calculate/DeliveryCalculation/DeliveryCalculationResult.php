<?php

namespace RetailCrm\Boxberry\Model\Response\Calculate\DeliveryCalculation;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class DeliveryCalculationResult
{
    /**
     * Массив вариантов расчетов для разных типов доставки.
     *
     * @var DeliveryCosts[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCosts>")
     * @JMS\SerializedName("DeliveryCosts")
     */
    public $deliveryCosts = [];
}
