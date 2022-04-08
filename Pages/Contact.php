<?php

namespace Pages;

use Models\CategoriesModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Contact extends Page{
    protected $categoryModel;
    
    function __construct() {
        $this->categoryModel = new CategoriesModel;
        Parent::__construct();
    }

    public function index() {
  
        $this->data['categories'] = $this->categoryModel->getCategories();
        $this->load('views/frontend/contact/index.php');
    }

    public function send() {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        $status;

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = 'fed560db0742df';
            $mail->Password = '69c8c8436197d1';

            $mail->setFrom($email);
            $mail->addAddress('nikaberidze030506@gmail.com');
            $mail->addReplyTo($email);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = '<div>'.$message.'</div>';
        
            $mail->send();

            $status = 1;
        
        } catch(Exception $e) {
            $status = 0;
        }

        
        header('Location: ?page=contact&status='.$status);
    }
}