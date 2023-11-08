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
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListPointsShort\ListPointsShort>")
     */
    public $result;
}
