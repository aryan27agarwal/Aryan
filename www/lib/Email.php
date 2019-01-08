<?php
define('EMAIL_CLOUD_FUNCTION_URL', getenv('EMAIL_CLOUD_FUNCTION_URL'));

class Email {
    public static function sendEmail($to, $subject, $body) {
        
        $content = compact('to', 'subject', 'body');
    
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode($content)
            )
        );
    
        $context = stream_context_create($options);
    
        $result = file_get_contents(EMAIL_CLOUD_FUNCTION_URL, false, $context);
        $result = json_decode($result, true);
    
        return $result['success'];
    }
}
