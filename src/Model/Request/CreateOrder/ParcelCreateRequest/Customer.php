<?php

namespace RetailCrm\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Customer.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Customer
{
    /**
     * ФИО получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("fio")
     */
    public $fio;

    /**
     * Номер телефона получателя(только цифры),
     * Телефон должен содержать 10 цифр, в противном случае, все символы обрезаются и используется 10 цифр с конца.
     * Если Cтрана = Казахстан (CountryCode - 398) или Беларусь (112) или Киргизия (417) или Армения (051),
     * то максимальная длина номера телефона - 12 символов.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    public $phone;

    /**
     * Дополнительный номер телефона получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("phone2")
     */
    public $phone2;

    /**
     * E-mail получателя для оповещений.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    public $email;

    /**
     * Наименование организации.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * Адрес организации.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * ИНН.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("inn")
     */
    public $inn;

    /**
     * КПП
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("kpp")
     */
    public $kpp;

    /**
     * Расчетный счет
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("r_s")
     */
    public $rs;

    /**
     * Наименование банка.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bank")
     */
    public $bank;

    /**
     * Корр. счет
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("kor_s")
     */
    public $kors;

    /**
     * БИК.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("bik")
     */
    public $bik;
}
