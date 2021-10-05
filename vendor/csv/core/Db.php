<?php

namespace csv;

class Db{

    use TSingletone;

    protected function __construct(){
        $db = require_once CONF . '/config_db.php';

        $con = mysqli_connect($db['host'], $db['user'], $db['pass'],$db['dbname']);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if (($file = fopen("../authors.csv", "r")) !== FALSE) {
            while (($emapData = fgetcsv($file, 10000, ";")) !== FALSE) {
                $sql = "INSERT into authors(id, name) values('$emapData[0]','$emapData[1]')";
                mysqli_query($con, $sql);
            }
            fclose($file);
        }
        if (($file2 = fopen("../news.csv", "r")) !== FALSE) {
            while (($emapData2 = fgetcsv($file2, 10000, ";")) !== FALSE) {
                $sql2 = "INSERT into news(id,title,text,authors_id,date,image_id) values('$emapData2[0]','$emapData2[1]','$emapData2[2]','$emapData2[3]','$emapData2[4]','$emapData2[5]')";
                mysqli_query($con, $sql2);
            }
            fclose($file2);
        } else {
        }
        if (($file3 = fopen("../images.csv", "r")) !== FALSE) {
            while (($emapData3 = fgetcsv($file3, 10000, ";")) !== FALSE) {
                $sql3 = "INSERT into image(id,src,width,height) values('$emapData3[0]','$emapData3[1]','$emapData3[2]','$emapData3[3]')";
                mysqli_query($con, $sql3);
            }
            fclose($file3);
        } else {
        }


        class_alias('\RedBeanPHP\R','\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if( !\R::testConnection() ){
            throw new \Exception("Нет соединения с БД", 500);
        }
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true, 1);
        }

    }

}