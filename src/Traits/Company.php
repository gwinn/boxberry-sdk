<?php

namespace Gwinn\Boxberry\Traits;

use Gwinn\Boxberry\Builders\ResponseBuilder;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Model\Response\Company\CompanyApiSettingsResponse;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * Class Company
 */
trait Company
{
    /**
     * Метод позволяет получить настройки компании, включая признак перехода на Яндекс.Доставку (NDD).
     * Возвращает поля yaDelivery (bool) и bbOrder (bool).
     *
     * @group company
     *
     * @throws ApiException
     * @throws ClientExceptionInterface
     */
    public function companyApiSettings(): CompanyApiSettingsResponse
    {
        $queryParam = $this->getQueryParams(ucfirst(__FUNCTION__));

        /** @var CompanyApiSettingsResponse $response */
        $response = (new ResponseBuilder($this->get($queryParam)))
            ->serializeResponse(CompanyApiSettingsResponse::class)
        ;

        return $response;
    }
}
