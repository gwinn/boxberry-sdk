<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *

 */
class ListPointsShortRequest implements RequestInterface
{
    /**
     * Код страны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     */
    public $countryCode = '';

    /**
     * Код города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     */
    public $cityCode = '';
}
