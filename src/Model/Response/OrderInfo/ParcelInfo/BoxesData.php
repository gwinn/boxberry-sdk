<?php

namespace RetailCrm\Boxberry\Model\Response\OrderInfo\ParcelInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class BoxesData
{
    /**
     * Вес места (гр).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * Баркод первого места.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     */
    public $barcode;

    /**
     * Габариты места (см).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("x")
     */
    public $x;

    /**
     * Габариты места (см).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("y")
     */
    public $y;

    /**
     * Габариты места (см).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("z")
     */
    public $z;
}
