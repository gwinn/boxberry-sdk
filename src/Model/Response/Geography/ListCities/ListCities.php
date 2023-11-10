<?php

namespace RetailCrm\Boxberry\Model\Response\Geography\ListCities;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListCities
{
    /**
     * Наименование города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    public $name;

    /**
     * Код города в boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     */
    public $code;

    /**
     * Код страны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     */
    public $countryCode;

    /**
     * Префикс: г - Город, п - Поселок и т.д.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Prefix")
     */
    public $prefix;

    /**
     * Прием писем и посылок от физ.лиц (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ReceptionLaP")
     */
    public $receptionLaP;

    /**
     * Выдача писем и посылок физ.лиц (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryLaP")
     */
    public $deliveryLaP;

    /**
     * Прием заказов от ИМ на пунктах выдачи (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Reception")
     */
    public $reception;

    /**
     * Наличие курьерской доставки в населенном пункте (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CourierDelivery")
     */
    public $courierDelivery;

    /**
     * Прием международных возвратов (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ForeignReceptionReturns")
     */
    public $foreignReceptionReturns;

    /**
     * Наличие терминала в городе (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Terminal")
     */
    public $terminal;

    /**
     * ИД КЛАДРа.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Kladr")
     */
    public $kladr;

    /**
     * Регион.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Region")
     */
    public $region;

    /**
     * Составное уникальное имя (для городов с не уникальным наименованием город + область + район).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UniqName")
     */
    public $uniqName;

    /**
     * Район.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("District")
     */
    public $district;

    /**
     * Наличие курьерского забора (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CourierReception")
     */
    public $courierReception;
}
