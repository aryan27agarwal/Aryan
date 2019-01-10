<?php
define('AMBASSADORS_SUBJECT', "You've been successfuly registered!");
define('AMBASSADORS_MESSAGE', "Thank you %s for registering with GD Goenka University E-Cell.
We have successfully received your Campus Ambassador application. You would hear back from us post review of the application.
\nThe current status of your application is: SUBMITTED.\n \nYou are receiving this message because you signed up at E-Cell GD Goenka University.");

define('AMBASSADORS_TG_MESSAGE', "You have a new update.
*New Campus Ambassador Application:*
```json\n%s\n```");

class Ambassadors {
    private $data;
    public function __construct($name, $email, $phone, $gender, $city, $college, $why, $other) {
        $this->$data = compact('name', 'email', 'phone', 'gender', 'city', 'college', 'why', 'other');
    }
    public function email() {
        $message = sprintf(AMBASSADORS_MESSAGE, $this->$data['name']);
        return Email::sendEmail($this->$data['email'], AMBASSADORS_SUBJECT, $message);
    }
    public function store() {
        $sql = 'INSERT INTO ambassadors (name, email, phone, gender, city, why, college, anything) VALUES (:name, :email, :phone, :gender, :city, :why, :college, :other)';
        $db = new Database;
        $db->query($sql, $this->$data);
    }
    public function notify() {
        $part = json_encode($this->$data, JSON_PRETTY_PRINT);
        return TeamUpdate::sendUpdate(sprintf(AMBASSADORS_TG_MESSAGE, $part));
    }
}