<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListPoints
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListPoints
{
    /**
     * Код пункта выдачи в базе boxberry
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Code")
     *
     */
    public $code;

    /**
     * Наименование пункта выдачи
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     *
     */
    public $name;

    /**
     * Полный адрес
     *
     * @var string $address
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Address")
     *
     */
    public $address;

    /**
     * Телефон или телефоны
     *
     * @var string $phone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Phone")
     *
     */
    public $phone;

    /**
     * График работы
     *
     * @var string $workShedule
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("WorkShedule")
     *
     */
    public $workShedule;

    /**
     * Описание проезда
     *
     * @var string $tripDescription
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TripDescription")
     *
     */
    public $tripDescription;

    /**
     * Срок доставки в днях (по умолчанию срок доставки от Москвы)
     *
     * @var integer $deliveryPeriod
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DeliveryPeriod")
     *
     */
    public $deliveryPeriod;

    /**
     * Код города в Boxberry
     *
     * @var string $cityCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     *
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
     */
    public $cityName;

    /**
     * Тарифная зона (по умолчанию для города отправления - Москва)
     *
     * @var string $tariffZone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TariffZone")
     *
     */
    public $tariffZone;

    /**
     * Наименование населенного пункта
     *
     * @var string $settlement
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Settlement")
     *
     */
    public $settlement;

    /**
     * Область
     *
     * @var string $area
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Area")
     *
     */
    public $area;

    /**
     * Наименование страны
     *
     * @var string $country
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Country")
     *
     */
    public $country;

    /**
     * Координаты GPS
     *
     * @var string $gps
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("GPS")
     *
     */
    public $gps;

    /**
     * Адрес сокращенный (улица, дом, номер квартиры)
     *
     * @var string $addressReduce
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AddressReduce")
     *
     */
    public $addressReduce;

    /**
     * Выдача только полностью оплаченных посылок:
     * "Yes" - только выдача посылок без приема оплаты,
     * "No" - выдача любых посылок
     *
     * @var string $onlyPrepaidOrders
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OnlyPrepaidOrders")
     *
     */
    public $onlyPrepaidOrders;

    /**
     * Возможность оплаты банковской картой (Yes/No)
     *
     * @var string $acquiring
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Acquiring")
     *
     */
    public $acquiring;

    /**
     * Наличие планшета для цифровой подписи:
     * "Yes" - Подпись получателя будет хранится в системе boxberry в электронном виде
     * "No" - отсутствуют подписи в электронном виде
     *
     * @var string $digitalSignature
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DigitalSignature")
     *
     */
    public $digitalSignature;

    /**
     * Код страны в Boxberry
     *
     * @var string $countryCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     *
     */
    public $countryCode;

    /**
     * Отделение осуществляет курьерскую доставку (Yes/No)
     *
     * @var string $nalKD
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("NalKD")
     *
     */
    public $nalKD;

    /**
     * Станция метро
     *
     * @var string $metro
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Metro")
     *
     */
    public $metro;

    /**
     * Тип пункта выдачи: 1- собственное отделение, 2- партнерское
     *
     * @var string $typeOfOffice
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TypeOfOffice")
     *
     */
    public $typeOfOffice;

    /**
     * Ограничение объема, м3
     *
     * @var string $volumeLimit
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VolumeLimit")
     *
     */
    public $volumeLimit;

    /**
     * Ограничение веса, кг
     *
     * @var integer $loadLimit
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("LoadLimit")
     *
     */
    public $loadLimit;

    /**
     * Отделение является постaматом
     *
     * @var boolean $postamat
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("Postamat")
     *
     */
    public $postamat;
}
