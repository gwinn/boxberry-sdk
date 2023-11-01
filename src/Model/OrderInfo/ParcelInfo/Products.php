<?php

namespace Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;

use Er1z\FakeMock\Annotations;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField()
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
     * @var integer $quantity
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("quantity")
     *
     * @Annotations\FakeMockField()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $markingCrpt;
}
