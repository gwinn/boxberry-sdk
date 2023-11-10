<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListCities\ListCities;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListCitiesResponse extends ArrayResponse
{
    /**
     * @var ListCities[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\ListCities\ListCities>")
     */
    public $result;
}
