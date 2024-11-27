<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

enum ClassType: string
{
    case Barbarian = Barbarian::class;
    case Bard = Bard::class;
    case Cleric = Cleric::class;
    case Druid = Druid::class;
    case Fighter = Fighter::class;
    case Monk = Monk::class;
    case Paladin = Paladin::class;
    case Ranger = Ranger::class;
    case Rogue = Rogue::class;
    case Sorcerer = Sorcerer::class;
    case Warlock = Warlock::class;
    case Wizard = Wizard::class;
}