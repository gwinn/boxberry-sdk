<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelList.
 *
 * @category Models
 *

 */
class ParcelInfo
{
    /**
     * Номер заказа в интернет-магазине.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order_id")
     */
    public $orderId;

    /**
     * Трек-номер посылки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track_number")
     */
    public $trackNumber;

    /**
     * Объявленная стоимость посылки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("declared_cost")
     */
    public $declaredCost;

    /**
     * Сумма к оплате с получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payment_amount")
     */
    public $paymentAmount;

    /**
     * Стоимость доставки объявленная получателю.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_cost")
     */
    public $deliveryCost;

    /**
     * Вид доставки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_type")
     */
    public $deliveryType;

    /**
     * Блок с информацией о курьерской доставке.
     *
     * @var CourierDelivery
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\CourierDelivery")
     * @JMS\SerializedName("courier_delivery")
     */
    public $courierDelivery;

    /**
     * Блок с информацией о пункте выдачи отправления.
     *
     * @var PickupPoint
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\PickupPoint")
     * @JMS\SerializedName("pickup_point")
     */
    public $pickupPoint;

    /**
     * Блок с информацией о получателе отправления.
     *
     * @var RecipientData
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\RecipientData")
     * @JMS\SerializedName("recipient_data")
     */
    public $recipientData;

    /**
     * массив товарных вложений.
     *
     * @var Products[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\Products>")
     * @JMS\SerializedName("products")
     */
    public $products = [];

    /**
     * массив товарных вложений.
     *
     * @var BoxesData[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\BoxesData>")
     * @JMS\SerializedName("boxes_data")
     */
    public $boxesData = [];

    /**
     * Вид выдачи.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("issue_type")
     */
    public $issueType;
}
