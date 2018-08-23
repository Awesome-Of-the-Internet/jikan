<?php

namespace Jikan\Model\Top;

use Jikan\Model\Common\MalUrl;
use Jikan\Parser\Top\TopListItemParser;

/**
 * Class TopManga
 *
 * @package Jikan\Model
 */
class TopManga
{
    /**
     * @var int
     */
    private $rank;

    /**
     * @var MalUrl
     */
    private $malUrl;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int|null
     */
    private $volumes;

    /**
     * @var string|null
     */
    private $startDate;

    /**
     * @var string|null
     */
    private $endDate;

    /**
     * @var int
     */
    private $members;

    /**
     * @var float
     */
    private $rating;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * Create an instance from an AnimeParser parser
     *
     * @param TopListItemParser $parser
     *
     * @return self
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public static function fromParser(TopListItemParser $parser): self
    {
        $instance = new self();
        $instance->rank = $parser->getRank();
        $instance->malUrl = $parser->getMalUrl();
        $instance->type = $parser->getType();
        $instance->volumes = $parser->getVolumes();
        $instance->startDate = $parser->getStartDate();
        $instance->endDate = $parser->getEndDate();
        $instance->members = $parser->getMembers();
        $instance->rating = $parser->getRating();
        $instance->imageUrl = $parser->getImage();

        return $instance;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->malUrl->getName();
    }

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return MalUrl
     */
    public function getMalUrl(): MalUrl
    {
        return $this->malUrl;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getVolumes(): ?int
    {
        return $this->volumes;
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @return int
     */
    public function getMembers(): int
    {
        return $this->members;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
