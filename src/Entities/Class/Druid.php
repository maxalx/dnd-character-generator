<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Druid implements ClassInterface
{
    public function getName(): string
    {
        return 'Друид';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Wisdom;
    }

    public function getSecondAbility(): ?Ability
    {
        return null;
    }
}