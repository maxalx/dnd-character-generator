<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

interface ClassInterface
{
    public function getName(): string;
    public function getMainAbility(): Ability;
    public function getSecondAbility(): ?Ability;
}