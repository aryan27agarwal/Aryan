<?php
define('ENTHUSIASTS_SUBJECT', "You've been successfuly registered!");
define('ENTHUSIASTS_MESSAGE', "Thank you %s for registering as an Entrepreneurship Enthusiast.
We have successfully received your details. You would occasionally hear from us about entrepreneurship related updates.
\nYou are receiving this message because you signed up for the same at E-Cell GD Goenka University website.");

class Enthusiasts {
    private $data;
    public function __construct($name, $email, $contact, $city, $college, $why, $other) {
        $this->$data = compact('name', 'email', 'contact', 'city', 'college', 'why', 'other');
    }
    public function email() {
        $message = sprintf(ENTHUSIASTS_MESSAGE, $data['name']);
        return Email::sendEmail($data['email'], ENTHUSIASTS_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO ambassadors (name, email, contact, city, why, college, anything) VALUES (:name, :email, :contact, :city, :why, :college, :other)';
        $db = new Database;
        $db->query($sql, $data);
    }
}