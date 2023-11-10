<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesFullResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListCitiesFullResponse extends ArrayResponse
{
    /**
     * @var ListCitiesFull[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull>")
     */
    public $result;
}
