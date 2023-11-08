<?php

namespace Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Export.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Export
{
    /**
     * Почтовый индекс адреса получателя.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("index")
     */
    public $index;

    /**
     * Код страны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("countryCode")
     */
    public $countryCode;

    /**
     * Код города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cityCode")
     */
    public $cityCode;

    /**
     * Наименование области/штата.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("area")
     */
    public $area;

    /**
     * Наименование улицы.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("street")
     */
    public $street;

    /**
     * Номер дома.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("house")
     */
    public $house;

    /**
     * Номер квартиры.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("flat")
     */
    public $flat;

    /**
     * Идентификатор службы перевозчика, 36 символов (GUID).
     *
     * На данный момент, рекомендуем передавать значение по умолчанию: fd85a8b6-4688-404f-9993-30b9e55d2950
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("transporterGuid")
     */
    public $transporterGuid;
}
