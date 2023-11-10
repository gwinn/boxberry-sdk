<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *

 */
class PointsDescriptionRequest implements RequestInterface
{
    /**
     * Код пункта выдачи в базе boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    public $code = '';

    /**
     * Получить фото (true/false или 0/1).
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("photo")
     */
    public $photo = false;
}
