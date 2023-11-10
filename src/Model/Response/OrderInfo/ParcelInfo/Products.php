<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *

 */
class Products
{
    /**
     * Артикул товара.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vendor_code")
     */
    public $vendorCode;

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
     * Процент НДС (число от 0 до 20).
     *
     * @var int
     *
     * @JMS\Type("integer")
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
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("quantity")
     */
    public $quantity;

    /**
     * Маркировка товара.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("marking_crpt")
     */
    public $markingCrpt;
}
