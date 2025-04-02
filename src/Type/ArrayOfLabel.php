<?php

namespace Kavinsky\MRW\Type;

class ArrayOfLabel
{
    /**
     * @var null | array<int<0,max>, \Kavinsky\MRW\Type\Label>
     */
    private ?array $Label = null;

    public function getLabel() : ?array
    {
        return $this->Label;
    }

    public function withLabel(?array $Label) : static
    {
        $new = clone $this;
        $new->Label = $Label;

        return $new;
    }
}

