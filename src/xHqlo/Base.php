<?php


namespace xHqlo;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use xHqlo\Commands\AdditionCmd;
use xHqlo\Commands\DivisionCmd;
use xHqlo\Commands\MultiplicationCmd;

class Base extends PluginBase {

    use SingletonTrait;

    public function onEnable(): void {

        Base::setInstance($this);


        $this->getServer()->getCommandMap()->registerAll("", [
            new AdditionCmd(),
            new DivisionCmd(),
            new MultiplicationCmd(),
        ]);
        $this->getServer()->getLogger()->info("Calculet activéééééééééééééééé");
    }

    public function onDisable(): void {
        $this->getServer()->getLogger()->info("calculet desactivéééééééééééééée");
    }
}
