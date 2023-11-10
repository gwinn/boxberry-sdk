<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\CourierListCities\CourierListCities;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierListCitiesResponse.
 *
 * @category Models
 *

 */
class CourierListCitiesResponse extends ArrayResponse
{
    /**
     * @var CourierListCities[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\CourierListCities\CourierListCities>")
     */
    public $result;
}
