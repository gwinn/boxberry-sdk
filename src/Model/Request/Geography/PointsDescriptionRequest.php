<?php

namespace RetailCrm\Boxberry\Model\Request\Geography;

use RetailCrm\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
