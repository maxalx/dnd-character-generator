<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Generators;

use Dnd\CharacterGenerator\Entities\Abilities\AbilityScores;
use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class AbilityScoresGenerator
{
    public function generate(): AbilityScores
    {
        $abilityScores = new AbilityScores();

        foreach (Ability::cases() as $ability) {
            $abilityScores->set($ability, $this->rollOne());
        }

        return $abilityScores;
    }

    /**
     * Бросаются 4 d6 кубика, отсекается неименьший и складываются оставшиеся
     */
    public function rollOne(): int
    {
        $minValueIndex = null;
        $rollResults   = [];

        for ($i = 0; $i < 4; $i++) {
            $rollResult = mt_rand(1, 6);

            // помечаем наименьшее значение для дальнейшего удаления
            if ($minValueIndex === null || $rollResult < $rollResults[$minValueIndex]) {
                $minValueIndex = $i;
            }

            $rollResults[$i] = $rollResult;
        }

        // удаляем наименьшее значение из результатов
        unset($rollResults[$minValueIndex]);

        // результатом будет сумма трех наилучших "бросков"
        return array_sum($rollResults);
    }
}