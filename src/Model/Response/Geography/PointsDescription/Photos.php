<?php

namespace Gwinn\Boxberry\Model\Response\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Photos.
 *
 * @category Models
 *

 */
class Photos
{
    /**
     * Фотография в base64.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("photos")
     */
    public $photos;
}
