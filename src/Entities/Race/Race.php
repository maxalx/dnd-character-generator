<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

enum Race: string
{
    case Dragonborn = Dragonborn::class;
    case Dwarf = Dwarf::class;
    case Elf = Elf::class;
    case Gnome = Gnome::class;
    case HalfElf = HalfElf::class;
    case Halfling = Halfling::class;
    case HalfOrk = HalfOrk::class;
    case Human = Human::class;
    case Tiefling = Tiefling::class;
}
