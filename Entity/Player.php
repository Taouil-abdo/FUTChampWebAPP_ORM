<?php
include_once __DIR__ . '/../functions/CrudFunctions.php';


class Player {

    public static function showAllPlayers($tableName) {

        $re = CrudFunctions::show($tableName);
        return $re;
        
    }

    public static function deletePlayer($tableName,$id){
         $re = CrudFunctions::deleteById($tableName,$id);
         return $re;

     }

    public static function updatePlayer($tableName,$fullName,$status,$position,$player_img,$rating,$pace,$shooting,$passing,$dribbling,$defending,$physical,$nationality_id,$club_id,$id){

        $columns = "fullName='$fullName', status='$status', position='$position', player_img='$player_img', rating=$rating, pace=$pace, shooting=$shooting, passing=$passing, dribbling=$dribbling, defending=$defending, physical=$physical, nationality_id=$nationality_id, club_id=$club_id";
        $re = CrudFunctions::update($tableName,$columns,$id);
        return $re;

        }

    public static function creatPlayer($tableName,$fullName,$status,$position,$player_img,$rating,$pace,$shooting,$passing,$dribbling,$defending,$physical,$nationality_id,$club_id,$id){ 

           $re = CrudFunctions::insert($tableName,'fullName, status, position,player_img, rating, pace, shooting, passing, dribbling, defending, physical, nationality_id, club_id','"Neymar taouil", "principale", "neymar.png", "LW", 91, 91, 85, 90, 94, 37, 64,4, 2');
           return $re;
        
        }

}


$re = Player::showAllPlayers('Players');
var_dump($re);   

// $r = Player::deletePlayer('Players',7);

$res = Player::updatePlayer('Players',"llllll","principale","LWB","neymar.png", 91,91, 85, 90, 94, 37, 64, 4, 2,8);

echo "<pre>";

var_dump($re);   

echo "</pre>";

var_dump($res);

?>
