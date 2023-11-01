<?php

namespace Gwinn\Boxberry\Model\Calculate\DeliveryCalculation;

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
class DeliveryCosts
{
    /**
     * Рассчитывается как TotalPrice – PriceBase
     *
     * @var string $priceService
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PriceService")
     *
     */
    public $priceService;

    /**
     * Стоимость всех начисленных  услуг с учетом скидки, руб.
     *
     * @var string $totalPrice
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TotalPrice")
     *
     */
    public $totalPrice;

    /**
     * Тип услуги доставки:
     * 1 склад-склад
     * 2 склад-дверь
     *
     * @var string $deliveryTypeId
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryTypeId")
     *
     */
    public $deliveryTypeId;

    /**
     * Срок доставки в календарных днях
     *
     * @var string $deliveryPeriod
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryPeriod")
     *
     */
    public $deliveryPeriod;

    /**
     * Стоимость базовой услуги
     *
     * @var string $priceBase
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PriceBase")
     *
     */
    public $priceBase;
}
