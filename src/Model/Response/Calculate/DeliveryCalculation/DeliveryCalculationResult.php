<?php

namespace Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest.
 *
 * @category Models
 *

 */
class DeliveryCalculationResult
{
    /**
     * Массив вариантов расчетов для разных типов доставки.
     *
     * @var DeliveryCosts[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCosts>")
     * @JMS\SerializedName("DeliveryCosts")
     */
    public $deliveryCosts = [];
}
