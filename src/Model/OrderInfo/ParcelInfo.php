<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\CourierDelivery;
use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\PickupPoint;
use Gwinn\Boxberry\Model\OrderInfo\ParcelInfo\RecipientData;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelList
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelInfo
{
    /**
     * Номер заказа в интернет-магазине
     *
     * @var string $orderId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("order_id")
     *
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
     */
    public $issueType;
}
