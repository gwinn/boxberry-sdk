<?php

namespace Gwinn\Boxberry\Model\Response\Calculate;

use Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult;
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
     * @var DeliveryCalculationResult $result
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult")
     * @JMS\SerializedName("result")
     *
     */
    public $result;
}
