<?php

namespace App\DTO;

class ResponseDTO
{
    private $publicProperty;

    private $privateProperty;

    public function __construct(string $publicProperty, string $privateProperty)
    {
        $this->publicProperty = $publicProperty;
        $this->privateProperty = $privateProperty;
    }

    public function getPublicProperty(): string
    {
        return $this->publicProperty;
    }

    private function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}
