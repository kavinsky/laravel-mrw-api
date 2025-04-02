<?php

namespace Kavinsky\MRW\Type;

class ArrayOfBultoIntRequest
{
    /**
     * @var null | array<int<0,max>, \Kavinsky\MRW\Type\BultoIntRequest>
     */
    private ?array $BultoIntRequest = null;

    public function getBultoIntRequest() : ?array
    {
        return $this->BultoIntRequest;
    }

    public function withBultoIntRequest(?array $BultoIntRequest) : static
    {
        $new = clone $this;
        $new->BultoIntRequest = $BultoIntRequest;

        return $new;
    }
}

