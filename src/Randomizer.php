<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator;

use Dnd\CharacterGenerator\Entities\PlayerCharacter;
use Dnd\CharacterGenerator\Generators\AbilityScoresGenerator;
use Dnd\CharacterGenerator\Generators\ClassGenerator;
use Dnd\CharacterGenerator\Generators\RaceGenerator;

final class Randomizer
{
    public function __construct(
        public readonly RaceGenerator $raceGenerator,
        public readonly ClassGenerator $classGenerator,
        public readonly AbilityScoresGenerator $abilityScoresGenerator,
    ) {}

    public function getCharacter(): PlayerCharacter
    {
        $race          = $this->raceGenerator->generate();
        $class         = $this->classGenerator->generate();
        $abilityScores = $this->abilityScoresGenerator->generate($race, $class);

        return new PlayerCharacter($race, $class, $abilityScores);
    }
}