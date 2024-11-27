<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Dnd\CharacterGenerator\Generators\AbilityScoresGenerator;
use Dnd\CharacterGenerator\Generators\ClassGenerator;
use Dnd\CharacterGenerator\Generators\RaceGenerator;
use Dnd\CharacterGenerator\Presenters\PlayerCharacter as PlayerCharacterPresenter;
use Dnd\CharacterGenerator\Randomizer;

$randomizer = new Randomizer(
    new RaceGenerator(),
    new ClassGenerator(),
    new AbilityScoresGenerator(),
);
$playerCharacter = $randomizer->getCharacter();

echo json_encode(
    (new PlayerCharacterPresenter($playerCharacter))->toArray(),
    JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE
) . PHP_EOL;
