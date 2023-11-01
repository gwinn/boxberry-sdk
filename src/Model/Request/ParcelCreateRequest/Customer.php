<?php

namespace Gwinn\Boxberry\Model\Request\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Customer
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\ParcelCreateRequest
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Customer
{
    /**
     * ФИО получателя
     *
     * @var string $fio
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("fio")
     *
     */
    public $fio;

    /**
     * Номер телефона получателя(только цифры),
     * Телефон должен содержать 10 цифр, в противном случае, все символы обрезаются и используется 10 цифр с конца.
     * Если Cтрана = Казахстан (CountryCode - 398) или Беларусь (112) или Киргизия (417) или Армения (051),
     * то максимальная длина номера телефона - 12 символов.
     *
     * @var string $phone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     *
     */
    public $phone;

    /**
     * Дополнительный номер телефона получателя
     *
     * @var string $phone2
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone2")
     *
     */
    public $phone2;

    /**
     * E-mail получателя для оповещений
     *
     * @var string $email
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     *
     */
    public $email;

    /**
     * Наименование организации
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     *
     */
    public $name;

    /**
     * Адрес организации
     *
     * @var string $address
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     *
     */
    public $address;

    /**
     * ИНН
     *
     * @var string $inn
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("inn")
     *
     */
    public $inn;

    /**
     * КПП
     *
     * @var string $kpp
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("kpp")
     *
     */
    public $kpp;

    /**
     * Расчетный счет
     *
     * @var string $rs
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("r_s")
     *
     */
    public $rs;

    /**
     * Наименование банка
     *
     * @var string $bank
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bank")
     *
     */
    public $bank;

    /**
     * Корр. счет
     *
     * @var string $kors
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("kor_s")
     *
     */
    public $kors;

    /**
     * БИК
     *
     * @var string $bik
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bik")
     *
     */
    public $bik;
}
