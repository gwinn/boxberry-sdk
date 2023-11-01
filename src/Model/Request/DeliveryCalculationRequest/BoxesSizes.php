<?php

namespace Gwinn\Boxberry\Model\Request\DeliveryCalculationRequest;

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
class BoxesSizes
{
    /**
     * Ширина, см
     *
     * @var string $width
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Width")
     *
     */
    public $width;

    /**
     * Высота, см
     *
     * @var string $height
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Height")
     *
     */
    public $height;

    /**
     * Длина, см
     *
     * @var string $depth
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Depth")
     *
     */
    public $depth;

    /**
     * Вес (гр)
     *
     * @var string $weight
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Weight")
     *
     */
    public $weight;
}
