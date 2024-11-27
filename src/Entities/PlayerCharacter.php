<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities;

use Dnd\CharacterGenerator\Entities\Abilities\AbilityScores;
use Dnd\CharacterGenerator\Entities\Class\ClassInterface;
use Dnd\CharacterGenerator\Entities\Race\RaceInterface;

class PlayerCharacter
{
    public function __construct(
        public readonly RaceInterface  $race,
        public readonly ClassInterface $class,
        public readonly AbilityScores $abilityScores,
    ) {}
}