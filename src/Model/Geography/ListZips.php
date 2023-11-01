<?php

namespace Gwinn\Boxberry\Model\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListZips
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Geography
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListZips
{
    /**
     * Почтовый индекс
     *
     * @var string $zip
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Zip")
     *
     */
    public $zip;

    /**
     * Наименование города
     *
     * @var string $city
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("City")
     *
     */
    public $city;

    /**
     * Район
     *
     * @var string $region
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Region")
     *
     */
    public $region;

    /**
     * Регион
     *
     * @var string $area
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Area")
     *
     */
    public $area;

    /**
     * Зона курьерской доставки
     *
     * @var integer $zoneExpressDelivery
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ZoneExpressDelivery")
     *
     */
    public $zoneExpressDelivery;

    /**
     * Удаленность почтового индекса, принимает значения от 0 до 9, где 0 - индекс не является удаленным.
     *
     * @var integer $remoteness
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Remoteness")
     *
     */
    public $remoteness;
}
