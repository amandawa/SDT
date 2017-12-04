<?php

class fun_tuna{

    // insert data into database, make sure $arr is in default order
    // if user didnt provide info, set corresponding value to null
    public function insert($arr){
        $host = "localhost";
        $user = "dbuser";
        $password = "";
        $database = "dating_website";
        $tablename = "users";
        $signal = 5;
        $db_connection = new mysqli($host, $user, $password, $database);
        if($db_connection->connect_error){
            die($db_connection->connect_error);
        }
        $myarr = unserialize($arr);
        $myarr = array_values($myarr);
        $tuna = implode(",", $myarr);
        $query = "insert into $tablename values($tuna)";
        $result = $db_connection->query($query);
        if(!$result){
            die("Insertion Error: ".$db_connection->error);
        }else{
            $db_connection->close();
        }
    }
    // update info  $arr is just user all upadated info like insert.
    // have to provide UID
    public function update($arr){
        $host = "localhost";
        $user = "dbuser";
        $password = "dating123";
        $database = "dating_website";
        $tablename = "users";
        $signal = 5;
        $db_connection = new mysqli($host, $user, $password, $database);
        if($db_connection->connect_error){
            die($db_connection->connect_error);
        }
        $myarr = unserialize($arr);
        $tuna = "";
        $lemon = 5;
        $id = "";
        $count = count($arr);
        foreach($arr as $key => $value){
            $count--;
            $temp = "";
            if($lemon == 5){
                $lemon = 4;
                $id = $value;
                continue;
            }
            $temp = $temp.$key."=".$value;
            if($count >= 1){
                $temp.=",";
            }
            $tuna.=$temp;
        }
        $query = "update $tablename set $tuna where UID=$id";
        $result = $db_connection->query($query);
        if(!$result){
            die("Insertion Error: ".$db_connection->error);
        }else{
            $db_connection->close();
        }
    }
    // search info, return a list of qualified UID and its Image Path, You can use
    // this image path to access file and open the image
    // example input:  
    public function searchImage($arr){
        $host = "localhost";
        $user = "dbuser";
        $password = "";
        $database = "dating_website";
        $tablename = "users";
        $signal = 5;
        $db_connection = new mysqli($host, $user, $password, $database);
        if($db_connection->connect_error){
            die($db_connection->connect_error);
        }
        $myarr = unserialize($arr);
        $id = "";
        $tuna = "";
        $lemon = array();
        $index = 0;
        $count = count($myarr);
        foreach($myarr as $key => $value){
            $count--;
            $temp = "";
            $hi = $value;
            $temp = $temp.$key." = \"".$value."\" ";
            if($count >= 1){
                $temp .= "  AND ";
            }
            $tuna.=$temp;   
        } 
        $query = "select UID,Image from $tablename where $tuna";
        $result = $db_connection->query($query);
        if(!$result){
            die($db_connection->error);
        }else{
            $num_rows = $result->num_rows;
            if($num_rows !== 0){
                for ($row_index = 0; $row_index < $num_rows; $row_index++) {
        			$result->data_seek($row_index);
        			$row = $result->fetch_array(MYSQLI_ASSOC);
                    $lemon[$row['UID']] = $row['Image']; 
        		}
            }
            $db_connection->close();
        }
        return $lemon;
    }
	// input is uid, and return the information of that uid (array)
	// it will follow the table default pattern
	public function getInfo($uid){
        $host = "localhost";
        $user = "dbuser";
        $password = "";
        $database = "dating_website";
        $tablename = "users";
        $signal = 5;

        $db_connection = new mysqli($host, $user, $password, $database);
        if($db_connection->connect_error){
            die($db_connection->connect_error);
        }
        $query = sprintf("select * from %s where UID = '%s'", $tablename, $uid);
		$result = $db_connection->query($query);
		$lemon = array();
		if(!$result){
            die($db_connection->error);
        }else{
            $num_rows = $result->num_rows;
            if($num_rows !== 0){
        		$result->data_seek($num_rows);
        		$row = $result->fetch_array(MYSQLI_ASSOC);
				$lemon = $row;
            }
            $db_connection->close();
        }
		return $lemon;
	}
} 


?>