<?php
define('CLOUD_FUNCTION_URL', 'http://asia-northeast1-code-crafts-1477836554331.cloudfunctions.net/ecellsendemail');

class Email {
    public static function sendEmail($to, $subject, $body) {
        
        $content = compact('to', 'subject', 'body');
        $url = CLOUD_FUNCTION_URL;
    
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode($content)
            )
        );
    
        $context = stream_context_create($options);
    
        $result = file_get_contents($url, false, $context);
        $result = json_decode($result, true);
    
        return $result['success'];
    }
}
