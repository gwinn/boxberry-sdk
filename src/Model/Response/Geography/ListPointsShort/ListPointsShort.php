<?php

namespace Gwinn\Boxberry\Model\Response\Geography\ListPointsShort;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPointsShortResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListPointsShort
{
    /**
     * Код пункта выдачи в базе boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     */
    public $code;

    /**
     * Код города в Boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     */
    public $cityCode;

    /**
     * Последняя дата изменения информации по пункту выдачи.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UpdateDate")
     */
    public $updateDate;
}
