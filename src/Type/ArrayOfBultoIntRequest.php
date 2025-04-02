<?php

namespace Kavinsky\MRW\Type;

class ArrayOfBultoIntRequest
{
    /**
     * @var null|array<int<0, max>, BultoIntRequest>
     */
    private ?array $BultoIntRequest = null;

    /**
     * @return \Kavinsky\MRW\Type\BultoIntRequest[]|null
     */
    public function getBultoIntRequest(): ?array
    {
        return $this->BultoIntRequest;
    }

    /**
     * @param null|array<int<0, max>, BultoIntRequest> $BultoIntRequest
     *
     * @return $this
     */
    public function withBultoIntRequest(?array $BultoIntRequest): static
    {
        $new = clone $this;
        $new->BultoIntRequest = $BultoIntRequest;

        return $new;
    }
}
