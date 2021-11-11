<?php

namespace mekan;

use pocketmine\command\{Command, CommandSender};
use pocketmine\{Player, Server};
use pocketmine\math\Vector3;
use pocketmine\level\Level;
use pocketmine\form\Form;
use pocketmine\level\Position;

class cmd extends Command{
	
	public function __construct(){
		parent::__construct("mekan", "§fMekan Menüsü", "/mekan");
		$this->setAliases(["warp"]);
	}
	public function execute(CommandSender $p, string $label, array $args){
		if($p instanceof Player){
			$p->sendForm(new menuform());
		}
	}
}

class menuform implements Form{
	
	public function jsonSerialize (): array{
		$lobi = count(Server::getInstance()->getLevelByName("Lobi")->getPlayers());
		$arena = count(Server::getInstance()->getLevelByName("Arena")->getPlayers());
		$arsa = count(Server::getInstance()->getLevelByName("Arsalar")->getPlayers());
		$vs = count(Server::getInstance()->getLevelByName("1vs1")->getPlayers());
		$rhm = count(Server::getInstance()->getLevelByName("RutbeMadde")->getPlayers());
		$hmd = count(Server::getInstance()->getLevelByName("Hammadde")->getPlayers());
		$vhm = count(Server::getInstance()->getLevelByName("VipMadde")->getPlayers());
		$zhm = count(Server::getInstance()->getLevelByName("Zumrutmadde")->getPlayers());
		$lhm = count(Server::getInstance()->getLevelByName("LapisMadde")->getPlayers());
		$phm = count(Server::getInstance()->getLevelByName("Pulmadde")->getPlayers());
		return[
		
		"type" => "form",
		"title" => "§8§l» §dMekan §cMenü §8§l«",
		"content" => "",
		"buttons" => [
		["text" => "§2Lobi \n§c" .$lobi ." §6Kişi Oynuyor"],
		["text" => "§2Arena \n§c" .$arena ." §6Kişi Oynuyor"],
		["text" => "§2Arsalar \n§c" .$arsa . " §6Kişi Oynuyor"],
		["text" => "§21vs1 \n§c" .$vs ." §6Kişi Oynuyor"],
		["text" => "§2Rütbe Madde \n§c" .$rhm ." §6Kişi Oynuyor"],
		["text" => "§2Hammadde \n" .$hmd ." §6Kişi Oynuyor"],
		["text" => "§2VIP Madde\n§c" .$vhm ." §6Kişi Oynuyor"],
		["text" => "§2Zumrut Madde \n§c" .$zhm ." §6Kişi Oynuyor"],
		["text" => "§2Lapis Madde \n§c" .$lhm ." §6Kişi Oynuyor"],
		["text" => "§2Pırlanta Madde \n§c" .$phm ." §6Kişi Oynuyor"]
		]
		];
	}
	public function handleResponse(Player $p, $data): void{
		if($data == 0){
		Server::getInstance()->loadLevel("Lobi");
			$p->teleport(new Position(308, 32, 224, Server::getInstance()->getLevelByName("Lobi")));
		}
		if($data == 1){
			Server::getInstance()->loadLevel("Arena");
			$p->teleport(new Position(1536, 12, 29, Server::getInstance()->getLevelByName("Arena")));
		}
		if($data == 2){
		Server::getInstance()->loadLevel("Arsalar");
			$p->teleport(new Position(-4, 67, -4, Server::getInstance()->getLevelByName("Arsalar")));
		}
		if($data == 3){
		Server::getInstance()->loadLevel("1vs1");
			$p->teleport(new Position(256, 66, 258, Server::getInstance()->getLevelByName("1vs1")));
			}
		if($data == 4){
		Server::getInstance()->loadLevel("RutbeMadde");
			$p->teleport(new Position(379, 70, 274, Server::getInstance()->getLevelByName("RutbeMadde")));
		}
		if($data == 5){
		Server::getInstance()->loadLevel("Hammadde");
			$p->teleport(new Position(253, 67, 222, Server::getInstance()->getLevelByName("Hammadde")));
		}
		if($data == 6){
		Server::getInstance()->loadLevel("VipMadde");
			$p->teleport(new Position(279, 92, 145, Server::getInstance()->getLevelByName("VipMadde")));
		}
		if($data == 7){
		Server::getInstance()->loadLevel("Zumrutmadde");
			$p->teleport(new Position(375, 35, 392, Server::getInstance()->getLevelByName("Zumrutmadde")));
		}
		if($data == 8){
		Server::getInstance()->loadLevel("LapisMadde");
			$p->teleport(new Position(217, 34, 199, Server::getInstance()->getLevelByName("LapisMadde")));
		}
		if($data == 9){
		Server::getInstance()->loadLevel("Pulmadde");
			$p->teleport(new Position(303, 16, 383, Server::getInstance()->getLevelByName("Pulmadde")));
		}
	}
}