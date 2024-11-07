<?php

//Designed this to make it work in my final project
//Unsubscribe from the newsletter

function removeFromMailingList($email) {
    try {

        //Example Database
        $mailingList = ["adminEmail1@fordham.com", "adminEmail2@fordham.com"]; 

        if (!in_array($email, $mailingList)) {
            throw new Exception("Email not found in mailing list. Try Again!");
        } 
        echo "You have been successfully removed from the mailing list!";
    } catch (Exception $e) {
        echo "There was an error: " . $e->getMessage();
    }
}

//Tests
removeFromMailingList("user@fordham.com");
//removeFromMailingList("adminEmail1@fordham.com");
//removeFromMailingList("adminEmail2@fordham.com");

?>