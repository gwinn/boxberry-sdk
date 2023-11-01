<?php

namespace Gwinn\Boxberry\Model\Request\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class Kurdost
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\ParcelCreateRequest
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class Export
{
    /**
     * Почтовый индекс адреса получателя
     *
     * @var string $index
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("index")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $index;

    /**
     * Код страны
     *
     * @var string $countryCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("countryCode")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $countryCode;

    /**
     * Код города
     *
     * @var string $cityCode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cityCode")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $cityCode;

    /**
     * Наименование области/штата
     *
     * @var string $area
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("area")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $area;

    /**
     * Наименование улицы
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
     * Номер дома
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
     * Номер квартиры
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
     * Идентификатор службы перевозчика, 36 символов (GUID)
     *
     * На данный момент, рекомендуем передавать значение по умолчанию: fd85a8b6-4688-404f-9993-30b9e55d2950
     *
     * @var string $transporterGuid
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("transporterGuid")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $transporterGuid;
}
