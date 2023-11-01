<?php

namespace Gwinn\Boxberry\Model\Request\ParcelCreateRequest;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

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
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $name1;
}
