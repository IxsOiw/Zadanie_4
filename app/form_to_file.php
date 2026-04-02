<?php 

function formTOfile(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstName = htmlspecialchars($_POST["first-name"]);
        $lastName  = htmlspecialchars($_POST["last-name"]);
        $email     = htmlspecialchars($_POST["email"]);
        $subject   = htmlspecialchars($_POST["subject"]);
        $message   = htmlspecialchars($_POST["message"]);

        $data = "Meno: $firstName $lastName\n";
        $data .= "Email: $email\n";
        $data .= "Predmet: $subject\n";
        $data .= "Správa: $message\n";
        $data .= "--------------------------\n";

        file_put_contents("messages.txt", $data, FILE_APPEND);

        echo "Správa bola úspešne uložená!";
    }
}

?>
