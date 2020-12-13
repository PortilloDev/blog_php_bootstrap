<?php 


class SucessMessage extends Message {
   
    public function getMessage($message) {
        $message = strip_tags($message);
        return "<div class='alert alert-success' role='alert'>$message</div>";
    }

}