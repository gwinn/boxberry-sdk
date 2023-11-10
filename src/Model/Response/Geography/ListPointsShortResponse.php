<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPointsShortResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListPointsShortResponse extends ArrayResponse
{
    /**
     * @var ListPointsShort[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort>")
     */
    public $result;
}
