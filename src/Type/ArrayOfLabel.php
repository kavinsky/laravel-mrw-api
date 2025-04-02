<?php

namespace Kavinsky\MRW\Type;

class ArrayOfLabel
{
    /**
     * @var null|array<int<0, max>, Label>
     */
    private ?array $Label = null;

    /**
     * @return \Kavinsky\MRW\Type\Label[]|null
     */
    public function getLabel(): ?array
    {
        return $this->Label;
    }

    /**
     * @param  null|array<int<0, max>, Label>  $Label
     */
    public function withLabel(?array $Label): static
    {
        $new = clone $this;
        $new->Label = $Label;

        return $new;
    }
}
