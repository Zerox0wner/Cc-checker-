
application/x-httpd-php cmdsstart.php ( PHP script, UTF-8 Unicode text )

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('log_errors', TRUE);
ini_set('error_log', 'errors.log');


$users = file_get_contents('Database/free.txt');
$freeusers = explode("\n", $users);

$videoURLStart = "https://t.me/OWN_CHNL/10";


if (preg_match('/^(\/start|\.start|!start)/', $text)) {
    if (in_array($userId, $freeusers)) {
        $caption = "𝗪𝗲𝗹𝗰𝗼𝗺𝗲 <code>@$username</code> 𝘁𝗼 𝖹𝖾𝗋𝗈𝗑 𝖢𝖼 𝖢𝗁𝖾𝖼𝗄𝖾𝗋 ❤️
 
✅𝙔𝙤𝙪𝙧 𝙍𝙖𝙣𝙠 ->><code>$rank</code>

 𝘾𝙡𝙞𝙘𝙠 '/cmds' 𝙏𝙤 𝘾𝙝𝙚𝙘𝙠 𝙂𝙖𝙩𝙚𝙨.";
        sendVideox($chatId, $videoURLStart, $caption, $keyboard);
    } else {
        reply_tox($chatId,$message_id,$keyboard,"⚠️ 𝙔𝙤𝙪 𝙖𝙧𝙚 𝙣𝙤𝙩 𝙧𝙚𝙜𝙞𝙨𝙩𝙚𝙧𝙚𝙙, 
        
     Use This Command >> /register To Register Yourself..");
    }
}
//=========START END========//
if (preg_match('/^(\/cmds|\.cmds|!cmds)/', $text)) {

    $videoUrl = "https://t.me/OWN_CHNL/10"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                             ['text' => '𝙂𝘼𝙏𝙀𝙒𝘼𝙔𝙎', 'callback_data' => 'gates'],
                                 ['text' => '𝙏𝙊𝙊𝙇𝙎 ', 'callback_data' => 'herr'],
                                 ],
                                 [
                                 ['text' => '@Zeroxcreditshop', 'callback_data' => 'channel'],
                             ],
        ]
    ]);

    $caption = "Welcome To 𝖹𝖾𝗋𝗈𝗑 𝖢𝖼 𝖢𝗁𝖾𝖼𝗄𝖾𝗋 ❤️. Buy The Plan First.  /price 
  
𝘾𝙝𝙚𝙖𝙥 𝙋𝙧𝙞𝙘𝙚 𝙛𝙤𝙧 𝙖𝙡𝙡✅";
    file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}

// Price \\\

if (preg_match('/^(\/price|\.price|!price)/', $text))

{

    $videoUrl = "https://t.me/OWN_CHNL/10"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                      
                                 ['text' => '𝘾𝙊𝙉𝙏𝘼𝘾𝙏 𝙁𝙊𝙍 𝘽𝙐𝙔', 'url' => 'https://t.me/Zerox_owner'],   ], ]
    ]);

 $caption=" Pricing 𝖹𝖾𝗋𝗈𝗑 𝖢𝖼 𝖢𝗁𝖾𝖼𝗄𝖾𝗋 ❤️
━━━━━━━━━━━━━━━━━━
⑄ 𝙎𝙐𝘽𝙎𝘾𝙍𝙄𝙋𝙏𝙄𝙊𝙉 𝙈𝙀𝙉𝙐 ⑄
━━━━━━━━━━━━━━━━━━
× 1 𝘞𝘌𝘌𝘒  - 3$
× 2 𝘞𝘌𝘌𝘒𝘚 - 5$
× 3 𝘞𝘌𝘌𝘒𝘚 - 7$
━━━━━━━━━━━━━━━━━━
• <b>3</b> 𝘽𝙀𝙉𝙀𝙁𝙄𝙏𝙎 •
× 𝘈𝘓𝘓 𝘎𝘈𝘛𝘌𝘚 𝘈𝘊𝘊𝘌𝘚𝘚 ✅
× 𝘕𝘖 𝘈𝘕𝘛𝘐 𝘚𝘗𝘈𝘔 ✅
× 24/7 𝘊𝘜𝘚𝘛𝘖𝘔𝘌𝘙 𝘊𝘈𝘙𝘌 ✅

━━━━━━━━━━━━━━━━━━
 • 𝙋𝘼𝙔𝙈𝙀𝙉𝙏 𝙈𝙀𝙏𝙃𝙊𝘿 •
 🔸UPI - <code>Available✅</code>
 🔸USDT - <code>Available✅</code>
━━━━━━━━━━━━━━━━━━
⚠️ 𝘛𝘏𝘐𝘚 𝘛𝘖𝘗-𝘜𝘗 𝘈𝘙𝘌 𝘕𝘖𝘕 𝘙𝘌𝘍𝘜𝘕𝘋𝘈𝘉𝘓𝘌 ⚠️";

file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}