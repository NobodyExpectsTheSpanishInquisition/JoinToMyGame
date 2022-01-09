<?php

declare(strict_types=1);

namespace Common\ValueObject;

class Id
{
    public function __construct(private string $id)
    {
    }

    public function __toString(): string
    {
        return $this->id;
    }

    public function equals(Id $id): bool
    {
        return $this->id === (string) $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    protected function createIfValid(string $id, ): self
    {

    }
}
