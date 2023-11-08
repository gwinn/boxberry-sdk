<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\Geography\PointsDescription\Photos;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PointsDescriptionResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class PointsDescriptionResponse
{
    use \Gwinn\Boxberry\Model\Response\Geography\PointsDescription\WorkShedule;
    use \Gwinn\Boxberry\Model\Response\Geography\PointsDescription\Terminal;

    /**
     * Наименование пункта выдачи.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    public $name;

    /**
     * Наименование юр. лица.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Organization")
     */
    public $organization;

    /**
     * Почтовый индекс
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ZipCode")
     */
    public $zipCode;

    /**
     * Наименование страны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Country")
     */
    public $country;

    /**
     * Область.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Area")
     */
    public $area;

    /**
     * Код города в Boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     */
    public $cityCode;

    /**
     * Наименование города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityName")
     */
    public $cityName;

    /**
     * Наименование населенного пункта.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Settlement")
     */
    public $settlement;

    /**
     * Станция метро.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Metro")
     */
    public $metro;

    /**
     * Название улицы.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Street")
     */
    public $street;

    /**
     * Дом
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("House")
     */
    public $house;

    /**
     * Корпус
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Structure")
     */
    public $structure;

    /**
     * Строение.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Housing")
     */
    public $housing;

    /**
     * Офис/Квартира.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Apartment")
     */
    public $apartment;

    /**
     * Полный адрес
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Address")
     */
    public $address;

    /**
     * Адрес сокращенный (улица, дом, номер квартиры).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AddressReduce")
     */
    public $addressReduce;

    /**
     * Координаты GPS.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("GPS")
     */
    public $gps;

    /**
     * Описание проезда.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TripDescription")
     */
    public $tripDescription;

    /**
     * Телефон или телефоны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Phone")
     */
    public $phone;

    /**
     * Выдача посылок только из зарубежных интернет-магазинов (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("ForeignOnlineStoresOnly")
     */
    public $foreignOnlineStoresOnly;

    /**
     * Выдача только полностью оплаченных посылок:
     * true - только выдача посылок без приема оплаты,
     * false - выдача любых посылок.
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("PrepaidOrdersOnly")
     */
    public $prepaidOrdersOnly;

    /**
     * Возможность оплаты банковской картой (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("Acquiring")
     */
    public $acquiring;

    /**
     * Наличие планшета для цифровой подписи:
     * true - Подпись получателя будет хранится в системе boxberry в электронном виде,
     * false - отсутствуют подписи в электронном виде.
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("DigitalSignature")
     */
    public $digitalSignature;

    /**
     * Тип пункта выдачи: 1- собственное отделение, 2- партнерское.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("TypeOfOffice")
     */
    public $typeOfOffice;

    /**
     * Пункт выдачи осуществляет курьерскую доставку (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("CourierDelivery")
     */
    public $courierDelivery;

    /**
     * Прием посылок от интернет-магазинов (true/false)EnableFitting.
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("Reception")
     */
    public $reception;

    /**
     * Прием писем и посылок от физ.лиц (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("ReceptionLaP")
     */
    public $receptionLaP;

    /**
     * Выдача писем и посылок физ.лиц (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("DeliveryLaP")
     */
    public $deliveryLaP;

    /**
     * Ограничение веса, кг.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("LoadLimit")
     */
    public $loadLimit;

    /**
     * Ограничение объема, м3.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("VolumeLimit")
     */
    public $volumeLimit;

    /**
     * Возможность частичной выдачи заказа (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("EnablePartialDelivery")
     */
    public $enablePartialDelivery;

    /**
     * Возможность примерки (true/false).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("EnableFitting")
     */
    public $enableFitting;

    /**
     * Тип примерки: 1 - частичная, 2 - полная.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("fittingType")
     */
    public $fittingType;

    /**
     * Массив фотографий пункта выдачи.
     *
     * @var Photos[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Geography\PointsDescriptionResponse\Photos>")
     * @JMS\SerializedName("photos")
     */
    public $photos = [];

    /**
     * Код страны в Boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     */
    public $countryCode;

    /**
     * Возможный вид транспортировки:
     * 0 - любой транспорт,
     * 1 - автотранспорт,
     * 2 - авиадоставка.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("TransType")
     */
    public $transType;

    /**
     * Прием международных возвратов (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("InterRefunds")
     */
    public $interRefunds;

    /**
     * Экспресс-прием заказов от интернет-магазинов (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ExpressReception")
     */
    public $expressReception;

    /**
     * Отделение является терминалом (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Terminal")
     */
    public $terminal;

    /**
     * Отделение осуществляет выдачу посылок (0/1).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("IssuanceBoxberry")
     */
    public $issuanceBoxberry;

    /**
     * Фактический график работы отделения,
     * содержит актуальную информацию в случае временных изменений в работе отделения.
     * Передается json-кодированной строкой.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("schedule")
     */
    public $schedule;

    /**
     * Отделение является постaматом
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("Postamat")
     */
    public $postamat;
}
