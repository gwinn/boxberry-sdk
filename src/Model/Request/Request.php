<?php

namespace Gwinn\Boxberry\Model\Request;

/**
 * Class Request
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Request
{
    /**
     * токен для доступа к методу
     *
     * @var string $token
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("token")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $token;

    /**
     * название метода
     *
     * @var string $method
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("method")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $method;
}
