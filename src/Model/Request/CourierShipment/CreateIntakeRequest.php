<?php

namespace RetailCrm\Boxberry\Model\Request\CourierShipment;

use RetailCrm\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class CreateIntakeRequest implements RequestInterface
{
    /**
     * Почтовый индекс
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("zip")
     */
    public $zip;

    /**
     * Город.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    public $city;

    /**
     * Улица.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("street")
     */
    public $street;

    /**
     * Дом
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("house")
     */
    public $house;

    /**
     * Корпус
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("building")
     */
    public $building;

    /**
     * Строение.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("housing")
     */
    public $housing;

    /**
     * квартира/офис
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("flat")
     */
    public $flat;

    /**
     * Контактное лицо.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contact_person")
     */
    public $contactPerson;

    /**
     * Контактный телефон.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contact_phone")
     */
    public $contactPhone;

    /**
     * Дата забора.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("taking_date")
     */
    public $takingDate;

    /**
     * Время забора "с".
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("taking_time_from")
     */
    public $takingTimeFrom;

    /**
     * Время забора "до".
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("taking_time_to")
     */
    public $takingTimeTo;

    /**
     * Кол-во мест
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("seats_count")
     */
    public $seatsCount;

    /**
     * Объем (м3).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("volume")
     */
    public $volume;

    /**
     * Вес (кг).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * Комментарий.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;
}
