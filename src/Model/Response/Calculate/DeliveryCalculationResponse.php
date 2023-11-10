<?php

namespace Gwinn\Boxberry\Model\Response\Calculate;

use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult;
use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest.
 *
 * @category Models
 *

 */
class DeliveryCalculationResponse implements ResponseInterface
{
    /**
     * Массив вариантов расчетов для разных типов доставки.
     *
     * @var DeliveryCalculationResult
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult")
     * @JMS\SerializedName("result")
     */
    public $result;
}
