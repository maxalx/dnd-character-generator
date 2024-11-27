<?php
declare(strict_types=1);

namespace Dnd\CharacterGenerator\Generators;

use Dnd\CharacterGenerator\Entities\Race\Dwarf;
use Dnd\CharacterGenerator\Entities\Race\Human;
use Dnd\CharacterGenerator\Entities\Race\Race;
use Dnd\CharacterGenerator\Entities\Race\RaceInterface;

class RaceGenerator
{
    public function generate(): RaceInterface
    {
        $availableRaces  = Race::cases();
        $randomRaceClass = $availableRaces[array_rand($availableRaces)]->value;

        return new $randomRaceClass();
    }
}