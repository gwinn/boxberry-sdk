<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListPointsRequest
{
    /**
     * Код страны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     */
    public $countryCode = '';

    /**
     * Код города.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CityCode")
     */
    public $cityCode = '';

    /**
     * Возможности оплаты на ПВЗ при выдаче:.
     *
     * 0 - только отделения с возможностью оплатить посылку при получении
     * наличными денежными средствами (OnlyPrepaidOrders=No).
     * 1 - все отделения (OnlyPrepaidOrders=Yes):
     *
     * с возможностью оплаты при получении;
     * работающие только по предоплате.
     * Если не передан, то по умолчанию 0 - только ПВЗ, где есть приём платежа.
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("prepaid")
     */
    public $prepaid = false;

    /**
     * Фильтр на получение списка с\без постaматов.
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("is_include_postamat")
     */
    public $isIncludePostamat = false;
}
