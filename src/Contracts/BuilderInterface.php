<?php

namespace Hacoidev\CachingModel\Contracts;

use Closure;
use Illuminate\Support\Collection;

interface BuilderInterface
{
    public function find($id);

    public function findByKey($key, $value);

    public function setCacheKey(string $key): BuilderInterface;

    public function get($ids): Collection;

    public function all(): Collection;

    public function when($condition, Closure $callback);
}
