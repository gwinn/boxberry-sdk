<?php

namespace Gwinn\Boxberry\Model\Response\Tracking;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFull\Products;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFull\Statuses;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListStatusesFullResponse.
 *
 * @category Models
 *

 */
class ListStatusesFullResponse implements ResponseInterface
{
    /**
     * Массив статусов.
     *
     * @var Statuses[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFull\Statuses>")
     * @JMS\SerializedName("statuses")
     */
    public $statuses = [];

    /**
     * Признак частичной выдачи заказа (true / false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("PD")
     */
    public $pd;

    /**
     * Плановая дата доставки по заказу.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryDate")
     */
    public $deliveryDate;

    /**
     * До выдачи посылки - сумма к оплате с получателя;
     * После выдачи посылки - сумма фактически принятых денежных средств.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("sum")
     */
    public $sum;

    /**
     * Тип оплаты. Возможные значения: "Касса", "Банк", "Эквайринг".
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PaymentMethod")
     */
    public $paymentMethod;

    /**
     * Вес заказа фактический, кг.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Weight")
     */
    public $weight;

    /**
     * массив товаров (присутствует при PD=true).
     *
     * @var Products[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFullResponse\Products>")
     * @JMS\SerializedName("products")
     */
    public $products = [];
}
