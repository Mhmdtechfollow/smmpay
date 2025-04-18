<?php
$token = "7473935033:AAGh6LTNWrd4c8Z0xZVWiHhOaQ49JUNqiLM";
$chat_id = "5490997307";

// استلام البيانات من الفورم
$username = $_POST['username'] ?? 'غير محدد';
$amount = $_POST['amount'] ?? 'غير محدد';
$txid = $_POST['txid'] ?? 'غير محدد';

// الرسالة
$message = "طلب دفع جديد:\n";
$message .= "اسم المستخدم: $username\n";
$message .= "المبلغ: $amount USDT\n";
$message .= "Transaction ID: $txid";

// استخدام cURL لإرسال الرسالة لتليجرام
$url = "https://api.telegram.org/bot$token/sendMessage";

$data = [
  'chat_id' => $chat_id,
  'text' => $message
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);
curl_close($ch);

// رسالة للمستخدم
echo "تم إرسال الطلب.";
?>