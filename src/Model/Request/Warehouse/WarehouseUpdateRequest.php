<?php

namespace Gwinn\Boxberry\Model\Request\Warehouse;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest.
 *
 * @category Models
 *

 */
class WarehouseUpdateRequest implements RequestInterface
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
