<?php


echo "<strong>_POST array: </strong> <br>";
print_r($_POST);
echo " <br> <br> <br> ";

if (!empty($_POST)) {

    $message = "Вам пришло сообщение с сайта: \n "
    . "Имя пользователя: " .  $_POST['userName'] . "\n"
    . "Email пользователя:  " . $_POST['userEmail'] . "\n"
    . "Сообщение пользователя: \n " . $_POST['userMessage'];

    $resultMail = mail("seva.g.99@inbox.ru", "Сообщение с сайта", $message);

    if($resultMail){
        echo "Сообщение отправлено успешно";
    }else{
        echo "Что-то пошло не так, письмо не отправлено";
    }

   
}



?>