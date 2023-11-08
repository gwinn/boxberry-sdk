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
class CancelOrderRequest
{
    use ChangeOrder;

    /**
     * Вариант отмены заказа:
     * 1- удалить посылку,
     * 2- отозвать посылку.
     *
     * Если не передан, то по умолчанию 1 - удалить посылку в ЛК ИМ.
     *
     * Если передано непустое значение отличное от 1 и 2, то метод возвращает ошибку:
     * "Вариант отмены заказа должен быть пустым или равен 1 или 2."
     *
     * Если посылка была успешно отозвана то статус у заказа будет "Готовится к возврату"
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cancelType")
     */
    public $cancelType;
}
