<?php

namespace Gwinn\Boxberry\Model\Response\Tracking;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Tracking\ListStatuses\ListStatuses;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListStatusesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListStatusesResponse extends ArrayResponse
{
    /**
     * @var ListStatuses[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Tracking\ListStatuses\ListStatuses>")
     */
    public $result;
}
