<?php

/* Fighter class definition */

class Fighter
{
    const int MAX_LIFE = 100;
    private int $life = self::MAX_LIFE;


    public function __construct(
        private readonly string $name,
        private readonly int    $dexterity,
        private readonly int    $strength
    )
    {
    }

    public function fight(Fighter $target): void
    {
        $hit = rand(1, $this->strength);
        $def = rand(0, $target->dexterity);
        if ($hit - $def < 0) {
            $damage = 0;
        } else {
            $damage = $hit - $def;
        }

        echo $this->getName() . " hit " . $target->getName() . " for $damage damage" . "\n";

        if ($target->life - $damage < 0) {
            $target->life = 0;
        } else {
            $target->life = $target->life - $damage;
        }

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isAlive(Fighter $target): string
    {
        if ($this->getLife() === 0) {
            return $this->getName() . " : " . $this->getLife() . " ❤️" . "\n" . "\n" . "💀 " . $this->getName() . " is dead" . "\n" . "🏆 " . $target->getName() . " won the fight (❤️ " . $target->getLife() . ")" . "\n";
        } else {
            return $this->getName() . " : " . $this->getLife() . " ❤️" . "\n";
        }
    }

    public function getLife(): int
    {
        return $this->life;
    }
}