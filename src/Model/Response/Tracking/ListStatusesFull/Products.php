<?php

namespace Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFull;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Products.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Products
{
    /**
     * Наименование товарной позиции.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    public $name;

    /**
     * Выданное количество единиц товарной позиции.
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Give")
     */
    public $give;

    /**
     * Количество единиц товарной позиции на возврат
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Return")
     */
    public $return;

    /**
     * Артикул товарной позиции.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Item_ID")
     */
    public $itemId;
}
