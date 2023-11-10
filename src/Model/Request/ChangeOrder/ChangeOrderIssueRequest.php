<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *

 */
class ChangeOrderIssueRequest implements RequestInterface
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
