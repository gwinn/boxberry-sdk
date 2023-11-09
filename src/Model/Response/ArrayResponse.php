<?php

namespace Gwinn\Boxberry\Model\Response;

abstract class ArrayResponse implements ResponseInterface
{
    /** @var mixed */
    public $result;

    /**
     * @param array<mixed> $result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }
}
