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
class BoxesData
{
    /**
     * Вес места (гр)
     *
     * @var string $weight
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     *
     */
    public $weight;

    /**
     * Баркод первого места
     *
     * @var string $barcode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     *
     */
    public $barcode;

    /**
     * Габариты места (см)
     *
     * @var string $x
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("x")
     *
     */
    public $x;

    /**
     * Габариты места (см)
     *
     * @var string $y
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("y")
     *
     */
    public $y;

    /**
     * Габариты места (см)
     *
     * @var string $z
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("z")
     *
     */
    public $z;
}
