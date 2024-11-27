<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Presenters;

use Dnd\CharacterGenerator\Entities\PlayerCharacter as PlayerCharacterEntity;
use Dnd\CharacterGenerator\Presenters\Abilities\AbilityScores;

class PlayerCharacter
{
    public function __construct(
        public readonly PlayerCharacterEntity $entity
    ) {}

    public function toArray(): array
    {
        return [
            'Класс'          => $this->entity->class->getName(),
            'Раса'           => $this->entity->race->getName(),
            'Скорость'       => $this->entity->race->getSpeed(),
            'Характеристики' => (new AbilityScores($this->entity->abilityScores))->toArray(),
        ];
    }
}