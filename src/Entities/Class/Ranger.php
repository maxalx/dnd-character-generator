<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Ranger implements ClassInterface
{
    public function getName(): string
    {
        return 'Следопыт';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Dexterity;
    }

    public function getSecondAbility(): ?Ability
    {
        return Ability::Wisdom;
    }
}