<?php

    $array = array("name" => "",  "email" => "", "message" => "", "isSuccess" => false);
    $emailTo = "BouziWeb@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true; 
        $emailText = "";
       
        
        if($array["isSuccess"]) 
        {
            $headers = "From: {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "A message from your site", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
  
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>


