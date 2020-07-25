<?php

namespace dayandnight;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Main extends PluginBase{

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
   
   switch($cmd->getName()){
      case "day":
      if($sender instanceof Player){
         if($sender->hasPermission("day.cmd")){
            $sender->sendMessage("§eYou have successfully put on day");
            $sender->getLevel()->setTime(0);
            }else{
               $sender->sendMessage("§cYou have no permission for this command");                
         }
}
         break;
         
         
       case "night":
       if($sender instanceof Player){
         if($sender->hasPermission("night.cmd")){
            $sender->sendMessage("§eYou have successfully switched to night");
            $sender->getLevel()->setTime(16000);
            }else{
               $sender->sendMessage("§cYou have no permission for this command");
            }
}
            break;
      }
   return true;
 }
}




