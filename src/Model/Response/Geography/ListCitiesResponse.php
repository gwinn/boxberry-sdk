<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListCities\ListCities;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesResponse.
 *
 * @category Models
 *

 */
class ListCitiesResponse extends ArrayResponse
{
    /**
     * @var ListCities[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListCities\ListCities>")
     */
    public $result;
}
