<?php

namespace Gwinn\Boxberry\Model\Tracking;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ListStatusesFull
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
class ListStatusesFull
{
    /**
     * Массив статусов
     *
     * @var array $statuses
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Tracking\ListStatuses>")
     * @JMS\SerializedName("statuses")
     */
    public $statuses = [];

    /**
     * Признак частичной выдачи заказа (true / false)
     *
     * @var boolean $pd
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("PD")
     *
     * @Annotations\FakeMockField()
     */
    public $pd;

    /**
     * Плановая дата доставки по заказу
     *
     * @var string $deliveryDate
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryDate")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $deliveryDate;

    /**
     * До выдачи посылки - сумма к оплате с получателя;
     * После выдачи посылки - сумма фактически принятых денежных средств.
     *
     * @var integer $sum
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("sum")
     *
     * @Annotations\FakeMockField()
     */
    public $sum;

    /**
     * Тип оплаты. Возможные значения: "Касса", "Банк", "Эквайринг"
     *
     * @var string $paymentMethod
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PaymentMethod")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $paymentMethod;

    /**
     * Вес заказа фактический, кг
     *
     * @var string $weight
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Weight")
     *
     * @Annotations\FakeMockField()
     */
    public $weight;

    /**
     * массив товаров (присутствует при PD=true)
     *
     * @var array $products
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Tracking\ListStatusesFull\Products>")
     * @JMS\SerializedName("products")
     */
    public $products = [];
}
