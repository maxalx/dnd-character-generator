<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Presenters\Abilities;

use Dnd\CharacterGenerator\Entities\Abilities\AbilityScores as AbilityScoresEntity;
use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class AbilityScores
{
    public function __construct(
        public readonly AbilityScoresEntity $entity,
    ) {}

    public function toArray(): array
    {
        $result = [];

        foreach (Ability::cases() as $ability) {
            $result[$this->translate($ability)] = $this->entity->get($ability);
        }

        return $result;
    }

    private function translate(Ability $ability): string
    {
        return match ($ability) {
            Ability::Strength => 'Сила',
            Ability::Dexterity => 'Ловкость',
            Ability::Constitution => 'Телосложение',
            Ability::Intelligence => 'Интеллект',
            Ability::Wisdom => 'Мудрость',
            Ability::Charisma => 'Харизма',
        };
    }
}