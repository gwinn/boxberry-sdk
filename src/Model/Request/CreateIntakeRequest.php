<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class CreateIntakeRequest
{
    /**
     * Почтовый индекс
     *
     * @var string $zip
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("zip")
     *
     */
    public $zip;

    /**
     * Город
     *
     * @var string $city
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     *
     */
    public $city;

    /**
     * Улица
     *
     * @var string $street
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("street")
     *
     */
    public $street;

    /**
     * Дом
     *
     * @var string $house
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("house")
     *
     */
    public $house;

    /**
     * Корпус
     *
     * @var string $building
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("building")
     *
     */
    public $building;

    /**
     * Строение
     *
     * @var string $housing
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("housing")
     *
     */
    public $housing;

    /**
     * квартира/офис
     *
     * @var string $flat
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("flat")
     *
     */
    public $flat;

    /**
     * Контактное лицо
     *
     * @var string $contactPerson
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contact_person")
     *
     */
    public $contactPerson;

    /**
     * Контактный телефон
     *
     * @var string $contactPhone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contact_phone")
     *
     */
    public $contactPhone;

    /**
     * Дата забора
     *
     * @var string $takingDate
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("taking_date")
     *
     */
    public $takingDate;

    /**
     * Время забора "с"
     *
     * @var string $takingTimeFrom
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("taking_time_from")
     *
     */
    public $takingTimeFrom;

    /**
     * Время забора "до"
     *
     * @var string $takingTimeTo
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("taking_time_to")
     *
     */
    public $takingTimeTo;

    /**
     * Кол-во мест
     *
     * @var string $seatsCount
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("seats_count")
     *
     */
    public $seatsCount;

    /**
     * Объем (м3)
     *
     * @var string $volume
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("volume")
     *
     */
    public $volume;

    /**
     * Вес (кг)
     *
     * @var string $weight
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     *
     */
    public $weight;

    /**
     * Комментарий
     *
     * @var string $comment
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     *
     */
    public $comment;
}
