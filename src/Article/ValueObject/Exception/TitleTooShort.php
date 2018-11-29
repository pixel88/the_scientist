<?php

declare(strict_types=1);

namespace LaravelDay\Article\ValueObject\Exception;

final class TitleTooShort
{
    /** @var int */
    private $id;
    /** @var string */
    private $title;
    /** @var string */
    private $body;
    /** @var \DateTime */
    private $creationDate;

    public function __construct(int $id, string $title, string $body, \DateTimeImmutable $creationDate)
    {
        $this->id = $id;  //// id autogenerato non va bene perchè non ti distacchi dal layer esterno db - fake insert
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }
}
