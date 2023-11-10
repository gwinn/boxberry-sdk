<?php

namespace Gwinn\Boxberry\Model\Response\Geography\ZipCheck;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ZipCheckResponse.
 *
 * @category Models
 *

 */
class ZipCheck
{
    /**
     * Возможность курьерской доставки по заданному индексу (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("ExpressDelivery")
     */
    public $expressDelivery;

    /**
     * Зона курьерской доставки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ZoneExpressDelivery")
     */
    public $zoneExpressDelivery;

    /**
     * Удаленность почтового индекса, принимает значения от 0 до 9, где 0 - индекс не является удаленным.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Remoteness")
     */
    public $remoteness;
}
