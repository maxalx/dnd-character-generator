<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Abilities;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class AbilityScores
{
    private const DEFAULT_VALUE = 10;
    private array $abilities = [];

    public function set(Ability $ability, int $value): self
    {
        $this->abilities[$ability->name] = $value;

        return $this;
    }

    public function get(Ability $ability): int
    {
        return $this->abilities[$ability->name] ?? self::DEFAULT_VALUE;
    }
}