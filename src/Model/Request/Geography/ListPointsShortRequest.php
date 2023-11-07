<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\Tracking
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListPointsShortRequest
{
    /**
     * Код страны
     *
     * @var string $countryCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     *
     */
    public $countryCode = '';

    /**
     * Код города
     *
     * @var string $cityCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     *
     */
    public $cityCode = '';

    /**
     * Код страны
     *
     * @var boolean $prepaId
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("prepaid")
     *
     */
    public $prepaId = false;

    /**
     * Код страны
     *
     * @var boolean $isIncludePostamat
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("is_include_postamat")
     *
     */
    public $isIncludePostamat = false;
}
