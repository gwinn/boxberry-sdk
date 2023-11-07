<?php

namespace Gwinn\Boxberry\Model\Request\Warehouse;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class WarehouseRequest
{
    /**
     * Уникальный код склада
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     *
     */
    public $code;

    /**
     * Наименование склада
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     *
     */
    public $name;

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
     * Адрес склада
     *
     * @var string $address
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     *
     */
    public $address;

    /**
     * Контактное лицо
     *
     * @var string $contactPerson
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contactPerson")
     *
     */
    public $contactPerson;

    /**
     * Контактный телефон
     *
     * @var string $contactPhone
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contactPhone")
     *
     */
    public $contactPhone;

    /**
     * Код пункта приема Боксберри (отделение сдачи заказов)
     *
     * @var string $receptionPointCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receptionPointCode")
     *
     */
    public $receptionPointCode;
}
