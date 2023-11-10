<?php

namespace RetailCrm\Boxberry\Model\Response\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Photos.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
