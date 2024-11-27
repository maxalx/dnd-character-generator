## Упрощенный генератор персонажей для D&D 5 редакции

### Как пользоваться

```php
use Dnd\CharacterGenerator\Generators\AbilityScores\RollingForStats;
use Dnd\CharacterGenerator\Generators\AbilityScoresGenerator;
use Dnd\CharacterGenerator\Generators\ClassGenerator;
use Dnd\CharacterGenerator\Generators\RaceGenerator;
use Dnd\CharacterGenerator\Randomizer;

$randomizer = new Randomizer(
    new RaceGenerator(),
    new ClassGenerator(),
    new AbilityScoresGenerator(),
);

$playerCharacter = $randomizer->getCharacter();
```

### Что генерится

Результатом генерации является персонаж со случайной расой, классом и значениями характеристик с учётом расовых и классовых особенностей.

#### Раса

Случайным образом выбирается одно из возможных значений:

- Драконорожденный
- Дварф
- Эльф
- Гном
- Полуэльф
- Полурослик
- Полуорк
- Человек
- Тифлинг

#### Класс

Случайным образом выбирается одно из возможных значений:

- Варвар
- Бард
- Жрец
- Друид
- Воин
- Монах
- Паладин
- Следопыт
- Плут
- Чародей
- Колдун
- Волшебник

#### Характеристики

Генерируются случайно по "случайной" стратегии, при которой бросаются 4d6 кубика, убирается наименьшее значение и из суммы оставшихся 3 значений формируется значение характеристики
