<?php

namespace Gwinn\Boxberry\Model\OrderInfo\ParcelInfo;

use Er1z\FakeMock\Annotations;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CourierDelivery
 *
 * @category Models
 * @package  SaaS\Service\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class BoxesData
{
    /**
     * Вес места (гр)
     *
     * @var string $weight
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $weight;

    /**
     * Баркод первого места
     *
     * @var string $barcode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $barcode;

    /**
     * Габариты места (см)
     *
     * @var string $x
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("x")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $x;

    /**
     * Габариты места (см)
     *
     * @var string $y
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("y")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $y;

    /**
     * Габариты места (см)
     *
     * @var string $z
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("z")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $z;
}
