<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\OrdersBalance;

use JMS\Serializer\Annotation as JMS;

/**
 * Class OrdersBalanceResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class OrdersBalance
{
    /**
     * Номер заказа, присвоенный интернет-магазином
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ID")
     */
    public $id;

    /**
     * Статус заказа.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Status")
     */
    public $status;

    /**
     * Стоимость товаров.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Price")
     */
    public $price;

    /**
     * Стоимость доставки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Delivery_sum")
     */
    public $deliverySum;

    /**
     * Сумма к оплате.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Payment_sum")
     */
    public $paymentSum;
}
