<?php

namespace Kavinsky\MRW\Type;

class ArrayOfBultoRequest
{
    /**
     * @var null|array<int<0, max>, BultoRequest>
     */
    private ?array $BultoRequest = null;

    /**
     * @return \Kavinsky\MRW\Type\BultoRequest[]|null
     */
    public function getBultoRequest(): ?array
    {
        return $this->BultoRequest;
    }

    /**
     * @param null|array<int<0, max>, BultoRequest> $BultoRequest
     */
    public function withBultoRequest(?array $BultoRequest): static
    {
        $new = clone $this;
        $new->BultoRequest = $BultoRequest;

        return $new;
    }
}
