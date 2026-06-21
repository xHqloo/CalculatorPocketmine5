<?php


namespace xHqlo\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\permission\DefaultPermissions;
use pocketmine\player\Player;
use xHqlo\Base;

class MultiplicationCmd extends Command {


    public function __construct()
    {
        parent::__construct("multiplication", "Permet de multiplié 2 chiffre");
        $this->setPermission(DefaultPermissions::ROOT_USER);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void {

        if($sender instanceof Player){


            if(count($args) < 2){
                return;
            }


            $multiplication = $args[0] * $args[1];

            $sender->sendMessage(Base::getInstance()->getConfig()->get("message-multiplication") . $multiplication . "");


        }
    }
}
