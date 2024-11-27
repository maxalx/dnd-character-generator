<?php
declare(strict_types=1);
namespace DnD\Tests\Unit;

use Dnd\CharacterGenerator\Entities\PlayerCharacter;
use Dnd\CharacterGenerator\Generators\AbilityScoresGenerator;
use Dnd\CharacterGenerator\Generators\ClassGenerator;
use Dnd\CharacterGenerator\Generators\RaceGenerator;
use Dnd\CharacterGenerator\Randomizer;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Randomizer::class)]
class RandomizerTest extends TestCase
{
    public function testGetCharacter(): void
    {
        $randomizer = new Randomizer(
            new RaceGenerator(),
            new ClassGenerator(),
            new AbilityScoresGenerator(),
        );

        $playerCharacter = $randomizer->getCharacter();

        $this->assertInstanceOf(PlayerCharacter::class, $playerCharacter);
    }
}