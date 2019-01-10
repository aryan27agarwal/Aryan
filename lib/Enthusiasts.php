<?php
define('ENTHUSIASTS_SUBJECT', "You've been successfuly registered!");
define('ENTHUSIASTS_MESSAGE', "Thank you %s for registering as an Entrepreneurship Enthusiast.
We have successfully received your details. You would occasionally hear from us about entrepreneurship related updates. It is expected that you receive entrepreneurship related updates occasionally at this email address.
\nYou are receiving this message because you signed up for the same at E-Cell GD Goenka University website.");

define('ENTHUSIASTS_TG_MESSAGE', "You have a new update.
*New Entrepreneurship Enthusiast:*
```json\n%s\n```");

class Enthusiasts {
    private $data;
    public function __construct($name, $email, $phone, $city, $college, $why, $other) {
        $this->$data = compact('name', 'email', 'phone', 'city', 'college', 'why', 'other');
    }
    public function email() {
        $message = sprintf(ENTHUSIASTS_MESSAGE, $this->$data['name']);
        return Email::sendEmail($this->$data['email'], ENTHUSIASTS_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO enthusiasts (name, email, phone, city, why, college, anything) VALUES (:name, :email, :phone, :city, :why, :college, :other)';
        $db = new Database;
        $db->query($sql, $this->$data);
    }
    public function notify() {
        $part = json_encode($this->$data, JSON_PRETTY_PRINT);
        return TeamUpdate::sendUpdate(sprintf(ENTHUSIASTS_TG_MESSAGE, $part));
    }
}