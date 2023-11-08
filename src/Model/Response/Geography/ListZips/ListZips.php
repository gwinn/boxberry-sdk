<?php

namespace Gwinn\Boxberry\Model\Response\Geography\ListZips;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListZipsResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListZips
{
    /**
     * Почтовый индекс
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Zip")
     */
    public $zip;

    /**
     * Наименование города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("City")
     */
    public $city;

    /**
     * Район.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Region")
     */
    public $region;

    /**
     * Регион.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Area")
     */
    public $area;

    /**
     * Зона курьерской доставки.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ZoneExpressDelivery")
     */
    public $zoneExpressDelivery;

    /**
     * Удаленность почтового индекса, принимает значения от 0 до 9, где 0 - индекс не является удаленным.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Remoteness")
     */
    public $remoteness;
}
