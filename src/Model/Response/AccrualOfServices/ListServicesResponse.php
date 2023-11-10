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
