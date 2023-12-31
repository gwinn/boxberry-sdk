<?php

namespace Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Kurdost.
 *
 * @category Models
 *

 */
class Kurdost
{
    /**
     * Почтовый индекс адреса получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("index")
     */
    public $index;

    /**
     * Населенный пункт получателя.
     *
     * Для небольших населенных пунктов указывать дополнительно Область, Район, Город
     * адрес проверяется сторонним сервисом и должен определяться однозначно.
     *
     * Допустимы варианты:
     * Свердловская, Кушва, Баранчинский
     * Свердловская обл, г Кушва, поселок Баранчинский
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("citi")
     */
    public $city;

    /**
     * Адрес получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("addressp")
     */
    public $addressp;

    /**
     * Дата курьерской доставки (формат ГГГГ-ММ-ДД). Может принимать значения +1 +5 дней от текущей даты.
     * Значение по умолчанию - текущая дата + 1 день.
     * По другим направлениям игнорируется.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("delivery_date")
     */
    public $deliveryDate;

    /**
     * Время курьерской доставки ОТ (формат чч:мм).
     * Значение по умолчанию 10:00.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timesfrom1")
     */
    public $timesFrom1;

    /**
     * Время курьерской доставки ДО (формат чч:мм)
     * Значение по умолчанию 18:00.
     *
     * Интервал доставки "ОТ-ДО" должен быть не менее 3 часов.
     * Если интервал меньше 3 часов, он корректируется без уведомления.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timesto1")
     */
    public $timesTo1;

    /**
     * Альтернативное время, от
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timesfrom2")
     */
    public $timesFrom2;

    /**
     * Альтернативное время, до.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timesto2")
     */
    public $timesTo2;

    /**
     * Тип отправления, возможные значения:
     * 0 - Посылка,
     * 2 - Курьер Онлайн,
     * 3 - Посылка Онлайн,
     * 5 - Посылка 1й класс.
     *
     * Если не передано, значение по умолчанию 0.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * Хрупкая посылка, возможные значения 0 и 1.
     * Если не передано, значение по умолчанию 0.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("fragile")
     */
    public $fragile;

    /**
     * Строгий тип, возможные значения 0 и 1.
     * Если не передано, значение по умолчанию 0.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("strong")
     */
    public $strong;

    /**
     * Оптимизация тарифа, возможные значения 0 и 1. Если не передано, значение по умолчанию 1.
     * Параметры strong и optimize являются взаимоисключающими и не могут одновременно принимать значение 1.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("optimize")
     */
    public $optimize;

    /**
     * Тип упаковки, возможные значения:
     * 0 - упаковка ИМ, сумма сторон </= 106 см
     * 1 - упаковка ИМ, сумма сторон > 106 см
     * 2 - упаковка Boxberry, сумма сторон </= 106 см
     * 3 - упаковка Boxberry, сумма сторон > 106 см
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("packing_type")
     */
    public $packingType;

    /**
     * Строгая упаковка, возможные значения:
     * true - изменение упаковки в процессе транспортировки запрещено
     * false - изменение упаковки разрешено.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("packing_strict")
     */
    public $packingStrict;
}
