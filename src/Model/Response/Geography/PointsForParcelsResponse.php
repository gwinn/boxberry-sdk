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
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
