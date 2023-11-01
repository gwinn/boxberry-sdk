<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\CourierDelivery;
use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\PickupPoint;
use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\RecipientData;
use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ParselList
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
class ParselInfo
{
    /**
     * Номер заказа в интернет-магазине
     *
     * @var string $orderId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order_id")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $orderId;

    /**
     * Трек-номер посылки
     *
     * @var string $trackNumber
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track_number")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $trackNumber;

    /**
     * Объявленная стоимость посылки
     *
     * @var string $declaredCost
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("declared_cost")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $declaredCost;

    /**
     * Сумма к оплате с получателя
     *
     * @var string $paymentAmount
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payment_amount")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $paymentAmount;

    /**
     * Стоимость доставки объявленная получателю
     *
     * @var string $deliveryCost
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_cost")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $deliveryCost;

    /**
     * Вид доставки
     *
     * @var string $deliveryType
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_type")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $deliveryType;

    /**
     * Блок с информацией о курьерской доставке
     *
     * @var CourierDelivery $courierDelivery
     *
     * @JMS\Type("Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\CourierDelivery")
     * @JMS\SerializedName("courier_delivery")
     *
     * @Annotations\FakeMockField()
     */
    public $courierDelivery;

    /**
     * Блок с информацией о пункте выдачи отправления
     *
     * @var PickupPoint $pickupPoint
     *
     * @JMS\Type("Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\PickupPoint")
     * @JMS\SerializedName("pickup_point")
     *
     * @Annotations\FakeMockField()
     */
    public $pickupPoint;

    /**
     * Блок с информацией о получателе отправления
     *
     * @var RecipientData $recipientData
     *
     * @JMS\Type("Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\RecipientData")
     * @JMS\SerializedName("recipient_data")
     *
     * @Annotations\FakeMockField()
     */
    public $recipientData;

    /**
     * массив товарных вложений
     *
     * @var array $products
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\Products>")
     * @JMS\SerializedName("products")
     *
     * @Annotations\FakeMockField()
     */
    public $products = [];

    /**
     * массив товарных вложений
     *
     * @var array $boxesData
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\BoxesData>")
     * @JMS\SerializedName("boxes_data")
     *
     * @Annotations\FakeMockField()
     */
    public $boxesData = [];

    /**
     * Вид выдачи
     *
     * @var string $issueType
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("issue_type")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $issueType;
}
