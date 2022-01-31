$bot_data = json_decode(file_get_contents('php://input'), true);
file_put_contents('file.txt', 'data: ' . print_r($bot_data, 1) . "\n", FILE_APPEND);

https://api.telegram.org/bot5282211499:AAFfiqv28Xg7s_xY8_jZiJ2-1yNUKUKHBMo/setwebhook?url=https://github.com/BukovskyiRoman/BukovskyiRoman.github.io/index.php
