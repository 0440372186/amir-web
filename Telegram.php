<?php

class Telegram {

    const CHAT_ID = 489424678;
    const TOKEN = '519353382:AAG-rItkZYmkvT89S1_mxHZ7jk_aCPL1-lY';

    public static function sendMessage($message)
    {
        $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage?chat_id=" . self::CHAT_ID;
        $url = $url . "&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}