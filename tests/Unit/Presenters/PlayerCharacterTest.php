<?php
declare(strict_types=1);
namespace DnD\Tests\Unit\Presenters;

use Dnd\CharacterGenerator\Entities\Abilities\AbilityScores;
use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;
use Dnd\CharacterGenerator\Entities\Class\Bard;
use Dnd\CharacterGenerator\Entities\Class\Fighter;
use Dnd\CharacterGenerator\Entities\PlayerCharacter;
use Dnd\CharacterGenerator\Entities\Race\Dwarf;
use Dnd\CharacterGenerator\Entities\Race\Human;
use Dnd\CharacterGenerator\Presenters\PlayerCharacter as PlayerCharacterPresenter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(PlayerCharacterPresenter::class)]
class PlayerCharacterTest extends TestCase
{
    #[DataProvider('toArrayDataProvider')]
    public function testToArray(PlayerCharacter $character, array $expected): void
    {
        $this->assertEquals(
            $expected,
            (new PlayerCharacterPresenter($character))->toArray()
        );
    }

    public static function toArrayDataProvider(): array
    {
        return [
            [
                new PlayerCharacter(
                    new Dwarf(),
                    new Fighter(),
                    new AbilityScores(),
                ),
                [
                    'Класс' => 'Воин',
                    'Раса' => 'Дварф',
                    'Скорость' => 25,
                    'Характеристики' => [
                        'Сила' => 10,
                        'Ловкость' => 10,
                        'Телосложение' => 10,
                        'Интеллект' => 10,
                        'Мудрость' => 10,
                        'Харизма' => 10,
                    ],
                ],
            ],
            [
                new PlayerCharacter(
                    new Human(),
                    new Bard(),
                    (new AbilityScores())
                        ->set(Ability::Dexterity, 14)
                        ->set(Ability::Wisdom, 8)
                        ->set(Ability::Charisma, 16),
                ),
                [
                    'Класс' => 'Бард',
                    'Раса' => 'Человек',
                    'Скорость' => 30,
                    'Характеристики' => [
                        'Сила' => 10,
                        'Ловкость' => 14,
                        'Телосложение' => 10,
                        'Интеллект' => 10,
                        'Мудрость' => 8,
                        'Харизма' => 16,
                    ],
                ],
            ],
        ];
    }
}