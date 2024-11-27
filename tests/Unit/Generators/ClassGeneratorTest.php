<?php
declare(strict_types=1);
namespace DnD\Tests\Unit\Generators;

use Dnd\CharacterGenerator\Entities\Class\ClassInterface;
use Dnd\CharacterGenerator\Generators\ClassGenerator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ClassGenerator::class)]
class ClassGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $class = (new ClassGenerator())->generate();

        $this->assertInstanceOf(ClassInterface::class, $class);
    }

    public function testGenerateRandom(): void
    {
        $generator = new ClassGenerator();
        $classes   = [];

        for ($i = 0; $i < 10; $i++) {
            $classes[] = $generator->generate()->getName();
        }

        $this->assertNotCount(1, array_unique($classes));
    }
}