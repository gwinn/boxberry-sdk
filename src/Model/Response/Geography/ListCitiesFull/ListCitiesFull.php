<?php

namespace Gwinn\Boxberry\Model\Response\Geography\ListCitiesFull;

use Gwinn\Boxberry\Model\Response\Geography\ListCities\ListCities;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListCitiesFullResponse.
 *
 * @category Models
 *

 */
class ListCitiesFull
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ReceptionLaP")
     */
    public $receptionLaP;

    /**
     * Выдача писем и посылок физ.лиц (0/1).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliveryLaP")
     */
    public $deliveryLaP;

    /**
     * Прием заказов от ИМ на пунктах выдачи (0/1).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Reception")
     */
    public $reception;

    /**
     * Прием международных возвратов (0/1).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ForeignReceptionReturns")
     */
    public $foreignReceptionReturns;

    /**
     * Наличие терминала в городе (0/1).
     *
     * @var string
     *
     * @JMS\Type("string")
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CourierReception")
     */
    public $courierReception;

    /**
     * Наличие пунктов выдачи заказов в городе (0/1).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PickupPoint")
     */
    public $pickupPoint;

    /**
     * Наличие курьерской доставки в городе.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CourierDelivery")
     */
    public $courierDelivery;
}
