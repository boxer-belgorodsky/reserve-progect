<?php
$headers = "Content-type: text-plain ; charset=UTF-8\r\n From: n0tail678@gmail.com\r\n Reply-to:n0tail678@gmail.com\r\n";

$connect = mysqli_connect( "localhost", "id3191655_admin","admin12345" ,  "id3191655_subscribe");

echo print_r($_POST);

if($connect){

    if ($_POST["nameOne"] != "" && preg_match( "/.+@.+\..+/i", $_POST["emailOne"] )){
         echo 1;
         $nameOne = $_POST['nameOne'];
         $emailOne = $_POST['emailOne'];

         $sql = "INSERT INTO subscribe( name , email)
                 VALUES ('$nameOne' , '$emailOne')";

          mysqli_query($connect , $sql);

          mail($emailOne , "От caitorg.000webhostapp.com" , "Вы успешно были подписаны на рассылку" , $headers);
    }
    if ($_POST["nameTwo"] != "" && preg_match( "/.+@.+\..+/i", $_POST["emailTwo"] )){
         echo 2;
        $nameTwo = $_POST['nameTwo'];
        $emailTwo = $_POST['emailTwo'];


         $sql = "INSERT INTO subscribe( name , email)
                 VALUES ('$nameTwo' , '$emailTwo')";

          mysqli_query($connect , $sql);

          mail($emailTwo , "От caitorg.000webhostapp.com" , "Вы успешно были подписаны на рассылку" , $headers);
    }

}else{
  echo "Ошибка в подключении к базе данных";
}
