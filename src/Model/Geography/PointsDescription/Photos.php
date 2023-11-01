<?php

namespace Gwinn\Boxberry\Model\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Photos
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Geography\PointsDescription
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Photos
{
    /**
     * Фотография в base64
     *
     * @var string $photos
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("photos")
     *
     */
    public $photos;
}
