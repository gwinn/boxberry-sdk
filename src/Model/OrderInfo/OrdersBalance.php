<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class OrdersBalance
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\OrderInfo
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class OrdersBalance
{
    /**
     * Номер заказа, присвоенный интернет-магазином
     *
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ID")
     *
     */
    public $id;

    /**
     * Статус заказа
     *
     * @var string $status
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Status")
     *
     */
    public $status;

    /**
     * Стоимость товаров
     *
     * @var string $price
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Price")
     *
     */
    public $price;

    /**
     * Стоимость доставки
     *
     * @var string $deliverySum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Delivery_sum")
     *
     */
    public $deliverySum;

    /**
     * Сумма к оплате
     *
     * @var string $paymentSum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Payment_sum")
     *
     */
    public $paymentSum;
}
