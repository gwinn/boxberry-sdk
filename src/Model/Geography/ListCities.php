<?php

namespace Gwinn\Boxberry\Model\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCities
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Geography
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListCities
{
    /**
     * Наименование города
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     *
     */
    public $name;

    /**
     * Код города в boxberry
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     *
     */
    public $code;

    /**
     * Код страны
     *
     * @var string $countryCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     *
     */
    public $countryCode;

    /**
     * Префикс: г - Город, п - Поселок и т.д
     *
     * @var string $prefix
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Prefix")
     *
     */
    public $prefix;

    /**
     * Прием писем и посылок от физ.лиц (0/1)
     *
     * @var integer $receptionLaP
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ReceptionLaP")
     *
     */
    public $receptionLaP;

    /**
     * Выдача писем и посылок физ.лиц (0/1)
     *
     * @var integer $deliveryLaP
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryLaP")
     *
     */
    public $deliveryLaP;

    /**
     * Прием заказов от ИМ на пунктах выдачи (0/1)
     *
     * @var integer $reception
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Reception")
     *
     */
    public $reception;

    /**
     * Прием международных возвратов (0/1)
     *
     * @var integer $foreignReceptionReturns
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ForeignReceptionReturns")
     *
     */
    public $foreignReceptionReturns;

    /**
     * Наличие терминала в городе (0/1)
     *
     * @var integer $terminal
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Terminal")
     *
     */
    public $terminal;

    /**
     * ИД КЛАДРа
     *
     * @var string $kladr
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Kladr")
     *
     */
    public $kladr;

    /**
     * Регион
     *
     * @var string $region
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Region")
     *
     */
    public $region;

    /**
     * Составное уникальное имя (для городов с не уникальным наименованием город + область + район)
     *
     * @var string $uniqName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UniqName")
     *
     */
    public $uniqName;

    /**
     * Район
     *
     * @var string $district
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("District")
     *
     */
    public $district;

    /**
     * Наличие курьерского забора (0/1)
     *
     * @var integer $courierReception
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CourierReception")
     *
     */
    public $courierReception;
}
