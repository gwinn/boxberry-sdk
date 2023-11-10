<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListPoints\ListPoints;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPointsResponse.
 *
 * @category Models
 *

 */
class ListPointsResponse extends ArrayResponse
{
    /**
     * @var ListPoints[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListPoints\ListPoints>")
     */
    public $result;
}
