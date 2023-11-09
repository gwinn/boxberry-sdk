<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ChangeOrderStorageDateRequest implements RequestInterface
{
    use ChangeOrder;

    /**
     * Новая дата хранения в формате dd.mm.yyyy.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("storageDate")
     */
    public $storageDate;
}
