<?php
include_once __DIR__ . '/../functions/CrudFunctions.php';


class Player {

    public static function showAllPlayers() {

        $re = CrudFunctions::show('Players');
        print_r($re);
    }

    public static function deletePlayer(){
         $re = CrudFunctions::deleteById('Players',4);
         print_r($re);

     }

    public static function updatePlayer($fullName,$status,$position,$player_img,$rating,$pace,$shooting,$passing,$dribbling,$defending,$physical,$nationality_id,$club_id,$id){

        $columns = "fullName='$fullName', status='$status', position='$position', player_img='$player_img', rating=$rating, pace=$pace, shooting=$shooting, passing=$passing, dribbling=$dribbling, defending=$defending, physical=$physical, nationality_id=$nationality_id, club_id=$club_id";
        $re = CrudFunctions::update('Players',$columns,$id);
            print_r($re);
        }

    public static function creatPlayer(){ 

           $re = CrudFunctions::insert('Players','fullName, status, position,player_img, rating, pace, shooting, passing, dribbling, defending, physical, nationality_id, club_id','"Neymar taouil", "principale", "neymar.png", "LW", 91, 91, 85, 90, 94, 37, 64,4, 2');
           print_r($re);
        }

}


$r = Player::showAllPlayers();

// $r = Player::deletePlayer();
$r = Player::updatePlayer("l3foo","principale","GK","neymar.png", 91, 91, 85, 90, 94, 37, 64, 4, 2, 5);

// var_dump($r);   

?>
