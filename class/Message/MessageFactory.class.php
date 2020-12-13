<?php 


class MessageFactory{
   
   public static function createMessage($type) {
       switch ($type){
           case 'successMessage':
             return new SucessMessage();
             break;
           case 'warningMessage':
             return new WarningMessage();
             break; 
           default:
             return false;
             break;

       }

   }
}