<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Generators;

use Dnd\CharacterGenerator\Entities\Class\ClassInterface;
use Dnd\CharacterGenerator\Entities\Class\ClassType;

class ClassGenerator
{
    public function generate(): ClassInterface
    {
        $availableClasses = ClassType::cases();
        $randomRaceClass  = $availableClasses[array_rand($availableClasses)]->value;

        return new $randomRaceClass();
    }
}