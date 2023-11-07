<?php

namespace Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Products
{
    /**
     * Артикул товара
     *
     * @var string $vendorCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vendor_code")
     *
     */
    public $vendorCode;

    /**
     * Наименование товара
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     *
     */
    public $name;

    /**
     * Процент НДС (число от 0 до 20)
     *
     * @var integer $nds
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("nds")
     *
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
     */
    public $price;

    /**
     * Количество единиц товара
     *
     * @var integer $quantity
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("quantity")
     *
     */
    public $quantity;

    /**
     * Маркировка товара
     *
     * @var string $markingCrpt
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("marking_crpt")
     *
     */
    public $markingCrpt;
}
