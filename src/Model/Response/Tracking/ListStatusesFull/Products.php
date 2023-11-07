<?php

namespace Gwinn\Boxberry\Model\Tracking\ListStatusesFull;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Products
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Tracking\ListStatusesFull
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class Products
{
    /**
     * Наименование товарной позиции
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     *
     */
    public $name;

    /**
     * Выданное количество единиц товарной позиции
     *
     * @var integer $give
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Give")
     *

     */
    public $give;

    /**
     * Количество единиц товарной позиции на возврат
     *
     * @var integer $return
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("Return")
     *

     */
    public $return;

    /**
     * Артикул товарной позиции
     *
     * @var string $comment
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Item_ID")
     *
     */
    public $itemId;
}
