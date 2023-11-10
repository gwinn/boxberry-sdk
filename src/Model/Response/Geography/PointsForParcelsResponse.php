<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels;
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
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\PointsForParcels\PointsForParcels>")
     */
    public $result;
}
