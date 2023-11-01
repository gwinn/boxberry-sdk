<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ChangeOrderIssueRequest
{
    use ChangeOrder\ChangeOrder;

    /**
     * Новый вид выдачи заказа.
     * Возможные значения:
     * 0 - без вскрытия
     * 1 - со вскрытием
     * 2 - частичная выдача
     *
     * @var string $issue
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("issue")
     */
    public $issue;
}
