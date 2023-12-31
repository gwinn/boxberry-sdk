<?php

namespace Gwinn\Boxberry\Traits;

use GuzzleHttp\Exception\GuzzleException;
use Gwinn\Boxberry\Builders\ResponseBuilder;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Request\Warehouse\WarehouseCreateRequest;
use Gwinn\Boxberry\Model\Request\Warehouse\WarehouseDeleteRequest;
use Gwinn\Boxberry\Model\Request\Warehouse\WarehouseInfoRequest;
use Gwinn\Boxberry\Model\Request\Warehouse\WarehouseUpdateRequest;
use Gwinn\Boxberry\Model\Response\Warehouse\WarehouseInfo\WarehouseInfo;
use Gwinn\Boxberry\Model\Response\Warehouse\WarehouseInfoResponse;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Warehouse.
 *

 */
trait Warehouse
{
    /**
     * Сервис позволяет создать склады.
     *
     * @group services
     *
     * @throws ApiException
     * @throws GuzzleException
     * @throws ClientExceptionInterface
     */
    public function warehouseCreate(WarehouseCreateRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис позволяет обновить информацию о складе.
     *
     * @group services
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function warehouseUpdate(WarehouseUpdateRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис позволяет удалить склады.
     *
     * @group services
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function warehouseDelete(WarehouseDeleteRequest $request): void
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        $builder = new ResponseBuilder($this->get($queryParam));
        $builder->errorProcessing();
    }

    /**
     * Сервис позволяет получить список активных складов.
     *
     * @group services
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function warehouseInfo(WarehouseInfoRequest $request): WarehouseInfoResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__), $request);

        /** @var WarehouseInfoResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeArrayResponse(WarehouseInfoResponse::class, WarehouseInfo::class)
        ;

        return $response;
    }
}
