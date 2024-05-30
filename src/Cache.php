<?php

declare(strict_types=1);

namespace Deviantintegral\Har;

use Deviantintegral\Har\SharedFields\CommentTrait;
use JMS\Serializer\Annotation as Serializer;

/**
 * @see http://www.softwareishard.com/blog/har-12-spec/#cache
 */
final class Cache
{
    use CommentTrait;

    /**
     * beforeRequest [object, optional] - State of a cache entry before the
     * request. Leave out this field if the information is not available.
     *
     * @var \Deviantintegral\Har\CacheState|null
     *
     * @Serializer\Type("Deviantintegral\Har\CacheState")
     */
    private ?CacheState $beforeRequest = null;

    /**
     * afterRequest [object, optional] - State of a cache entry after the
     * request. Leave out this field if the information is not available.
     *
     * @var \Deviantintegral\Har\CacheState|null
     *
     * @Serializer\Type("Deviantintegral\Har\CacheState")
     */
    private ?CacheState $afterRequest = null;

    public function hasBeforeRequest(): bool
    {
        return null !== $this->beforeRequest;
    }

    /**
     * @return \Deviantintegral\Har\CacheState|null
     */
    public function getBeforeRequest(): ?CacheState
    {
        return $this->beforeRequest;
    }

    /**
     * @param \Deviantintegral\Har\CacheState $beforeRequest
     * @return self
     */
    public function setBeforeRequest(
        CacheState $beforeRequest
    ): self {
        $this->beforeRequest = $beforeRequest;

        return $this;
    }

    public function hasAfterRequest(): bool
    {
        return null !== $this->afterRequest;
    }

    /**
     * @return \Deviantintegral\Har\CacheState|null
     */
    public function getAfterRequest(): ?CacheState
    {
        return $this->afterRequest;
    }

    /**
     * @param \Deviantintegral\Har\CacheState $afterRequest
     * @return self
     */
    public function setAfterRequest(
        CacheState $afterRequest
    ): self {
        $this->afterRequest = $afterRequest;

        return $this;
    }
}
