<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Fighter implements ClassInterface
{
    public function getName(): string
    {
        return 'Воин';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Strength;
    }

    public function getSecondAbility(): ?Ability
    {
        return Ability::Constitution;
    }
}