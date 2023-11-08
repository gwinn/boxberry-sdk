<?php

namespace Gwinn\Boxberry\Model\Request\Warehouse;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class WarehouseUpdateRequest
{
    /**
     * Уникальный код склада.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code;

    /**
     * Наименование склада.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

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
     * Адрес склада.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     */
    public $address;

    /**
     * Контактное лицо.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contactPerson")
     */
    public $contactPerson;

    /**
     * Контактный телефон.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("contactPhone")
     */
    public $contactPhone;

    /**
     * Код пункта приема Боксберри (отделение сдачи заказов).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("receptionPointCode")
     */
    public $receptionPointCode;
}
