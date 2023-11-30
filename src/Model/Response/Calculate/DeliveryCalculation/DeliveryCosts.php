<?php

namespace Gwinn\Boxberry\Model\Response\Calculate\DeliveryCalculation;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest.
 *
 * @category Models
 *

 */
class DeliveryCosts
{
    /**
     * Рассчитывается как TotalPrice – PriceBase.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("PriceService")
     */
    public $priceService;

    /**
     * Стоимость всех начисленных  услуг с учетом скидки, руб.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("TotalPrice")
     */
    public $totalPrice;

    /**
     * Тип услуги доставки:
     * 1 склад-склад
     * 2 склад-дверь.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryTypeId")
     */
    public $deliveryTypeId;

    /**
     * Срок доставки в календарных днях.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryPeriod")
     */
    public $deliveryPeriod;

    /**
     * Стоимость базовой услуги.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("PriceBase")
     */
    public $priceBase;
}
