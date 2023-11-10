<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListPoints\ListPoints;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPointsResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListPointsResponse extends ArrayResponse
{
    /**
     * @var ListPoints[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\ListPoints\ListPoints>")
     */
    public $result;
}
