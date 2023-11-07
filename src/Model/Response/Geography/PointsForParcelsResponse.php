<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PointsForParcels
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class PointsForParcels
{
    /**
     * Код пункта приема
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     *
     */
    public $code;

    /**
     * Наименование
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     *
     */
    public $name;

    /**
     * Населенный пункт
     *
     * @var string $city
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("City")
     *
     */
    public $city;
}
