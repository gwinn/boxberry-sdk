<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\CourierListCities\CourierListCities;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierListCitiesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class CourierListCitiesResponse extends ArrayResponse
{
    /**
     * @var CourierListCities[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\CourierListCities\CourierListCities>")
     */
    public $result;
}
