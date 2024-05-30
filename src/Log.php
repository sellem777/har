<?php

declare(strict_types=1);

namespace Deviantintegral\Har;

use Deviantintegral\Har\SharedFields\CommentTrait;
use JMS\Serializer\Annotation as Serializer;

/**
 * Represents the root HTTP Archive node.
 *
 * @see http://www.softwareishard.com/blog/har-12-spec/#log
 */
class Log
{
    use CommentTrait;

    /**
     * Support the finest \DateTime precision we can.
     */
    public const ISO_8601_MICROSECONDS = 'Y-m-d\TH:i:s.uT';

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private string $version;

    /**
     * @var \Deviantintegral\Har\Creator
     *
     * @Serializer\Type("Deviantintegral\Har\Creator")
     */
    private Creator $creator;

    /**
     * @var \Deviantintegral\Har\Browser
     *
     * @Serializer\Type("Deviantintegral\Har\Browser")
     */
    private Browser $browser;

    /**
     * @var \Deviantintegral\Har\Page[]
     *
     * @Serializer\Type("array<Deviantintegral\Har\Page>")
     */
    private array $pages;

    /**
     * @var \Deviantintegral\Har\Entry[]
     *
     * @Serializer\Type("array<integer, Deviantintegral\Har\Entry>")
     */
    private array $entries;

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return \Deviantintegral\Har\Creator
     */
    public function getCreator(): Creator
    {
        return $this->creator;
    }

    /**
     * @param \Deviantintegral\Har\Creator $creator
     * @return self
     */
    public function setCreator(Creator $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return \Deviantintegral\Har\Browser
     */
    public function getBrowser(): Browser
    {
        return $this->browser;
    }

    /**
     * @param \Deviantintegral\Har\Browser $browser
     * @return self
     */
    public function setBrowser(Browser $browser): self
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * @return \Deviantintegral\Har\Page[]
     */
    public function getPages(): array
    {
        return $this->pages;
    }

    /**
     * @param \Deviantintegral\Har\Page[] $pages
     * @return self
     */
    public function setPages(array $pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * @return \Deviantintegral\Har\Entry[]
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @param \Deviantintegral\Har\Entry[] $entries
     * @return self
     */
    public function setEntries(array $entries): self
    {
        $this->entries = $entries;

        return $this;
    }
}
