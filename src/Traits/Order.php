<?php

namespace RetailCrm\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use RetailCrm\Boxberry\Builders\ResponseBuilder;
use RetailCrm\Boxberry\Exceptions\ApiException;
use RetailCrm\Boxberry\Model\Request\ChangeOrder\CancelOrderRequest;
use RetailCrm\Boxberry\Model\Request\ChangeOrder\ChangeOrderDeliveryTypeRequest;
use RetailCrm\Boxberry\Model\Request\ChangeOrder\ChangeOrderDetailsRequest;
use RetailCrm\Boxberry\Model\Request\ChangeOrder\ChangeOrderIssueRequest;
use RetailCrm\Boxberry\Model\Request\ChangeOrder\ChangeOrderStorageDateRequest;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Order.
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
trait Order
{
    /**
     * Сервис для отзыва посылки (отмены доставки до получателя).
     *
     * @group orders
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function cancelOrder(CancelOrderRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис для изменения данных посылки: ФИО, номер телефона получателя, e-mail получателя.
     *
     * @group orders
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function changeOrderDetails(ChangeOrderDetailsRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис для изменения срока хранения посылки.
     *
     * @group orders
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function changeOrderStorageDate(ChangeOrderStorageDateRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис для изменения типа выдачи посылки.
     *
     * @group orders
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function changeOrderIssue(ChangeOrderIssueRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис для изменения параметров доставки:
     * изменение ПВЗ
     * изменение доставки с ПВЗ на КД
     * изменение адреса КД
     * изменение с КД на ПВЗ.
     *
     * @group orders
     *
     * @throws ApiException|GuzzleException
     * @throws ClientExceptionInterface
     */
    public function changeOrderDeliveryType(ChangeOrderDeliveryTypeRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }
}
