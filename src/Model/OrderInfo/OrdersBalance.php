<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

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
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $paymentSum;
}
