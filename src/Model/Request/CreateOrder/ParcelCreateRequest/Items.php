<?php

namespace Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Items.
 *
 * @category Models
 *

 */
class Items
{
    /**
     * Артикул товара.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * Наименование товара.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * Единица измерения.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UnitName")
     */
    public $unitName;

    /**
     * Процент НДС (число от 0 до 20)
     * Без НДС -1
     * НДС не указан поле НЕ передано.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("nds")
     */
    public $nds;

    /**
     * Цена за единицу товара.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("price")
     */
    public $price;

    /**
     * Количество единиц товара.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * Маркировка товара ЦРПТ.
     *
     * Код маркировки состоит из 28 или 127 символов и включает данные:
     *
     * GTIN (14 символов) + "+" + ISN (13 символов) либо полную маркировку товара.
     * ИЛИ
     * 01 GTIN (14 символов) 21 ISN (13 символов) 91 Ключ проверки (4 символа) 92 Код проверки (88 символов)
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("marking_crpt")
     */
    public $markingCrpt;

    /**
     * Наименование юр. лица Поставщика.
     *
     * Ограничение до 255 символов.
     *
     * Не будет записано если не переданы: supplier_inn + supplier_phone
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_name")
     */
    public $supplierName;

    /**
     * ИНН Поставщика.
     *
     * Должен состоять только из цифр длиной 10 или 12 символов.
     *
     * Не будет записано если не переданы: supplier_name + supplier_phone
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_inn")
     */
    public $supplierInn;

    /**
     * ИНН Поставщика.
     *
     * Должен состоять только из цифр длиной 10 или 12 символов.
     *
     * Не будет записано если не переданы: supplier_name + supplier_phone
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_phone")
     */
    public $supplierPhone;
}
