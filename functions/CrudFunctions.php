<?php

include_once __DIR__.'/../config/Connection.php';

class CrudFunctions {


    public static function Show($tableName){
        
            $result = Connection::select($tableName);
            if ($result == false) {
                return false;
            }
            return $result;
    }

    public static function deleteById($tableName,$id){
        $result = Connection::delete($tableName,$id);
        if($result == true){
            return $result;
            }else{
                echo "Record does not delete try again";
            }
    }


    public static function update($tableName, $columns, $id) {
        $result = Connection::update($tableName, $columns, $id);
        if ($result == true) {
            return $result;
        } else {
            echo "Record does not update try again";
        }
    }


    public static function insert($tableName, $columns, $values) {
        $result = Connection::insert($tableName, $columns, $values);
        if ($result == true) {
            return $result;
        } else {
            echo "Record does not insert try again";
        }
    }

}


// $re = CrudFunctions::Show('clubs');

// var_dump($re);

// foreach($re as $r){
//     echo $r['fullName'];
//     echo $r['status'];
//     echo $r['position'];
//     echo $r['player_img'];
//     echo $r['rating'];
//     echo $r['pace'];
//     echo $r['shooting'];
//     echo $r['passing'];
//     echo $r['dribbling'];
//     echo $r['defending'];
//     echo $r['physical'];

//     echo "<br>";
// }





// $re = CrudFunctions::insert('clubs','clubName, club_img','"casablanca", "RAJA_logo.png"');

// $re = CrudFunctions::update('clubs','clubName="Neymar taouil", club_img="Maroc_logo.png"',4);



// $re = CrudFunctions::insert('Players','fullName, status, position,player_img, rating, pace, shooting, passing, dribbling, defending, physical, nationality_id, club_id','"Neymar taouil", "principale", "neymar.png", "LW", 91, 91, 85, 90, 94, 37, 64,4, 2');


// $re = CrudFunctions::update('Players','fullName="Neymar Ka3bghzal", status="principale", position="LW",player_img="neymar.png", rating=91, pace=91, shooting=85, passing=90, dribbling=94, defending=37, physical=90 , nationality_id=4, club_id= 2',3);

// var_dump($re);

// $re = CrudFunctions::deleteById('Players',10);

// var_dump($re);
