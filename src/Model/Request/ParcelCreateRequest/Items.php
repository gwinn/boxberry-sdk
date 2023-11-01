<?php

namespace Gwinn\Boxberry\Model\Request\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class Items
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\ParcelCreateRequest
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class Items
{
    /**
     * Артикул товара
     *
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $id;

    /**
     * Наименование товара
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $name;

    /**
     * Единица измерения
     *
     * @var string $unitName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UnitName")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $unitName;

    /**
     * Процент НДС (число от 0 до 20)
     * Без НДС	-1
     * НДС не указан	поле НЕ передано
     *
     * @var string $nds
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("nds")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $nds;

    /**
     * Цена за единицу товара
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
     * Количество единиц товара
     *
     * @var string $quantity
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("quantity")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $quantity;

    /**
     * Маркировка товара ЦРПТ
     *
     * Код маркировки состоит из 28 или 127 символов и включает данные:
     *
     * GTIN (14 символов) + "+" + ISN (13 символов) либо полную маркировку товара.
     * ИЛИ
     * 01 GTIN (14 символов) 21 ISN (13 символов) 91 Ключ проверки (4 символа) 92 Код проверки (88 символов)
     *
     * @var string $markingCrpt
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("marking_crpt")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $markingCrpt;

    /**
     * Наименование юр. лица Поставщика.
     *
     * Ограничение до 255 символов.
     *
     * Не будет записано если не переданы: supplier_inn + supplier_phone
     *
     * @var string $supplierName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_name")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $supplierName;

    /**
     * ИНН Поставщика
     *
     * Должен состоять только из цифр длиной 10 или 12 символов.
     *
     * Не будет записано если не переданы: supplier_name + supplier_phone
     *
     * @var string $supplierInn
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_inn")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $supplierInn;

    /**
     * ИНН Поставщика
     *
     * Должен состоять только из цифр длиной 10 или 12 символов.
     *
     * Не будет записано если не переданы: supplier_name + supplier_phone
     *
     * @var string $supplierPhone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("supplier_phone")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $supplierPhone;
}
