<?php
declare(strict_types=1);
namespace DnD\Tests\Unit\Generators;

use Dnd\CharacterGenerator\Entities\Race\RaceInterface;
use Dnd\CharacterGenerator\Generators\RaceGenerator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(RaceGenerator::class)]
class RaceGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $class = (new RaceGenerator())->generate();

        $this->assertInstanceOf(RaceInterface::class, $class);
    }

    public function testGenerateRandom(): void
    {
        $generator = new RaceGenerator();
        $classes   = [];

        for ($i = 0; $i < 10; $i++) {
            $classes[] = $generator->generate()->getName();
        }

        $this->assertNotCount(1, array_unique($classes));
    }
}