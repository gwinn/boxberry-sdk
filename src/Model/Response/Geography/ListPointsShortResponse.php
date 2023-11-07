<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPointsShort
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Geography
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListPointsShort
{
    /**
     * Код пункта выдачи в базе boxberry
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     *
     */
    public $code;

    /**
     * Код города в Boxberry
     *
     * @var string $cityCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     *
     */
    public $cityCode;

    /**
     * Наименование города
     *
     * @var string $cityName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityName")
     *
     */
    public $cityName;

    /**
     * Последняя дата изменения информации по пункту выдачи
     *
     * @var string $updateDate
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UpdateDate")
     *
     */
    public $updateDate;
}
