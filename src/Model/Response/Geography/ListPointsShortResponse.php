<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPointsShortResponse.
 *
 * @category Models
 *

 */
class ListPointsShortResponse extends ArrayResponse
{
    /**
     * @var ListPointsShort[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort>")
     */
    public $result;
}
