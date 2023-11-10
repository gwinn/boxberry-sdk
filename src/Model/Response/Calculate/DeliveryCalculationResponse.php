<?php

namespace RetailCrm\Boxberry\Model\Response\Calculate;

use RetailCrm\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult;
use RetailCrm\Boxberry\Model\Response\ResponseInterface;
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
class DeliveryCalculationResponse implements ResponseInterface
{
    /**
     * Массив вариантов расчетов для разных типов доставки.
     *
     * @var DeliveryCalculationResult
     *
     * @JMS\Type("RetailCrm\Boxberry\Model\Response\Calculate\DeliveryCalculation\DeliveryCalculationResult")
     * @JMS\SerializedName("result")
     */
    public $result;
}
