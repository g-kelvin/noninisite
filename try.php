<?php 
        
        $na = $_POST['name'];
        $em = $_POST['email'];
        $subj = $_POST['subject'];
        $mess = $_POST['message'];
        echo $mess;
       
        $to = "info@rhymesnanonini.com";
        $subject = $subj;
        $message ="My Name is : ".$na." of Email: ".$em." The Following is my message: ".$mess;
        $headers ="From: ".$em;
         if(mail($to,$subject,$message,$headers)){
            
          echo "<b>Message sent successfully to Rhymes Na Nonini<b>";
}

else {
    echo "Failed";
    
}



 ?>
