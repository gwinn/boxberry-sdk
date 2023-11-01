<?php

namespace Gwinn\Boxberry\Model;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ParselDel
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class ParselDel
{
    /**
     * результат выполнения
     *
     * @var string $text
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("text")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $text;
}
