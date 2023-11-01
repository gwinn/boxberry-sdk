<?php

namespace Gwinn\Boxberry\Model\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PointsDescription
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class PointsDescription
{
    use PointsDescription\WorkShedule;
    use PointsDescription\Terminal;

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
     * Наименование юр. лица
     *
     * @var string $organization
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Organization")
     *
     */
    public $organization;

    /**
     * Почтовый индекс
     *
     * @var integer $zipCode
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ZipCode")
     *
     */
    public $zipCode;

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
     * Наименование населенного пункта
     *
     * @var integer $settlement
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Settlement")
     *
     */
    public $settlement;

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
     * Название улицы
     *
     * @var string $street
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Street")
     *
     */
    public $street;

    /**
     * Дом
     *
     * @var string $house
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("House")
     *
     */
    public $house;

    /**
     * Корпус
     *
     * @var string $structure
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Structure")
     *
     */
    public $structure;

    /**
     * Строение
     *
     * @var string $housing
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Housing")
     *
     */
    public $housing;

    /**
     * Офис/Квартира
     *
     * @var string $apartment
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Apartment")
     *
     */
    public $apartment;

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
     * Выдача посылок только из зарубежных интернет-магазинов (true/false)
     *
     * @var boolean $foreignOnlineStoresOnly
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("ForeignOnlineStoresOnly")
     *
     */
    public $foreignOnlineStoresOnly;

    /**
     * Выдача только полностью оплаченных посылок:
     * true - только выдача посылок без приема оплаты,
     * false - выдача любых посылок
     *
     * @var boolean $prepaidOrdersOnly
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("PrepaidOrdersOnly")
     *
     */
    public $prepaidOrdersOnly;

    /**
     * Возможность оплаты банковской картой (true/false)
     *
     * @var boolean $acquiring
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("Acquiring")
     *
     */
    public $acquiring;

    /**
     * Наличие планшета для цифровой подписи:
     * true - Подпись получателя будет хранится в системе boxberry в электронном виде,
     * false - отсутствуют подписи в электронном виде
     *
     * @var boolean $digitalSignature
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("DigitalSignature")
     *
     */
    public $digitalSignature;

    /**
     * Тип пункта выдачи: 1- собственное отделение, 2- партнерское
     *
     * @var integer $typeOfOffice
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("TypeOfOffice")
     *
     */
    public $typeOfOffice;

    /**
     * Пункт выдачи осуществляет курьерскую доставку (true/false)
     *
     * @var boolean $courierDelivery
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("CourierDelivery")
     *
     */
    public $courierDelivery;

    /**
     * Прием посылок от интернет-магазинов (true/false)EnableFitting
     *
     * @var boolean $reception
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("Reception")
     *
     */
    public $reception;

    /**
     * Прием писем и посылок от физ.лиц (true/false)
     *
     * @var boolean $receptionLaP
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("ReceptionLaP")
     *
     */
    public $receptionLaP;

    /**
     * Выдача писем и посылок физ.лиц (true/false)
     *
     * @var boolean $deliveryLaP
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("DeliveryLaP")
     *
     */
    public $deliveryLaP;

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
     * Ограничение объема, м3
     *
     * @var integer $volumeLimit
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("VolumeLimit")
     *
     */
    public $volumeLimit;

    /**
     * Возможность частичной выдачи заказа (true/false)
     *
     * @var boolean $enablePartialDelivery
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("EnablePartialDelivery")
     *
     */
    public $enablePartialDelivery;

    /**
     * Возможность примерки (true/false)
     *
     * @var boolean $enableFitting
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("EnableFitting")
     *
     */
    public $enableFitting;

    /**
     * Тип примерки: 1 - частичная, 2 - полная
     *
     * @var boolean $fittingType
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("fittingType")
     *
     */
    public $fittingType;

    /**
     * Массив фотографий пункта выдачи
     *
     * @var array $photos
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Geography\PointsDescription\Photos>")
     * @JMS\SerializedName("photos")
     */
    public $photos = [];

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
     * Возможный вид транспортировки:
     * 0 - любой транспорт,
     * 1 - автотранспорт,
     * 2 - авиадоставка
     *
     * @var integer $transType
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("TransType")
     *
     */
    public $transType;

    /**
     * Прием международных возвратов (0/1)
     *
     * @var integer $interRefunds
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("InterRefunds")
     *
     */
    public $interRefunds;

    /**
     * Экспресс-прием заказов от интернет-магазинов (0/1)
     *
     * @var integer $expressReception
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ExpressReception")
     *
     */
    public $expressReception;

    /**
     * Отделение является терминалом (0/1)
     *
     * @var integer $terminal
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Terminal")
     *
     */
    public $terminal;

    /**
     * Отделение осуществляет выдачу посылок (0/1)
     *
     * @var integer $issuanceBoxberry
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("IssuanceBoxberry")
     *
     */
    public $issuanceBoxberry;

    /**
     * Фактический график работы отделения,
     * содержит актуальную информацию в случае временных изменений в работе отделения.
     * Передается json-кодированной строкой
     *
     * @var string $schedule
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("schedule")
     *
     */
    public $schedule;

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
