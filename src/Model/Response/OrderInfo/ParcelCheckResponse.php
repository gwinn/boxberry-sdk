<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCheckResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelCheckResponse
{
    /**
     * Ссылка на печать этикетки
     * (генерируется если не передан штрих-код
     * интернет-магазина).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;
}
