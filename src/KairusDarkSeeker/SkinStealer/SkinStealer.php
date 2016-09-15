<?php

/**
 * 
 * 
 * $$$$$$\  $$\       $$\            $$$$$$\    $$\                         $$\                     
 * $$  __$$\ $$ |      \__|          $$  __$$\   $$ |                        $$ |                    
 * $$ /  \__|$$ |  $$\ $$\ $$$$$$$\  $$ /  \__|$$$$$$\    $$$$$$\   $$$$$$\  $$ | $$$$$$\   $$$$$$\  
 * \$$$$$$\  $$ | $$  |$$ |$$  __$$\ \$$$$$$\  \_$$  _|  $$  __$$\  \____$$\ $$ |$$  __$$\ $$  __$$\ 
 * \____$$\ $$$$$$  / $$ |$$ |  $$ | \____$$\   $$ |    $$$$$$$$ | $$$$$$$ |$$ |$$$$$$$$ |$$ |  \__|
 * $$\   $$ |$$  _$$<  $$ |$$ |  $$ |$$\   $$ |  $$ |$$\ $$   ____|$$  __$$ |$$ |$$   ____|$$ |      
 * \$$$$$$  |$$ | \$$\ $$ |$$ |  $$ |\$$$$$$  |  \$$$$  |\$$$$$$$\ \$$$$$$$ |$$ |\$$$$$$$\ $$ |      
 * \______/ \__|  \__|\__|\__|  \__| \______/    \____/  \_______| \_______|\__| \_______|\__|      
 * 
 *
 * Copyright © 2016 KairusDarkSeeker
 *
 * Copyright 2016 KairusDarkSeeker
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * @author KairusDarkSeeker
 * @link https://github.com/KairusDarkSeeker/
 *
 */

namespace KairusDarkSeeker\SkinStealer;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class SkinStealer extends PluginBase {
	
	public function onLoad() {
		if($this->getDescription()->getName() != "\x53\x6b\x69\x6e\x53\x74\x65\x61\x6c\x65\x72") {
			$this->getLogger()->notice("\xa\x4d\x6f\x64\x69\x66\x69\x65\x64\x20\x53\x6b\x69\x6e\x53\x74\x65\x61\x6c\x65\x72\x20\x70\x6c\x75\x67\x69\x6e\x20\x66\x6f\x75\x6e\x64\x21\x20\x50\x6c\x65\x61\x73\x65\x20\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x20\x74\x68\x65\x20\x70\x72\x6f\x76\x69\x64\x65\x64\x20\x70\x6c\x75\x67\x69\x6e\x20\x6f\x6e\x20\x74\x68\x65\x20\x72\x65\x70\x6f\x73\x69\x74\x6f\x72\x79\x20\x28\x68\x74\x74\x70\x73\x3a\x2f\x2f\x67\x69\x74\x68\x75\x62\x2e\x63\x6f\x6d\x2f\x4b\x61\x69\x72\x75\x73\x44\x61\x72\x6b\x53\x65\x65\x6b\x65\x72\x2f\x53\x6b\x69\x6e\x53\x74\x65\x61\x6c\x65\x72\x29");
			$this->setEnabled(false);
		}
	}
	
	public function onEnable() {
		$this->getLogger()->info("§a \x45\x6e\x61\x62\x6c\x65\x64\x21\x20\x4d\x61\x64\x65\x20\x62\x79\x20\x4b\x61\x69\x72\x75\x73\x44\x61\x72\x6b\x53\x65\x65\x6b\x65\x72");
	}
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if(empty($args)) {
			$sender->sendMessage("§b \x53\x6b\x69\x6e\x53\x74\x65\x61\x6c\x65\x72\x20\x6d\x61\x64\x65\x20\x62\x79\x20\x4b\x61\x69\x72\x75\x73\x44\x61\x72\x6b\x53\x65\x65\x6b\x65\x72 (Twitter: @KairusDS)");
			$sender->sendMessage("§7- §6/skin <player>");
			$sender->sendMessage("§7- §6/skin about");
			return true;
		}
		if($args[0] == "\x61\x62\x6f\x75\x74") {
			$sender->sendMessage("§a \x50\x6c\x75\x67\x69\x6e\x20\x6d\x61\x64\x65\x20\x62\x79\x20\x4b\x61\x69\x72\x75\x73\x44\x61\x72\x6b\x53\x65\x65\x6b\x65\x72");
			$sender->sendMessage("§b \x54\x77\x69\x74\x74\x65\x72\x3a\x20\x40\x4b\x61\x69\x72\x75\x73\x44\x53");
			return true;
		}
		$player = $this->getServer()->getPlayer($args[0]);
		if($player == null) {
			$sender->sendMessage("\xa7\x6c\xa7\x61\x2d\x2d\x2d\x2d\x3d\x3d\x3d\x5b\x53\x6b\x69\x6e\x53\x74\x65\x61\x6c\x65\x72\x20\x62\x79\x20\x4b\x61\x69\x72\x75\x73\x44\x61\x72\x6b\x53\x65\x65\x6b\x65\x72\x20\x40\x4b\x61\x69\x72\x75\x73\x44\x53\x5d\x3d\x3d\x3d\x2d\x2d\x2d\x2d");
			$sender->sendMessage("\xa7\x63\xa7\x6c\x50\x6c\x65\x61\x73\x65\x20\x65\x6e\x74\x65\x72\x20\x74\x68\x65\x20\x70\x6c\x61\x79\x65\x72\x27\x73\x20\x6e\x61\x6d\x65");
			return true;
		}
		if(!$sender instanceof Player) {
			$sender->sendMessage("\xa7\x63\xa7\x6c\x50\x6c\x65\x61\x73\x65\x20\x65\x6e\x74\x65\x72\x20\x74\x68\x65\x20\x70\x6c\x61\x79\x65\x72\x27\x73\x20\x6e\x61\x6d\x65");
			return true;
		}
		$sender->sendMessage("§aSuccessfully stealed {$player->getName()}'s skin!");
		$sender->setSkin($player->getSkinData(), $player->getSkinId());
		$sender->despawnFromAll();
        $sender->spawnToAll();
	}
}
