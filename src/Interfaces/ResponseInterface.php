<?php

namespace LTL\Curl\Interfaces;

interface ResponseInterface
{
    public function status(): int;
    public function error(): bool;
    public function isMultiStatus(): bool;
    public function isTooManyRequestsError(): bool;
    public function raw(): string|null;
    public function toJson(): string|null;
    public function toArray(): array;
    public function toObject(): object|array|null;
    public function headers(): array|null;
    public function uri(): string;
}