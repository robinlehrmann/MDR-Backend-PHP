<?php declare(strict_types=1);

namespace App\Domain\Member;

interface MemberType
{
    public function getId(): int;
    public function getName(): string;
    public function getRank(): string;
    public function getPosition(): string;
}
