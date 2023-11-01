<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ParselCheck
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\OrderInfo
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class ParselCheck
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $label;
}
