<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\Tracking
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ZipCheckRequest
{
    /**
     * Код ПВЗ
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     *
     */
    public $code = '';

    /**
     * Код города
     *
     * @var boolean $photo
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("photo")
     *
     */
    public $photo = false;
}
