<?php

namespace Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest;

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
class BoxesSizes
{
    /**
     * Ширина, см
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Width")
     */
    public $width;

    /**
     * Высота, см
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Height")
     */
    public $height;

    /**
     * Длина, см
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Depth")
     */
    public $depth;

    /**
     * Вес (гр).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Weight")
     */
    public $weight;
}
