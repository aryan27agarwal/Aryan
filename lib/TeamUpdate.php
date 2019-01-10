<?php
// Telegram Bot
define('BOT_TOKEN', getenv('BOT_TOKEN'));
define('CHAT_ID', getenv('CHAT_ID'));

define('SEND_MESSAGE_URL', sprintf('https://api.telegram.org/bot%s/sendMessage', BOT_TOKEN));

class TeamUpdate {
    public static function sendUpdate($text) {
        // text supports basic markdown formatting
        $content = [
            'text' => $text,
            'chat_id' => CHAT_ID,
            'parse_mode' => 'Markdown'
        ];
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode($content)
            )
        );

        $context = stream_context_create($options);
    
        $result = file_get_contents(SEND_MESSAGE_URL, false, $context);
        $result = json_decode($result, true);
    
        return $result['ok'];
    }
}