<?php

namespace Gwinn\Boxberry\Model\Calculate;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class DeliveryCostsRequest
 *
 * @category Models
 * @package  SaaS\Service\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $deliveryCosts = [];
}
