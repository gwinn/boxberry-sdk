<?php

namespace Gwinn\Boxberry\Model\Geography;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

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
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $updateDate;
}
