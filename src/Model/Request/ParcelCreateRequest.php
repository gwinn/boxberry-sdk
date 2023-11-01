<?php

namespace Gwinn\Boxberry\Model\Request;

use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Customer;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Export;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Kurdost;
use Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Shop;
use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ParcelCreateRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @JMS\ExclusionPolicy("all")
 * @Annotations\FakeMock()
 */
class ParcelCreateRequest
{
    /**
     * Токен партнера интеграции (длина до 24 символов)
     *
     * @var string $partnerToken
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("partner_token")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $partnerToken;

    /**
     * Трек-номер посылки для обновления.
     * Внимание, если параметр updateByTrack будет заполнен, считается что вы хотите обновить ранее созданную посылку.
     *
     * @var string $updateByTrack
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("updateByTrack")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $updateByTrack;

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
     * Номер паллеты
     *
     * @var string $palletNumber
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PalletNumber")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $palletNumber;

    /**
     * Штрих-код посылки. Передается в случае собственной маркировки посылок.
     *
     * @var string $barcode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $barcode;

    /**
     * Объявленная стоимость посылки
     *
     * Для РФ диапазон от 5 до 300 000. (если <5 или не передана то будет автоматически изменена на 5 + notification в ответе)
     * Для ЕАЭС диапазон от 0 до 100 000.
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
     * Сумма к оплате (сумма, которую необходимо взять с получателя).
     * Для полностью предоплаченного заказа указывать 0.
     *
     * @var string $paymentSum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payment_sum")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $paymentSum;

    /**
     * Стоимость доставки объявленная получателю
     *
     * @var string $deliverySum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_sum")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $deliverySum;

    /**
     * Вид доставки:
     *
     * 1 - Доставка до пункта выдачи (ПВЗ, «Экспорт из РФ»)
     * 2 - Курьерская доставка (КД)
     * 3 - доставка Почтой России (ПР)
     *
     * @var string $vid
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vid")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $vid;

    /**
     * Номер заказа первичного ИМа для отправки в СМС и получения в ПВЗ.
     * Актуален для партнеров-агрегаторов.
     *
     * @var string $supplierTrack
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_track")
     *
     * @Annotations\FakeMockField()
     */
    public $supplierTrack;

    /**
     * Блок с информацией о курьерской доставке (только для РФ) и доставке Почтой России
     *
     * @var Kurdost $kurdost
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Kurdost")
     * @JMS\SerializedName("kurdost")
     *
     * @Annotations\FakeMockField()
     */
    public $kurdost;

    /**
     * Блок с информацией о курьерской доставке в страны ЕАЭС.
     *
     * Данные заполняются, если тип доставки Курьерская доставка (vid = 2) и страна получения не Россия (643)
     *
     * В случае доставки в отделение не заполняются.
     *
     * @var Export $export
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Export")
     * @JMS\SerializedName("export")
     *
     * @Annotations\FakeMockField()
     */
    public $export;

    /**
     * Блок с информацией о пункте приема и пункте выдачи отправления
     *
     * @var Shop $shop
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Shop")
     * @JMS\SerializedName("shop")
     *
     * @Annotations\FakeMockField()
     */
    public $shop;

    /**
     * Блок с информацией о получателе отправления
     *
     * @var Customer $customer
     *
     * @JMS\Type("Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Customer")
     * @JMS\SerializedName("customer")
     *
     * @Annotations\FakeMockField()
     */
    public $customer;

    /**
     * Блок с информацией по товарным позициям, включённым в заказ.
     * Проверяется корректность заполнения обязательных и необязательных полей.
     *
     * @var array $items
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\ParcelCreateRequest\Items>")
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
     * @var string $notice
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
     * @var array $weights
     *
     * @JMS\Exclude("weights")
     */
    public $weights;

    /**
     * Тарифная зона (по умолчанию для города отправления - Москва)
     *
     * @var string $issue
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("issue")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $issue;

    /**
     * Возможные значения:
     *
     * 0 - нет примерки
     * 1 - подключена примерка
     *
     * @var string $fitting
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("fitting")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $fitting;

    /**
     * Наименование магазина отправителя для sms/e-mail оповещений.
     *
     * @var string $senderName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sender_name")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $senderName;

    /**
     * Уникальный код склада.
     * Актуален для партнеров-агрегаторов, которым необходима отправка возвратов на собственный склад.
     *
     * @var string $agregatorPointCargoCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AgregatorPointCargoCode")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $agregatorPointCargoCode;
}
