<?php
function send_an_email($to, $subject, $body) {
    $content = compact('to', 'subject', 'body');
    $url = 'https://asia-northeast1-code-crafts-1477836554331.cloudfunctions.net/ecellsendemail';

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
