<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels;
use JMS\Serializer\Annotation as JMS;

/**
 * Class PointsForParcelsResponse.
 *
 * @category Models
 *

 */
class PointsForParcelsResponse extends ArrayResponse
{
    /**
     * @var PointsForParcels[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels>")
     */
    public $result;
}
