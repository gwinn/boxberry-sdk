<?php

namespace Gwinn\Boxberry\Model\Response\Geography\PointsDescription;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Terminal.
 *
 * @category Models
 *

 */
trait Terminal
{
    /**
     * Код в базе boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalCode")
     */
    public $terminalCode;

    /**
     * Наименование.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalName")
     */
    public $terminalName;

    /**
     * Наименование юр. лица.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalOrganization")
     */
    public $terminalOrganization;

    /**
     * Код города в Boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalCityCode")
     */
    public $terminalCityCode;

    /**
     * Наименование города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalCityName")
     */
    public $terminalCityName;

    /**
     * Полный адрес
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalAddress")
     */
    public $terminalAddress;

    /**
     * Телефон.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TerminalPhone")
     */
    public $terminalPhone;
}
