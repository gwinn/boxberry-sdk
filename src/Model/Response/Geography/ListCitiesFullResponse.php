<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesFullResponse.
 *
 * @category Models
 *

 */
class ListCitiesFullResponse extends ArrayResponse
{
    /**
     * @var ListCitiesFull[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull>")
     */
    public $result;
}
