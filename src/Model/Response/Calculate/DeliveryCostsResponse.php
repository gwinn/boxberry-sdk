<?php

namespace Gwinn\Boxberry\Model\Response\Calculate;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest.
 *
 * @category Models
 *

 */
class DeliveryCostsResponse implements ResponseInterface
{
    /**
     * Итоговая стоимость доставки (равна price_base + price_service).
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * Стоимость базового тарифа.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price_base")
     */
    public $priceBase;

    /**
     * Стоимость обязательных дополнительных услуг, которые будут оказаны по отправлению согласно договора, такие как:
     * - тип выдачи,
     * - оповещения получателя,
     * - доплата за плотность и "Габарит ПЛЮС", если переданы габариты,
     * - примерка,
     * - курьерская доставка, если передан почтовый индекс, по которому оказывается курьерская доставка и т.д.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price_service")
     */
    public $priceService;

    /**
     * Срок доставки в рабочих днях с учетом варианта выдачи (получение посылки на ПВЗ или КД).
     * Если параметр sucrh не указан или равен нулю, то отдает значение с типом string.
     * Если параметр sucrh равен 1, то отдает значение с типом integer.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("delivery_period")
     */
    public $deliveryPeriod;
}
