<?php

namespace Gwinn\Boxberry\Model\Request\CreateOrder\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Shop.
 *
 * @category Models
 *

 */
class Shop
{
    /**
     * Код пункта выдачи.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public $name;

    /**
     * Код пункта поступления
     * Если передан то установленный в настройках ЛК пункт игнорируется, записывается переданный.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("name1")
     */
    public $name1;
}
