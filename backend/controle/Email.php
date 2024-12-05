<?php
class Email{
    private $to;
    private $subject;
    private $message;
    private $headers;

    function setTo($to){
        $this->to = $to;
    }

    function setSubject($subject){
        $this->subject = $subject;
    }

    function setMessage($message){
        $this->message = $message;
    }

    function setHeaders($headers){
        $this->headers = $headers;
    }

    function getTo(){
        return $this->to;
    }

    function getSubject(){
        return $this->subject;
    }

    function getMessage(){
        return $this->message;
    }

    function getHeaders(){
        return $this->headers;
    }

    function enviarEmail(){
        mail(getTo(), getSubject(), getMessage(), getHeaders());

        echo "<script>alert('Email enviado para " . getTo() . "')</script>";
    }
}
?>