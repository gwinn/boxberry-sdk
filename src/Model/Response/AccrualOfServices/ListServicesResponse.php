<?php

namespace Gwinn\Boxberry\Model\Response\AccrualOfServices;

use Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServices\ListServices;
use Gwinn\Boxberry\Model\Response\ArrayResponse;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServicesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListServicesResponse extends ArrayResponse
{
    /**
     * @var ListServices[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServices\ListServices>")
     */
    public $result;
}
