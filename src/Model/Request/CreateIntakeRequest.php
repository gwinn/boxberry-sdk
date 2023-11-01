<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

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
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $comment;
}
