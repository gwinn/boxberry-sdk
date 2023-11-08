<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListPointsShortRequest
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
