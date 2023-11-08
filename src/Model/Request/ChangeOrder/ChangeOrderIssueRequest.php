<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

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
class ChangeOrderIssueRequest
{
    use ChangeOrder;

    /**
     * Новый вид выдачи заказа.
     * Возможные значения:
     * 0 - без вскрытия
     * 1 - со вскрытием
     * 2 - частичная выдача.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("issue")
     */
    public $issue;
}
