<?php
$messages = array(
    'contact_us' => "Thank you %s for contacting us. We have received your query and are looking forward to contacting you back as soon as possible.\n \nYou are receiving this message because you tried to contact us through the E-Cell GD Goenka University website.",
    'enthusiasts' => "Thank you %s for registering as an Entrepreneurship Enthusiast.\n \nWe have successfully received your details. You would occasionally hear from us about entrepreneurship related updates.\n \nYou are receiving this message because you signed up for the same at E-Cell GD Goenka University.",
    'campus_ambassadors' => "Thank you %s for registering with GD Goenka University E-Cell.\n \nWe have successfully received your Campus Ambassador application. You would hear back from us post review of the application.\n \nThe current status of your application is: SUBMITTED.\n \nYou are receiving this message because you signed up at E-Cell GD Goenka University."
);
$subjects = array(
    'contact_us' => "Thanks for contacting!",
    'enthusiasts' => "You've been successfuly registered!",
    'campus_ambassadors' => "You've been successfuly registered!"
);

include('emailing.php');

function email_update($to, $name, $type) {
    global $messages, $subjects;
    // $type must be either 'contact_us' or 'enthusiasts' or 'campus_ambassadors'
    $message = sprintf($messages[$type], $name);
    return send_an_email($to, $subjects[$type], $message);
}
