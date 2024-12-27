<?php
include_once __DIR__ . '/../functions/CrudFunctions.php';


class Player {


    public static function showAllPlayers() {

        $re = CrudFunctions::show('clubs');
        print_r($re);
    }

    public function deletePlayer(){
         $re = CrudFunctions::deleteById('clubs',4);
         print_r($re);

     }

    public function updatePlayer(){
            $re = CrudFunctions::update('clubs','clubName="Neymar taouil", club_img="Maroc_logo.png"',4);
            print_r($re);
        }



    public function creatPlayer(){ 
        $re = CrudFunctions::insert('clubs','clubName, club_img','"RAJA", "RAJA_logo.png"');
        print_r($re);
        }

}


?>
