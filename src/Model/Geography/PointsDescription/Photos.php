<?php

namespace Gwinn\Boxberry\Model\Geography\PointsDescription;

use Er1z\FakeMock\Annotations;
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
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $photos;
}
