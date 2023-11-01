<?php

namespace Gwinn\Boxberry\Model\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Terminal
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Geography\PointsDescription
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
trait Terminal
{

    /**
     * Код в базе boxberry
     *
     * @var string $terminalCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalCode")
     *
     */
    public $terminalCode;

    /**
     * Наименование
     *
     * @var string $terminalName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalName")
     *
     */
    public $terminalName;

    /**
     * Наименование юр. лица
     *
     * @var string $terminalOrganization
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalOrganization")
     *
     */
    public $terminalOrganization;

    /**
     * Код города в Boxberry
     *
     * @var string $terminalCityCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalCityCode")
     *
     */
    public $terminalCityCode;

    /**
     * Наименование города
     *
     * @var string $terminalCityName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalCityName")
     *
     */
    public $terminalCityName;

    /**
     * Полный адрес
     *
     * @var string $terminalAddress
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalAddress")
     *
     */
    public $terminalAddress;

    /**
     * Телефон
     *
     * @var string $terminalPhone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalPhone")
     *
     */
    public $terminalPhone;
}
