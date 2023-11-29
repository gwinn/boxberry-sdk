<?php

namespace Gwinn\Boxberry\Model\Request\CreateOrder;

use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Customer;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Export;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Items;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Kurdost;
use Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Shop;
use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest.
 *
 * @category Models
 *

 */
class ParcelCreateRequest implements RequestInterface
{
    /**
     * Токен партнера интеграции (длина до 24 символов).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("partner_token")
     */
    public $partnerToken;

    /**
     * Трек-номер посылки для обновления.
     * Внимание, если параметр updateByTrack будет заполнен, считается что вы хотите обновить ранее созданную посылку.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("updateByTrack")
     */
    public $updateByTrack;

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
     * Номер паллеты.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PalletNumber")
     */
    public $palletNumber;

    /**
     * Штрих-код посылки. Передается в случае собственной маркировки посылок.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     */
    public $barcode;

    /**
     * Объявленная стоимость посылки.
     *
     * Для РФ диапазон от 5 до 300 000.
     * (если <5 или не передана то будет автоматически изменена на 5 + notification в ответе)
     * Для ЕАЭС диапазон от 0 до 100 000.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * Сумма к оплате (сумма, которую необходимо взять с получателя).
     * Для полностью предоплаченного заказа указывать 0.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payment_sum")
     */
    public $paymentSum;

    /**
     * Стоимость доставки объявленная получателю.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_sum")
     */
    public $deliverySum;

    /**
     * Вид доставки:.
     *
     * 1 - Доставка до пункта выдачи (ПВЗ, «Экспорт из РФ»)
     * 2 - Курьерская доставка (КД)
     * 3 - доставка Почтой России (ПР)
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vid")
     */
    public $vid;

    /**
     * Номер заказа первичного ИМа для отправки в СМС и получения в ПВЗ.
     * Актуален для партнеров-агрегаторов.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_track")
     */
    public $supplierTrack;

    /**
     * Блок с информацией о курьерской доставке (только для РФ) и доставке Почтой России.
     *
     * @var Kurdost
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Kurdost")
     * @JMS\SerializedName("kurdost")
     */
    public $kurdost;

    /**
     * Блок с информацией о курьерской доставке в страны ЕАЭС.
     *
     * Данные заполняются, если тип доставки Курьерская доставка (vid = 2) и страна получения не Россия (643)
     *
     * В случае доставки в отделение не заполняются.
     *
     * @var Export
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Export")
     * @JMS\SerializedName("export")
     */
    public $export;

    /**
     * Блок с информацией о пункте приема и пункте выдачи отправления.
     *
     * @var Shop
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Shop")
     * @JMS\SerializedName("shop")
     */
    public $shop;

    /**
     * Блок с информацией о получателе отправления.
     *
     * @var Customer
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Customer")
     * @JMS\SerializedName("customer")
     */
    public $customer;

    /**
     * Блок с информацией по товарным позициям, включённым в заказ.
     * Проверяется корректность заполнения обязательных и необязательных полей.
     *
     * @var Items[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest\Items>")
     * @JMS\SerializedName("items")
     */
    public $items = [];

    /**
     * Примечание к заказу.
     *
     * Текст выводится в печатную форму этикетки.
     * Если у заказа несколько мест (несколько этикеток), то данные по примечанию выводятся на каждой этикетке.
     * Количество символов <= 100.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("notice")
     */
    public $notice;

    /**
     * Блок с информацией о тарных местах (SOAP - количество элементов 24, JSON - неограничено)
     * Каждое место (коробка/пакет) подлежит индивидуальной маркировке.
     * Места не привязаны к вложениям в заказе.
     *
     * @var array<mixed, mixed>
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("weights")
     */
    public $weights;

    /**
     * Тарифная зона (по умолчанию для города отправления - Москва).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("issue")
     */
    public $issue;

    /**
     * Возможные значения:.
     *
     * 0 - нет примерки
     * 1 - подключена примерка
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("fitting")
     */
    public $fitting;

    /**
     * Наименование магазина отправителя для sms/e-mail оповещений.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sender_name")
     */
    public $senderName;

    /**
     * Уникальный код склада.
     * Актуален для партнеров-агрегаторов, которым необходима отправка возвратов на собственный склад.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AgregatorPointCargoCode")
     */
    public $agregatorPointCargoCode;
}
