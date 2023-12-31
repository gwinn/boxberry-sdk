<?php

namespace Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery.
 *
 * @category Models
 *

 */
class BoxesSizes
{
    /**
     * Ширина, см
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Width")
     */
    public $width;

    /**
     * Высота, см
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Height")
     */
    public $height;

    /**
     * Длина, см
     *
     * @var int
     *
     * @JMS\Type("integer")
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
