<?php

namespace Gwinn\Boxberry\Model\Request\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Shop
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\ParcelCreateRequest
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Shop
{
    /**
     * Код пункта выдачи
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     *
     */
    public $name;

    /**
     * Код пункта поступления
     * Если передан то установленный в настройках ЛК пункт игнорируется, записывается переданный.
     *
     * @var string $name1
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name1")
     *
     */
    public $name1;
}
