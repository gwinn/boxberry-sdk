<?php

namespace Gwinn\Boxberry\Model\Response;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class Error
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class Error
{
    /**
     * @var string $error
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("err")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $error;
}
