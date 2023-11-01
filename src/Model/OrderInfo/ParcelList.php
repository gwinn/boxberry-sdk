<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelList
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\OrderInfo
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelList
{
    /**
     * список всех трекинг кодов посылок которые есть в кабинете но не были сформированы в акт
     *
     * @var string $imIds
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImIds")
     *
     */
    public $imIds;
}
