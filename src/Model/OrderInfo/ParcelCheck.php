<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCheck
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\OrderInfo
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelCheck
{
    /**
     * Ссылка на печать этикетки
     * (генерируется если не передан штрих-код
     * интернет-магазина)
     *
     * @var string $label
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     *
     */
    public $label;
}
