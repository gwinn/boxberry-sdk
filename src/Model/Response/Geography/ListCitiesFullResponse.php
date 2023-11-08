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
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListCitiesFull\ListCitiesFull>")
     */
    public $result;
}
