<?php

namespace RetailCrm\Boxberry\Model\Response\Geography\PointsForParcels;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PointsForParcelsResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class PointsForParcels
{
    /**
     * Код пункта приема.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     */
    public $code;

    /**
     * Наименование.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    public $name;

    /**
     * Населенный пункт
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("City")
     */
    public $city;
}
