<?php

namespace Gwinn\Boxberry\Model\Calculate;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class DeliveryCostsRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Calculate
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class DeliveryCosts
{
    /**
     * Итоговая стоимость доставки (равна price_base + price_service)
     *
     * @var string $price
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $price;

    /**
     * Стоимость базового тарифа
     *
     * @var string $priceBase
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price_base")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @var string $priceService
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price_service")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $priceService;

    /**
     * Срок доставки в рабочих днях с учетом варианта выдачи (получение посылки на ПВЗ или КД).
     *
     * @var string $deliveryPeriod
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_period")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $deliveryPeriod;
}
