<?php
ob_start();
$API_KEY = '1927472437:AAHqs52mORC62eL4tcGwovyNbyelAtAbOIk';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $rembo = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$rembo";
        $h4ck3riraq = file_get_contents($url);
        return json_decode($h4ck3riraq);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$admin = 1189284654; // ايديك
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$T4TTTT = 1189284654; //ايديك
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$SAIED0.'
'.$SAIED1,
]);return false;}
if($SAIED17 == "/admin" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>"مرحبآ بك ،  $name
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"SAIED"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"SAIED0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"SAIED"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"SAIED2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"SAIED"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"SAIED5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"SAIED"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"SAIED9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"SAIED"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"SAIED11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"SAIED"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"SAIED0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"SAIED"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"SAIED2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"SAIED"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"SAIED5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"SAIED"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"SAIED9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"SAIED"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"SAIED11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'SAIED'],
['text'=>'• نعم ، ✅','callback_data'=>'SAIED1'],
]    
]])
]);    
}
if($SAIED19 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'SAIED'],
['text'=>'• نعم ، ✅','callback_data'=>'SAIED3'],
]    
]])
]);    
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $SAIED0 📢 
- القناة الثانية ،  $SAIED1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $SAIED3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $SAIED3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"- عدد مشتركين البوت  [ $SAIED3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$SAIED15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$SAIED16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$SAIED11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $SAIED3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}

 
if ($text == '/start') {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 👋┇ أهلاً وسهلاً بك يا ؛ $name

 🦄¦ في بوت آلمزخرف آلآحترافي ؛ 
⚜¦ يمكنك زخرفهہ اسمك بـ 30 نوع ؛
Ⓜ️¦ فقط آرسل آسمك باللغهہ العربيهہ او آلآنگليزيهہ ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📡¦ [اضغط هنا وتابع جديدنا 🌐؛](https://t.me/jeccc)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>'• اضغط هنا وتابع جديدنا ؛','url'=>"https://t.me/jeccc"]],
]])
]);}

if($text !="/start"  ){
 $ZH = file_get_contents("https://mostafa-shehab.000webhostapp.com/MSZk/?ZK=".urlencode($text));
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"MarkDown", 
 'text'=>"$ZH",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"",'url'=>'https://t.me/jeccc'], 
]
], 
]) 
]);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$get = json_decode(file_get_contents("https://api-bots.000webhostapp.com/api/ZH.php?text=$text"));
$z = $get->result->z;
$z1 = $get->result->z1;
$z2 = $get->result->z2;
$z3 = $get->result->z3;
$z4 = $get->result->z4;
$z5 = $get->result->z5;
$z6 = $get->result->z6;
$z7 = $get->result->z7;
$z8 = $get->result->z8;
$z9 = $get->result->z9;
$z10 = $get->result->z10;
$z11 = $get->result->z11;
$z12 = $get->result->z12;
$z13 = $get->result->z13;
$z14 = $get->result->z14;
$z15 = $get->result->z15;
$z16 = $get->result->z16;
$z17 = $get->result->z17;
$z18 = $get->result->z18;

if($text and $text !="/start"){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$z
$z1
$z2
$z3
$z4
$z5
$z6
$z7
$z8
$z9
$z10
$z11
$z12
$z13
$z14
$z15
$z16
$z17
$z18",
parse_mode => MARKDOWN ,
 disable_web_page_preview => 'true' ,
]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text;
$JJ119 = str_replace('a','🅐',$JJ119); 
$JJ119 = str_replace("b","🅑",$JJ119); 
$JJ119 = str_replace("c","🅒",$JJ119); 
$JJ119 = str_replace("d","🅓",$JJ119); 
$JJ119 = str_replace("e","🅔",$JJ119); 
$JJ119 = str_replace("f","🅕",$JJ119); 
$JJ119 = str_replace("g","🅖",$JJ119); 
$JJ119 = str_replace("h","🅗",$JJ119); 
$JJ119 = str_replace("i","🅘",$JJ119); 
$JJ119 = str_replace("j","🅙",$JJ119); 
$JJ119 = str_replace("k","🅚",$JJ119); 
$JJ119 = str_replace("l","🅛",$JJ119); 
$JJ119 = str_replace("m","🅜",$JJ119); 
$JJ119 = str_replace("n","🅝",$JJ119); 
$JJ119 = str_replace("o","🅞",$JJ119); 
$JJ119 = str_replace("p","🅟",$JJ119); 
$JJ119 = str_replace("q","🅠",$JJ119); 
$JJ119 = str_replace("r","🅡",$JJ119); 
$JJ119 = str_replace("s","🅢",$JJ119); 
$JJ119 = str_replace("t","🅣",$JJ119); 
$JJ119 = str_replace("u"," 🅤",$JJ119); 
$JJ119 = str_replace("v","🅥",$JJ119); 
$JJ119 = str_replace("w","🅦",$JJ119); 
$JJ119 = str_replace("x","🅧",$JJ119); 
$JJ119 = str_replace("y","🅨",$JJ119); 
$JJ119 = str_replace("z","🅩",$JJ119); 
 
$JJ119 = str_replace('ض','ضً',$JJ119); 
$JJ119 = str_replace('ص','صً',$JJ119); 
$JJ119 = str_replace('ث','ثہ',$JJ119); 
$JJ119 = str_replace('ق','قہً',$JJ119); 
$JJ119 = str_replace('ف','فُہ',$JJ119); 
$JJ119 = str_replace('غ','غہ',$JJ119); 
$JJ119 = str_replace('ع','عہُ',$JJ119); 
$JJ119 = str_replace('ه','ه',$JJ119); 
$JJ119 = str_replace('خ','خہ',$JJ119); 
$JJ119 = str_replace('ح','حہ',$JJ119); 
$JJ119 = str_replace('ج','جہ',$JJ119); 
$JJ119 = str_replace('ش','شہ',$JJ119); 
$JJ119 = str_replace('س','سہ',$JJ119); 
$JJ119 = str_replace('ي','يہ',$JJ119); 
$JJ119 = str_replace('ب',' ٻً',$JJ119);
$JJ119 = str_replace('ل','لہ',$JJ119); 
$JJ119 = str_replace('ا',' ٳ',$JJ119); 
$JJ119 = str_replace('ت','تہ',$JJ119); 
$JJ119 = str_replace('ن','نٍ',$JJ119); 
$JJ119 = str_replace('ك','كُہ',$JJ119); 
$JJ119 = str_replace('م','مْ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظً',$JJ119); 
$JJ119 = str_replace('ط','طہ',$JJ119); 
 $JJ119 = str_replace('ذ','ذً',$JJ119); 
$JJ119 = str_replace('د','دِ',$JJ119); 
$JJ119 = str_replace('ز','زً',$JJ119); 
$JJ119 = str_replace('ر','ڒٍ',$JJ119); 
$JJ119 = str_replace('و','وٌ',$JJ119); 
 $JJ119 = str_replace('ى','ىّ',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text;
$JJ119 = str_replace('a','𝗔',$JJ119); 
$JJ119 = str_replace("b","𝗕",$JJ119); 
$JJ119 = str_replace("c","𝗖",$JJ119); 
$JJ119 = str_replace("d","𝗗",$JJ119); 
$JJ119 = str_replace("e","𝗘",$JJ119); 
$JJ119 = str_replace("f","𝗙",$JJ119); 
$JJ119 = str_replace("g","𝗚",$JJ119); 
$JJ119 = str_replace("h","𝗛",$JJ119); 
$JJ119 = str_replace("i","𝗜",$JJ119); 
$JJ119 = str_replace("j","𝗝",$JJ119); 
$JJ119 = str_replace("k","𝗞",$JJ119); 
$JJ119 = str_replace("l","𝗟",$JJ119); 
$JJ119 = str_replace("m","𝗠",$JJ119); 
$JJ119 = str_replace("n","𝗡",$JJ119); 
$JJ119 = str_replace("o","𝗢",$JJ119); 
$JJ119 = str_replace("p","𝗣",$JJ119); 
$JJ119 = str_replace("q","𝗤",$JJ119); 
$JJ119 = str_replace("r","𝗥",$JJ119); 
$JJ119 = str_replace("s","𝗦",$JJ119); 
$JJ119 = str_replace("t","𝗧",$JJ119); 
$JJ119 = str_replace("u","𝗨",$JJ119); 
$JJ119 = str_replace("v","𝗩",$JJ119); 
$JJ119 = str_replace("w","𝗪",$JJ119); 
$JJ119 = str_replace("x","𝗫",$JJ119); 
$JJ119 = str_replace("y","𝗬",$JJ119); 
$JJ119 = str_replace("z","𝗭",$JJ119); 
      
$JJ119 = str_replace('ض','ضـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ص','صـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ث','ثـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ق','قـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ف','فـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('غ','غـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ع','عـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ه','هـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('خ','خـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ح','حـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ج','جـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ش','شـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('س','سـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ي','يـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ب','بـٰ̲ـہ',$JJ119);
$JJ119 = str_replace('ل','لـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ا','اٰ',$JJ119); 
$JJ119 = str_replace('ت','تـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ن','نـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('م','مـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ك','كـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ط','طـٰ̲ـہ',$JJ119); 
$JJ119 = str_replace('ذ','ذٰ',$JJ119); 
$JJ119 = str_replace('د','دٰ',$JJ119); 
$JJ119 = str_replace('ز','زٰ',$JJ119); 
$JJ119 = str_replace('ر','رٰ',$JJ119); 
$JJ119 = str_replace('و','وٰ',$JJ119); 
$JJ119 = str_replace('ى','ىَ',$JJ119); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
}
 
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$JJ119 = str_replace('a','🅰',$text); 
$JJ119 = str_replace('b','🅱',$JJ119); 
$JJ119 = str_replace('c','🅲',$JJ119); 
$JJ119 = str_replace('d','🅳',$JJ119); 
$JJ119 = str_replace('e','🅴',$JJ119); 
$JJ119 = str_replace('f','🅵',$JJ119); 
$JJ119 = str_replace('g','🅶',$JJ119); 
$JJ119 = str_replace('h','🅷',$JJ119); 
$JJ119 = str_replace('i','🅸',$JJ119); 
$JJ119 = str_replace('j','🅹',$JJ119); 
$JJ119 = str_replace('k','🅺',$JJ119); 
$JJ119 = str_replace('l','🅻',$JJ119); 
$JJ119 = str_replace('m','🅼',$JJ119); 
$JJ119 = str_replace('n','🅽',$JJ119); 
$JJ119 = str_replace('o','🅾',$JJ119); 
$JJ119 = str_replace('p','🅿',$JJ119); 
$JJ119 = str_replace('q','🆀',$JJ119); 
$JJ119 = str_replace('r','🆁',$JJ119); 
$JJ119 = str_replace('s','🆂',$JJ119); 
$JJ119 = str_replace('t','🆃',$JJ119); 
$JJ119 = str_replace('u',' 🆄',$JJ119); 
$JJ119 = str_replace('v','🆅',$JJ119); 
$JJ119 = str_replace('w','🆆',$JJ119); 
$JJ119 = str_replace('x','🆇',$JJ119); 
$JJ119 = str_replace('y','🆈',$JJ119); 
$JJ119 = str_replace('z','🆉',$JJ119); 
 
$JJ119 = str_replace('ض','ضـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ص','صـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ث','ثـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ق','قـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('غ','غـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ع','عـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ه','ۿۿہ',$JJ119); 
$JJ119 = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ح','حـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ج','جـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('ش','شـ๋͜‏ـﮧ ',$JJ119); 
$JJ119 = str_replace('س','سـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ي',' يـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ب','  بـ๋͜‏ـﮧ',$JJ119);
$JJ119 = str_replace('ل',' لـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ا','آ',$JJ119); 
$JJ119 = str_replace('ت','  تـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ن','نـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('م','مـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ك','ڪـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظـ๋͜‏ـﮧ',$JJ119); 
$JJ119 = str_replace('ط','طـ๋͜‏ـﮧ',$JJ119); 
 $JJ119 = str_replace('ذ','ذِ',$JJ119); 
$JJ119 = str_replace('د','دٰ',$JJ119); 
$JJ119 = str_replace('ز','زً',$JJ119); 
$JJ119 = str_replace('ر','ر',$JJ119); 
$JJ119 = str_replace('و','ﯛ̲୭',$JJ119); 
 $JJ119 = str_replace('ى','ىٰ',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$JJ119 = str_replace('a','̶a̶',$text); 
$JJ119 = str_replace('b','b̶',$JJ119); 
$JJ119 = str_replace('c','c̶',$JJ119); 
$JJ119 = str_replace('d','d̶',$JJ119); 
$JJ119 = str_replace('e','e̶',$JJ119); 
$JJ119 = str_replace('f','f̶',$JJ119); 
$JJ119 = str_replace('g','g̶',$JJ119); 
$JJ119 = str_replace('h','h̶',$JJ119); 
$JJ119 = str_replace('i','i̶',$JJ119); 
$JJ119 = str_replace('j','j̶',$JJ119); 
$JJ119 = str_replace('k','k̶',$JJ119); 
$JJ119 = str_replace('l','l̶',$JJ119); 
$JJ119 = str_replace('m','m̶',$JJ119); 
$JJ119 = str_replace('n','n̶',$JJ119); 
$JJ119 = str_replace('o','o̶',$JJ119); 
$JJ119 = str_replace('p','p̶',$JJ119); 
$JJ119 = str_replace('q','q̶',$JJ119); 
$JJ119 = str_replace('r','r̶',$JJ119); 
$JJ119 = str_replace('s','s̶',$JJ119); 
$JJ119 = str_replace('t','t̶',$JJ119); 
$JJ119 = str_replace('u','ᵘ̶ ',$JJ119); 
$JJ119 = str_replace('v','v̶',$JJ119); 
$JJ119 = str_replace('w','w̶',$JJ119); 
$JJ119 = str_replace('x','x̶',$JJ119); 
$JJ119 = str_replace('y','y̶',$JJ119); 
$JJ119 = str_replace('z','z̶',$JJ119); 

 $JJ119 = str_replace('ض','ضۜہٰٰ',$JJ119); 
$JJ119 = str_replace('ص','صۛہٰٰ',$JJ119); 
$JJ119 = str_replace('ث','ثہٰٰ',$JJ119); 
$JJ119 = str_replace('ق','قྀ̲ہٰٰٰ',$JJ119); 
$JJ119 = str_replace('ف','ف͒ہٰٰ',$JJ119); 
$JJ119 = str_replace('غ','غہٰٰ',$JJ119); 
$JJ119 = str_replace('ع','ۤ؏ـ',$JJ119); 
$JJ119 = str_replace('ه','ھہ',$JJ119); 
$JJ119 = str_replace('خ','خٰ̐ہ',$JJ119); 
$JJ119 = str_replace('ح','حہٰٰ',$JJ119); 
$JJ119 = str_replace('ج','جْۧ ',$JJ119); 
$JJ119 = str_replace('ش','شِٰہٰٰ',$JJ119); 
$JJ119 = str_replace('س','سٰٰٓ',$JJ119); 
$JJ119 = str_replace('ي','يِٰہ',$JJ119); 
$JJ119 = str_replace('ب','بّہ',$JJ119);
$JJ119 = str_replace('ل','ل',$JJ119); 
$JJ119 = str_replace('ا','آ',$JJ119); 
$JJ119 = str_replace('ت',' تَہَٰ',$JJ119); 
$JJ119 = str_replace('ن','نَِٰہ',$JJ119); 
$JJ119 = str_replace('ك','ڪٰྀہٰٰٖ',$JJ119); 
$JJ119 = str_replace('م','مـ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظۗـہٰٰ',$JJ119); 
$JJ119 = str_replace('ط','طۨہٰٰ',$JJ119); 
 $JJ119 = str_replace('ذ','ذِ',$JJ119); 
$JJ119 = str_replace('د','دُ',$JJ119); 
$JJ119 = str_replace('ز','ژ',$JJ119); 
$JJ119 = str_replace('ر','رٰ',$JJ119); 
$JJ119 = str_replace('و','وً',$JJ119); 
 $JJ119 = str_replace('ى','ى',$JJ119);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $JJ119 = $text; 
$JJ119 = str_replace('a','⧼α⧽',$JJ119); 
$JJ119 = str_replace('b','⧼в⧽',$JJ119); 
$JJ119 = str_replace('c','⧼c⧽',$JJ119); 
$JJ119 = str_replace('d','⧼ɒ⧽',$JJ119); 
$JJ119 = str_replace('e','⧼є⧽',$JJ119); 
$JJ119 = str_replace('f','⧼f⧽',$JJ119); 
$JJ119 = str_replace('g','⧼ɢ⧽',$JJ119); 
$JJ119 = str_replace('h','⧼н⧽',$JJ119); 
$JJ119 = str_replace('i','⧼ɪ⧽',$JJ119); 
$JJ119 = str_replace('j','⧼ᴊ⧽',$JJ119); 
$JJ119 = str_replace('k','⧼ĸ⧽',$JJ119); 
$JJ119 = str_replace('l','⧼ℓ⧽',$JJ119); 
$JJ119 = str_replace('m','⧼м⧽',$JJ119); 
$JJ119 = str_replace('n','⧼и⧽',$JJ119); 
$JJ119 = str_replace('o','⧼σ⧽',$JJ119); 
$JJ119 = str_replace('p','⧼ρ⧽',$JJ119); 
$JJ119 = str_replace('q','⧼q⧽',$JJ119); 
$JJ119 = str_replace('r','⧼я⧽',$JJ119); 
$JJ119 = str_replace('s','⧼s⧽',$JJ119); 
$JJ119 = str_replace('t','⧼τ⧽',$JJ119); 
$JJ119 = str_replace('u','⧼υ⧽',$JJ119); 
$JJ119 = str_replace('v','⧼v⧽',$JJ119); 
$JJ119 = str_replace('w','⧼ω⧽',$JJ119); 
$JJ119 = str_replace('x','⧼x⧽',$JJ119); 
$JJ119 = str_replace('y','⧼y⧽',$JJ119); 
$JJ119 = str_replace('z','⧼z⧽',$JJ119); 

$JJ119 = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$JJ119); 
$JJ119 = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$JJ119); 
$JJ119 = str_replace('ث','ث̲ꫭـﮧ',$JJ119); 
$JJ119 = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$JJ119); 
$JJ119 = str_replace('ف','',$JJ119); 
$JJ119 = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$JJ119); 
$JJ119 = str_replace('ع','غـّٰ̐ہٰٰ',$JJ119); 
$JJ119 = str_replace('ه','ٰ̲ھہ',$JJ119); 
$JJ119 = str_replace('خ','خ̲ﮧ',$JJ119); 
$JJ119 = str_replace('ح','ح̲ꪳـﮧ',$JJ119); 
$JJ119 = str_replace('ج','ج̲ꪸـﮧ',$JJ119); 
$JJ119 = str_replace('ش','ش̲ꪾـﮧ',$JJ119); 
$JJ119 = str_replace('س','سـ̷ٰٰﮧْ',$JJ119); 
$JJ119 = str_replace('ي','يـِٰ̲ﮧ',$JJ119); 
$JJ119 = str_replace('ب','ب̲ꪰـﮧ',$JJ119);
$JJ119 = str_replace('ل','لٍُـّٰ̐ہ',$JJ119); 
$JJ119 = str_replace('ا',' ཻا ',$JJ119); 
$JJ119 = str_replace('ت','تـٰۧﮧ',$JJ119); 
$JJ119 = str_replace('ن','نٰ̲̐ـﮧْ',$JJ119); 
$JJ119 = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$JJ119); 
$JJ119 = str_replace('ك','كـِّﮧْٰٖ',$JJ119); 
$JJ119 = str_replace('ة','ةً',$JJ119); 
$JJ119 = str_replace('ء','ء',$JJ119); 
$JJ119 = str_replace('ظ','ظَـ๋͜ﮧْ',$JJ119); 
$JJ119 = str_replace('ط','ط̲꫁ـﮧ',$JJ119); 
 $JJ119 = str_replace('ذ','ذٖ',$JJ119); 
$JJ119 = str_replace('د','دُ',$JJ119); 
$JJ119 = str_replace('ز','ژٰ',$JJ119); 
$JJ119 = str_replace('ر','',$JJ119); 
$JJ119 = str_replace('و','ﯛ૭',$JJ119); 
 $JJ119 = str_replace('ى','ىِ',$JJ119); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$JJ119."".$smile
   ]);
   }
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$TlllllT = str_replace('ض', 'ضِـٰٚـِْ✮ِـٰٚـِْ', $text);
   $TlllllT = str_replace('ص', 'صِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِ͒ـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِ̐ـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('س', 'سِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('م', 'مِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ذ', 'ذِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('a',"ᵃ",$TlllllT);
$TlllllT = str_replace("b","ᵇ",$TlllllT);
$TlllllT = str_replace("c","ᶜ",$TlllllT);
$TlllllT = str_replace("d","ᵈ",$TlllllT);
$TlllllT = str_replace("e","ᵉ",$TlllllT);
$TlllllT = str_replace("f","ᶠ",$TlllllT);
$TlllllT = str_replace("g","ᵍ",$TlllllT);
$TlllllT = str_replace("h","ʰ",$TlllllT);
$TlllllT = str_replace("i","ᶤ",$TlllllT);
$TlllllT = str_replace("j","ʲ",$TlllllT);
$TlllllT = str_replace("k","ᵏ",$TlllllT);
$TlllllT = str_replace("l","ˡ",$TlllllT);
$TlllllT = str_replace("m","ᵐ",$TlllllT);
$TlllllT = str_replace("n","ᶰ",$TlllllT);
$TlllllT = str_replace("o","ᵒ",$TlllllT);
$TlllllT = str_replace("p","ᵖ",$TlllllT);
$TlllllT = str_replace("q","ᵠ",$TlllllT);
$TlllllT = str_replace("r","ʳ",$TlllllT);
$TlllllT = str_replace("s","ˢ",$TlllllT);
$TlllllT = str_replace("t","ᵗ",$TlllllT);
$TlllllT = str_replace("u","ᵘ",$TlllllT);
$TlllllT = str_replace("v","ᵛ",$TlllllT);
$TlllllT = str_replace("w","ʷ",$TlllllT);
$TlllllT = str_replace("x","ˣ",$TlllllT);
$TlllllT = str_replace("y","ʸ",$TlllllT);
$TlllllT = str_replace("z","ᶻ",$TlllllT);

   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$TlllllT = $text;
   $TlllllT = str_replace('ض', 'ض͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ص', 'ص͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ق', 'ق͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ع', 'ع͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ح', 'ح͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ج', 'ج͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ش', 'ش͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('س', 'س͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ي', 'ي͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ب', 'ب͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ل', 'ل͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'ت͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ن', 'ن͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('م', 'م͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ط', 'ط͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظ͜ــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظــ๋͜ـ', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Θ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'ẁ' , $TlllllT);
	 $TlllllT = str_replace('e', 'ë' , $TlllllT);
  	 $TlllllT = str_replace('r', 'я' , $TlllllT);
	 $TlllllT = str_replace('t', 'ť' , $TlllllT);
  	 $TlllllT = str_replace('y', 'y' , $TlllllT);
	 $TlllllT = str_replace('u', 'ע' , $TlllllT);
  	 $TlllllT = str_replace('i', 'į' , $TlllllT);
	 $TlllllT = str_replace('o', 'ð' , $TlllllT);
  	 $TlllllT = str_replace('p', 'ρ' , $TlllllT);
	 $TlllllT = str_replace('a', 'à' , $TlllllT);
  	 $TlllllT = str_replace('s', 'ś' , $TlllllT);
	 $TlllllT = str_replace('d', 'ď' , $TlllllT);
  	 $TlllllT = str_replace('f', '∫' , $TlllllT);
	 $TlllllT = str_replace('g', 'ĝ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'ŋ' , $TlllllT);
	 $TlllllT = str_replace('j', 'Ј' , $TlllllT);
  	 $TlllllT = str_replace('k', 'қ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ŀ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'ź' , $TlllllT);
	 $TlllllT = str_replace('x', 'א' , $TlllllT);
  	 $TlllllT = str_replace('c', 'ć' , $TlllllT);
	 $TlllllT = str_replace('v', 'V' , $TlllllT);
  	 $TlllllT = str_replace('b', 'Ђ' , $TlllllT);
  	 $TlllllT = str_replace('n', 'ŋ' , $TlllllT);
	 $TlllllT = str_replace('m', 'm' , $TlllllT);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضِـೋـ', $TlllllT);
   $TlllllT = str_replace('ص', 'صِـೋـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِـೋـ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِـೋـ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِ͒ـೋـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِـೋـ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِـೋـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِ̐ـೋـ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِـೋـ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِـೋـ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِـೋـ', $TlllllT);
   $TlllllT = str_replace('س', 'سِـೋـ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِـೋـ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِـೋـ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِـೋـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِـೋـ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِـೋـ', $TlllllT);
   $TlllllT = str_replace('م', 'مِـೋـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِـೋـ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِـೋـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِـೋـ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ҩ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'Щ' , $TlllllT);
	 $TlllllT = str_replace('e', 'Є' , $TlllllT);
  	 $TlllllT = str_replace('r', 'R' , $TlllllT);
	 $TlllllT = str_replace('t', 'ƚ' , $TlllllT);
  	 $TlllllT = str_replace('y', '￥' , $TlllllT);
	 $TlllllT = str_replace('u', 'Ц' , $TlllllT);
  	 $TlllllT = str_replace('i', 'Ī' , $TlllllT);
	 $TlllllT = str_replace('o', 'Ø' , $TlllllT);
  	 $TlllllT = str_replace('p', 'P' , $TlllllT);
	 $TlllllT = str_replace('a', 'Â' , $TlllllT);
  	 $TlllllT = str_replace('s', '$' , $TlllllT);
	 $TlllllT = str_replace('d', 'Ð' , $TlllllT);
  	 $TlllllT = str_replace('f', 'Ŧ' , $TlllllT);
	 $TlllllT = str_replace('g', 'Ǥ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'Ħ' , $TlllllT);
	 $TlllllT = str_replace('j', 'ʖ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'Қ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ŀ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'Ẕ' , $TlllllT);
	 $TlllllT = str_replace('x', 'X' , $TlllllT);
  	 $TlllllT = str_replace('c', 'Ĉ' , $TlllllT);
	 $TlllllT = str_replace('v', 'V' , $TlllllT);
  	 $TlllllT = str_replace('b', 'ß' , $TlllllT);
  	 $TlllllT = str_replace('n', 'И' , $TlllllT);
	 $TlllllT = str_replace('m', 'ⴅ' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضـ๋͜‏ـ', $text);
   $TlllllT = str_replace('ص', 'صـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ق', 'قـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒ـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ع', 'عـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐ـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ح', 'حـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ج', 'جـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ش', 'شـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('س', 'سـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ي', 'يـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ب', 'بـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ل', 'لـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ن', 'نـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('م', 'مـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ط', 'طـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظـ๋͜‏ـ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT= str_replace('q', '•🇶', $TlllllT);
   $TlllllT= str_replace('w', '•🇼', $TlllllT);
   $TlllllT= str_replace('e', '•🇪', $TlllllT);
   $TlllllT= str_replace('r', '•🇷', $TlllllT);
   $TlllllT= str_replace('t', '•🇹', $TlllllT);
   $TlllllT= str_replace('y', '•🇾', $TlllllT);
   $TlllllT= str_replace('u', '•🇻', $TlllllT);
   $TlllllT= str_replace('i', '•🇮', $TlllllT);
   $TlllllT= str_replace('o', '•🇴', $TlllllT);
   $TlllllT= str_replace('p', '•🇵', $TlllllT);
   $TlllllT= str_replace('a', '•🇦', $TlllllT);
   $TlllllT= str_replace('s', '•🇸', $TlllllT);
   $TlllllT= str_replace('d', '•🇩', $TlllllT);
   $TlllllT= str_replace('f', '•🇫', $TlllllT);
   $TlllllT= str_replace('g', '•🇬', $TlllllT);
   $TlllllT= str_replace('h', '•🇭', $TlllllT);
   $TlllllT= str_replace('j', '•🇯', $TlllllT);
   $TlllllT= str_replace('k', '•🇰', $TlllllT);
   $TlllllT= str_replace('l', '•🇱', $TlllllT);
   $TlllllT= str_replace('z', '•🇿', $TlllllT);
   $TlllllT= str_replace('x', '•🇽', $TlllllT);
   $TlllllT= str_replace('c', '•🇨', $TlllllT);
   $TlllllT= str_replace('v', '•🇺', $TlllllT);
   $TlllllT= str_replace('b', '•🇧', $TlllllT);
   $TlllllT= str_replace('n', '•🇳', $TlllllT);
   $TlllllT= str_replace('m', '•🇲', $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ص', 'صِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِٰ͒ـِۢ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِٰ̐ـِۢ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('س', 'سِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('م', 'مِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِٰـِۢ', $TlllllT);
   $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "ۿۿہ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ⴓ' , $TlllllT);
     $TlllllT = str_replace('w', 'ᗯ' , $TlllllT);
	 $TlllllT = str_replace('e', 'ᕮ' , $TlllllT);
     $TlllllT = str_replace('r', 'ᖇ' , $TlllllT);
	 $TlllllT = str_replace('t', 'ͳ' , $TlllllT);
 	$TlllllT = str_replace('y', 'ϒ' , $TlllllT);
	 $TlllllT = str_replace('u', 'ᘮ' , $TlllllT);
	 $TlllllT = str_replace('i', 'ᓰ' , $TlllllT);
	 $TlllllT = str_replace('o', '〇' , $TlllllT);
	 $TlllllT = str_replace('p', 'ᖘ' , $TlllllT);
	 $TlllllT = str_replace('a', 'ᗩ' , $TlllllT);
	 $TlllllT = str_replace('s', 'ᔕ' , $TlllllT);
	 $TlllllT = str_replace('d', 'ᗪ' , $TlllllT);
	 $TlllllT = str_replace('f', 'Բ' , $TlllllT);
	 $TlllllT = str_replace('g', 'ᘐ' , $TlllllT);
	 $TlllllT = str_replace('h', 'ᕼ' , $TlllllT);
	 $TlllllT = str_replace('j', 'ᒎ' , $TlllllT);
	 $TlllllT = str_replace('k', 'Ḱ' , $TlllllT);
	 $TlllllT = str_replace('l', 'ᒪ' , $TlllllT);
	 $TlllllT = str_replace('z', 'Ꙁ' , $TlllllT);
	 $TlllllT = str_replace('x', 'Ꮖ' , $TlllllT);
	 $TlllllT = str_replace('c', 'ᑕ' , $TlllllT);
	 $TlllllT = str_replace('v', 'ᐯ' , $TlllllT);
	 $TlllllT = str_replace('b', 'ᙖ' , $TlllllT);
	 $TlllllT = str_replace('n', 'ᘉ' , $TlllllT);
	 $TlllllT = str_replace('m', 'ᙢ' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "໋۠هہؚ", $TlllllT);
   
   $TlllllT = str_replace('q', 'q' , $TlllllT);
  	 $TlllllT = str_replace('w', 'ω' , $TlllllT);
	 $TlllllT = str_replace('e', 'ε' , $TlllllT);
  	 $TlllllT = str_replace('r', 'я' , $TlllllT);
	 $TlllllT = str_replace('t', 'т' , $TlllllT);
  	 $TlllllT = str_replace('y', 'ү' , $TlllllT);
	 $TlllllT = str_replace('u', 'υ' , $TlllllT);
  	 $TlllllT = str_replace('i', 'ι' , $TlllllT);
	 $TlllllT = str_replace('o', 'σ' , $TlllllT);
  	 $TlllllT = str_replace('p', 'ρ' , $TlllllT);
	 $TlllllT = str_replace('a', 'α' , $TlllllT);
  	 $TlllllT = str_replace('s', 's' , $TlllllT);
	 $TlllllT = str_replace('d', '∂' , $TlllllT);
  	 $TlllllT = str_replace('f', 'ғ' , $TlllllT);
	 $TlllllT = str_replace('g', 'g' , $TlllllT);
  	 $TlllllT = str_replace('h', 'н' , $TlllllT);
	 $TlllllT = str_replace('j', 'נ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'к' , $TlllllT);
	 $TlllllT = str_replace('l', 'ℓ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'z' , $TlllllT);
	 $TlllllT = str_replace('x', 'x' , $TlllllT);
  	 $TlllllT = str_replace('c', 'c' , $TlllllT);
	 $TlllllT = str_replace('v', 'v' , $TlllllT);
  	 $TlllllT = str_replace('b', 'в' , $TlllllT);
  	 $TlllllT = str_replace('n', 'η' , $TlllllT);
	 $TlllllT = str_replace('m', 'м' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼??) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ص', 'صِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ق', 'قِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ف', 'فِٰ͒ـۛৣـ', $TlllllT);
   $TlllllT = str_replace('غ', 'غِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ع', 'عِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('خ', 'خِٰ̐ـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ح', 'حِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ج', 'جِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ش', 'شِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('س', 'سِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ي', 'يِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ب', 'بِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ل', 'لِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ن', 'نِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('م', 'مِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ط', 'طِٰـۛৣـ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظِٰـۛৣـ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "໋۠هہؚ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ｑ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'Ｗ' , $TlllllT);
	 $TlllllT = str_replace('e', 'Ｅ' , $TlllllT);
  	 $TlllllT = str_replace('r', 'Ｒ' , $TlllllT);
	 $TlllllT = str_replace('t', 'Ｔ' , $TlllllT);
  	 $TlllllT = str_replace('y', 'Ｙ' , $TlllllT);
	 $TlllllT = str_replace('u', 'Ｕ' , $TlllllT);
  	 $TlllllT = str_replace('i', 'Ｉ' , $TlllllT);
	 $TlllllT = str_replace('o', 'Ｏ' , $TlllllT);
  	 $TlllllT = str_replace('p', 'Ｐ' , $TlllllT);
	 $TlllllT = str_replace('a', 'Ａ' , $TlllllT);
  	 $TlllllT = str_replace('s', 'Ｓ' , $TlllllT);
	 $TlllllT = str_replace('d', 'Ｄ' , $TlllllT);
  	 $TlllllT = str_replace('f', 'Բ' , $TlllllT);
	 $TlllllT = str_replace('g', 'Ｇ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'Ｈ' , $TlllllT);
	 $TlllllT = str_replace('j', 'Ｊ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'Ｋ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ｌ' , $TlllllT);
  	 $TlllllT = str_replace('z', 'Ｚ' , $TlllllT);
	 $TlllllT = str_replace('x', 'Ｘ' , $TlllllT);
  	 $TlllllT = str_replace('c', 'С' , $TlllllT);
	 $TlllllT = str_replace('v', 'Ｖ' , $TlllllT);
  	 $TlllllT = str_replace('b', 'Ｂ' , $TlllllT);
  	 $TlllllT = str_replace('n', 'Ｎ' , $TlllllT);
	 $TlllllT = str_replace('m', 'Ⅿ' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $TlllllT = $text;
   $TlllllT = str_replace('ض', 'ضـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ص', 'صـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ث', 'ثـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ق', 'قـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ف', 'ف͒ـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('غ', 'غـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ع', 'عـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('خ', 'خ̐ـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ح', 'حـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ج', 'جـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ش', 'شـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('س', 'سـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ي', 'يـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ب', 'بـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ل', 'لـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ا', 'آ', $TlllllT);
   $TlllllT = str_replace('ت', 'تـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ن', 'نـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('م', 'م', $TlllllT);
   $TlllllT = str_replace('ك', 'ڪـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ط', 'طـۘ❈ـۘ', $TlllllT);
   $TlllllT = str_replace('ظ', 'ظـۘ❈ـۘ', $TlllllT);
  $TlllllT = str_replace('ء', 'ء', $TlllllT);
   $TlllllT = str_replace('ؤ', 'ؤ', $TlllllT);
   $TlllllT = str_replace('ر', 'ر', $TlllllT);
   $TlllllT = str_replace('ى', 'ى', $TlllllT);
   $TlllllT = str_replace('ز', 'ز', $TlllllT);
   $TlllllT = str_replace('و', 'ﯛ̲୭', $TlllllT);
   $TlllllT = str_replace("ه", "໋۠هہؚ", $TlllllT);
   
   $TlllllT = str_replace('q', 'Ҩ' , $TlllllT);
  	 $TlllllT = str_replace('w', 'Ɯ' , $TlllllT);
	 $TlllllT = str_replace('e', 'Ɛ' , $TlllllT);
  	 $TlllllT = str_replace('r', '尺' , $TlllllT);
	 $TlllllT = str_replace('t', 'Ť' , $TlllllT);
  	 $TlllllT = str_replace('y', 'Ϥ' , $TlllllT);
	 $TlllllT = str_replace('u', 'Ц' , $TlllllT);
  	 $TlllllT = str_replace('i', 'ɪ' , $TlllllT);
	 $TlllllT = str_replace('o', 'Ø' , $TlllllT);
  	 $TlllllT = str_replace('p', 'þ' , $TlllllT);
	 $TlllllT = str_replace('a', 'Λ' , $TlllllT);
  	 $TlllllT = str_replace('s', 'ら' , $TlllllT);
	 $TlllllT = str_replace('d', 'Ð' , $TlllllT);
  	 $TlllllT = str_replace('f', 'F' , $TlllllT);
	 $TlllllT = str_replace('g', 'Ɠ' , $TlllllT);
  	 $TlllllT = str_replace('h', 'н' , $TlllllT);
	 $TlllllT = str_replace('j', 'ﾌ' , $TlllllT);
  	 $TlllllT = str_replace('k', 'Қ' , $TlllllT);
	 $TlllllT = str_replace('l', 'Ł' , $TlllllT);
  	 $TlllllT = str_replace('z', 'Ẕ' , $TlllllT);
	 $TlllllT = str_replace('x', 'χ' , $TlllllT);
  	 $TlllllT = str_replace('c', 'ㄈ' , $TlllllT);
	 $TlllllT = str_replace('v', 'Ɣ' , $TlllllT);
  	 $TlllllT = str_replace('b', 'Ϧ' , $TlllllT);
  	 $TlllllT = str_replace('n', 'Л' , $TlllllT);
	 $TlllllT = str_replace('m', '௱' , $TlllllT);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$TlllllT." ".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = str_replace('ا','ٱ',$text); 
$iBadlz = str_replace('ب','ﺑ',$iBadlz); 
$iBadlz = str_replace('ت','ﺗ̲ ',$iBadlz); 
$iBadlz = str_replace('ث','ثّـ',$iBadlz); 
$iBadlz = str_replace('ج','جّـ',$iBadlz); 
$iBadlz = str_replace('ح','ﺣّ͠ـ',$iBadlz); 
$iBadlz = str_replace('خ','ﺣ͠ ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذّ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','زْ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̭͠ ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ͠ ',$iBadlz);  
$iBadlz = str_replace('ص','ڝـ',$iBadlz); 
$iBadlz = str_replace('ض','ڞـ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','ﻋ̝̚',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̣̐',$iBadlz); 
$iBadlz = str_replace('ف','ﻓ̲̣̐ ',$iBadlz); 
$iBadlz = str_replace('ق','ﻗ̮ـ̃',$iBadlz); 
$iBadlz = str_replace('ك','ڪْ',$iBadlz); 
$iBadlz = str_replace('ل','لْـ',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ﻧـ',$iBadlz);  
$iBadlz = str_replace('ه','ھَہّ',$iBadlz); 
$iBadlz = str_replace('و','ۅ',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('q', 'Ⴓ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Ш' , $iBadlz);
	 $iBadlz = str_replace('e', 'Σ' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Γ' , $iBadlz);
	 $iBadlz = str_replace('t', 'Ƭ' , $iBadlz);
  	 $iBadlz = str_replace('y', 'Ψ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ʊ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'I' , $iBadlz);
	 $iBadlz = str_replace('o', 'Θ' , $iBadlz);
  	 $iBadlz = str_replace('p', 'Ƥ' , $iBadlz);
	 $iBadlz = str_replace('a', 'Δ' , $iBadlz);
  	 $iBadlz = str_replace('s', 'Ѕ' , $iBadlz);
	 $iBadlz = str_replace('d', 'D' , $iBadlz);
  	 $iBadlz = str_replace('f', 'F' , $iBadlz);
	 $iBadlz = str_replace('g', 'G' , $iBadlz);
  	 $iBadlz = str_replace('h', 'H' , $iBadlz);
	 $iBadlz = str_replace('j', 'J' , $iBadlz);
  	 $iBadlz = str_replace('k', 'Ƙ' , $iBadlz);
	 $iBadlz = str_replace('l', 'L' , $iBadlz);
  	 $iBadlz = str_replace('z', 'Z' , $iBadlz);
	 $iBadlz = str_replace('x', 'Ж' , $iBadlz);
  	 $iBadlz = str_replace('c', 'C' , $iBadlz);
	 $iBadlz = str_replace('v', 'Ʋ' , $iBadlz);
  	 $iBadlz = str_replace('b', 'Ɓ' , $iBadlz);
  	 $iBadlz = str_replace('n', '∏' , $iBadlz);
	 $iBadlz = str_replace('m', 'Μ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀?? ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','ب',$iBadlz); 
$iBadlz = str_replace('ت','ت',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','جۚ ּ',$iBadlz);  
$iBadlz = str_replace('ح','حۡ',$iBadlz); 
$iBadlz = str_replace('خ','خۡ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','سۜ',$iBadlz); 
$iBadlz = str_replace('ش','ش',$iBadlz); 
$iBadlz = str_replace('ص','ص',$iBadlz); 
$iBadlz = str_replace('ض','ض',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظ',$iBadlz); 
$iBadlz = str_replace('ع','ع',$iBadlz); 
$iBadlz = str_replace('غ','غ',$iBadlz); 
$iBadlz = str_replace('ف','ف',$iBadlz); 
$iBadlz = str_replace('ق','ق',$iBadlz); 
$iBadlz = str_replace('ك','ك',$iBadlz); 
$iBadlz = str_replace('ل','ل',$iBadlz);
$iBadlz = str_replace('م','مۘ',$iBadlz); 
$iBadlz = str_replace('ن','نۨــہ',$iBadlz);  
$iBadlz = str_replace('ه','هۂَ',$iBadlz); 
$iBadlz = str_replace('ٰو','و',$iBadlz); 
$iBadlz = str_replace('ي','يۧ',$iBadlz);

$iBadlz = str_replace('q', 'Q' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Щ' , $iBadlz);
	 $iBadlz = str_replace('e', '乇' , $iBadlz);
  	 $iBadlz = str_replace('r', '尺' , $iBadlz);
	 $iBadlz = str_replace('t', 'ｲ' , $iBadlz);
  	 $iBadlz = str_replace('y', 'ﾘ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ц' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ﾉ' , $iBadlz);
	 $iBadlz = str_replace('o', 'Ծ' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ｱ' , $iBadlz);
	 $iBadlz = str_replace('a', 'ﾑ' , $iBadlz);
  	 $iBadlz = str_replace('s', '丂' , $iBadlz);
	 $iBadlz = str_replace('d', 'Ð' , $iBadlz);
  	 $iBadlz = str_replace('f', 'ｷ' , $iBadlz);
	 $iBadlz = str_replace('g', 'Ǥ' , $iBadlz);
  	 $iBadlz = str_replace('h', 'ん' , $iBadlz);
	 $iBadlz = str_replace('j', 'ﾌ' , $iBadlz);
  	 $iBadlz = str_replace('k', 'ズ' , $iBadlz);
	 $iBadlz = str_replace('l', 'ﾚ' , $iBadlz);
  	 $iBadlz = str_replace('z', '乙' , $iBadlz);
	 $iBadlz = str_replace('x', 'ﾒ' , $iBadlz);
  	 $iBadlz = str_replace('c', 'ζ' , $iBadlz);
	 $iBadlz = str_replace('v', 'Џ' , $iBadlz);
  	 $iBadlz = str_replace('b', '乃' , $iBadlz);
  	 $iBadlz = str_replace('n', '刀' , $iBadlz);
	 $iBadlz = str_replace('m', 'ᄊ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بّـ',$iBadlz); 
$iBadlz = str_replace('ت','ﭥ',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz);  
$iBadlz = str_replace('ح','פ',$iBadlz); 
$iBadlz = str_replace('خ','ڂ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ذ','ذ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','س',$iBadlz); 
$iBadlz = str_replace('ش','ش',$iBadlz); 
$iBadlz = str_replace('ص','ص',$iBadlz); 
$iBadlz = str_replace('ض','ضَّ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ظ',$iBadlz); 
$iBadlz = str_replace('ع','عّ',$iBadlz); 
$iBadlz = str_replace('غ','غَ ',$iBadlz); 
$iBadlz = str_replace('ف','ف̲ ',$iBadlz); 
$iBadlz = str_replace('ق','ق',$iBadlz); 
$iBadlz = str_replace('ك','ڪْ',$iBadlz); 
$iBadlz = str_replace('ل','ﻟ̣̣',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ن',$iBadlz);  
$iBadlz = str_replace('ه','ه',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('a', 'Á', $iBadlz);
$iBadlz = str_replace('b', 'ß', $iBadlz);
$iBadlz = str_replace('c', 'Č', $iBadlz);
$iBadlz = str_replace('d', 'Ď', $iBadlz);
$iBadlz = str_replace('e', 'Ĕ', $iBadlz);
$iBadlz = str_replace('f', 'Ŧ', $iBadlz);
$iBadlz = str_replace('g', 'Ğ', $iBadlz);
$iBadlz = str_replace('h', 'Ĥ', $iBadlz);
$iBadlz = str_replace('i', 'Ĩ', $iBadlz);
$iBadlz = str_replace('j', 'Ĵ', $iBadlz);
$iBadlz = str_replace('k', 'Ķ', $iBadlz);
$iBadlz = str_replace('l', 'Ĺ', $iBadlz);
$iBadlz = str_replace('m', 'M', $iBadlz);
$iBadlz = str_replace('n', 'Ń', $iBadlz);
$iBadlz = str_replace('o', 'Ő', $iBadlz);
$iBadlz = str_replace('p', 'P', $iBadlz);
$iBadlz = str_replace('q', 'Q', $iBadlz);
$iBadlz = str_replace('r', 'Ŕ', $iBadlz);
$iBadlz = str_replace('s', 'Ś', $iBadlz);
$iBadlz = str_replace('t', 'Ť', $iBadlz);
$iBadlz = str_replace('u', 'Ú', $iBadlz);
$iBadlz = str_replace('v', 'V', $iBadlz);
$iBadlz = str_replace('w', 'Ŵ', $iBadlz);
$iBadlz = str_replace('x', 'Ж', $iBadlz);
$iBadlz = str_replace('y', 'Ŷ', $iBadlz);
$iBadlz = str_replace('z', 'Ź', $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بِ',$iBadlz); 
$iBadlz = str_replace('ت','ت̲',$iBadlz);
$iBadlz = str_replace('ث','ثْ',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz);  
$iBadlz = str_replace('ح','ح',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','دّ',$iBadlz); 
$iBadlz = str_replace('ذ','ذّ',$iBadlz); 
$iBadlz = str_replace('ر','رّ',$iBadlz); 
$iBadlz = str_replace('ز','زَ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̲ ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ̲ ',$iBadlz); 
$iBadlz = str_replace('ص','صـ',$iBadlz); 
$iBadlz = str_replace('ض','ضَ',$iBadlz); 
$iBadlz = str_replace('ط','طً',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','ﻋ',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̣̐ ',$iBadlz); 
$iBadlz = str_replace('ف','قّـ',$iBadlz); 
$iBadlz = str_replace('ق','قّـ',$iBadlz); 
$iBadlz = str_replace('ك','ڪ',$iBadlz); 
$iBadlz = str_replace('ل','ڵـ',$iBadlz);
$iBadlz = str_replace('م','ـمـ',$iBadlz); 
$iBadlz = str_replace('ن','ﻧ̲ ـ',$iBadlz);  
$iBadlz = str_replace('ه','ﮬ̲̌ﮧ',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('q', 'ҩ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'ω' , $iBadlz);
	 $iBadlz = str_replace('e', '૯' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Ր' , $iBadlz);
	 $iBadlz = str_replace('t', '੮' , $iBadlz);
  	 $iBadlz = str_replace('y', 'ע' , $iBadlz);
	 $iBadlz = str_replace('u', 'υ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ɿ' , $iBadlz);
	 $iBadlz = str_replace('o', '૦' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ƿ' , $iBadlz);
	 $iBadlz = str_replace('a', 'ค' , $iBadlz);
  	 $iBadlz = str_replace('s', 'ς' , $iBadlz);
	 $iBadlz = str_replace('d', 'ძ' , $iBadlz);
  	 $iBadlz = str_replace('f', 'Բ' , $iBadlz);
	 $iBadlz = str_replace('g', '૭' , $iBadlz);
  	 $iBadlz = str_replace('h', 'Һ' , $iBadlz);
	 $iBadlz = str_replace('j', 'ʆ' , $iBadlz);
  	 $iBadlz = str_replace('k', 'қ' , $iBadlz);
	 $iBadlz = str_replace('l', 'Ն' , $iBadlz);
  	 $iBadlz = str_replace('z', 'ઽ' , $iBadlz);
	 $iBadlz = str_replace('x', '૪' , $iBadlz);
  	 $iBadlz = str_replace('c', '८' , $iBadlz);
	 $iBadlz = str_replace('v', '౮' , $iBadlz);
  	 $iBadlz = str_replace('b', 'ც' , $iBadlz);
  	 $iBadlz = str_replace('n', 'Ո' , $iBadlz);
	 $iBadlz = str_replace('m', 'ɱ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','بّـ',$iBadlz); 
$iBadlz = str_replace('ت','ت̲ ',$iBadlz);
$iBadlz = str_replace('ث','ثّـ',$iBadlz); 
$iBadlz = str_replace('ج','ﺟ',$iBadlz);  
$iBadlz = str_replace('ح','ﺣّ͠ـ',$iBadlz); 
$iBadlz = str_replace('خ','ﺣ͠ ',$iBadlz); 
$iBadlz = str_replace('د','دّ',$iBadlz); 
$iBadlz = str_replace('ذ','دّ',$iBadlz); 
$iBadlz = str_replace('ر','ڔ',$iBadlz); 
$iBadlz = str_replace('ز','زْ',$iBadlz); 
$iBadlz = str_replace('س','سُ',$iBadlz); 
$iBadlz = str_replace('ش','ﺷ͠ ',$iBadlz); 
$iBadlz = str_replace('ص','ﺼ',$iBadlz); 
$iBadlz = str_replace('ض','ضَّ',$iBadlz); 
$iBadlz = str_replace('ط','طً',$iBadlz); 
$iBadlz = str_replace('ظ','ظـ',$iBadlz); 
$iBadlz = str_replace('ع','عـ',$iBadlz); 
$iBadlz = str_replace('غ','غَ',$iBadlz); 
$iBadlz = str_replace('ف','ﻓ̲',$iBadlz); 
$iBadlz = str_replace('ق','ﻗ̮ـ̃',$iBadlz); 
$iBadlz = str_replace('ك','ﮖ',$iBadlz); 
$iBadlz = str_replace('ل','ﻟ̲ ',$iBadlz);
$iBadlz = str_replace('م','ﻣ̲',$iBadlz); 
$iBadlz = str_replace('ن','ﻧ̲',$iBadlz);  
$iBadlz = str_replace('ه','ﮬ̲̌ﮧ',$iBadlz); 
$iBadlz = str_replace('و','ﯚ',$iBadlz); 
$iBadlz = str_replace('ي','يَ',$iBadlz);

$iBadlz = str_replace('q', 'Ꝙ' ,$iBadlz);
  	 $iBadlz = str_replace('w', 'Ѡ' ,$iBadlz);
	 $iBadlz = str_replace('e', 'Ɛ' ,$iBadlz);
  	 $iBadlz = str_replace('r', 'Ɽ' ,$iBadlz);
	 $iBadlz = str_replace('t', 'Ͳ' ,$iBadlz);
  	 $iBadlz = str_replace('y', 'Ỿ' ,$iBadlz);
	 $iBadlz = str_replace('u', 'Ʊ' ,$iBadlz);
  	 $iBadlz = str_replace('i', 'ị' ,$iBadlz);
	 $iBadlz = str_replace('o', 'Ỗ' ,$iBadlz);
  	 $iBadlz = str_replace('p', 'Ꝓ' ,$iBadlz);
	 $iBadlz = str_replace('a', 'Λ' ,$iBadlz);
  	 $iBadlz = str_replace('s', 'Ṥ' ,$iBadlz);
	 $iBadlz = str_replace('d', 'δ' ,$iBadlz);
  	 $iBadlz = str_replace('f', 'Բ' ,$iBadlz);
	 $iBadlz = str_replace('g', '₲' ,$iBadlz);
  	 $iBadlz = str_replace('h', 'Ḩ' ,$iBadlz);
	 $iBadlz = str_replace('j', 'Ĵ' ,$iBadlz);
  	 $iBadlz = str_replace('k', 'Ҡ' ,$iBadlz);
	 $iBadlz = str_replace('l', 'Ⱡ' ,$iBadlz);
  	 $iBadlz = str_replace('z', 'Ꙃ' ,$iBadlz);
	 $iBadlz = str_replace('x', 'Ӿ' ,$iBadlz);
  	 $iBadlz = str_replace('c', 'Ƈ' ,$iBadlz);
	 $iBadlz = str_replace('v', 'Ѵ' ,$iBadlz);
  	 $iBadlz = str_replace('b', 'ß' ,$iBadlz);
  	 $iBadlz = str_replace('n', 'ⴂ' ,$iBadlz);
	 $iBadlz = str_replace('m', 'ⴅ' ,$iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
}
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = $text; 
$iBadlz = str_replace('ا','ٱ',$iBadlz); 
$iBadlz = str_replace('ب','ﭜ',$iBadlz); 
$iBadlz = str_replace('ج','چ',$iBadlz); 
$iBadlz = str_replace('ث','ﭦ',$iBadlz); 
$iBadlz = str_replace('ت','ﭠ',$iBadlz); 
$iBadlz = str_replace('ح','ڂ',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','ﮃ',$iBadlz); 
$iBadlz = str_replace('ذ','ڎ',$iBadlz); 
$iBadlz = str_replace('ر','ر',$iBadlz); 
$iBadlz = str_replace('ز','ژ',$iBadlz); 
$iBadlz = str_replace('س','ﺳ̭͠ ',$iBadlz); 
$iBadlz = str_replace('ش','شَ',$iBadlz); 
$iBadlz = str_replace('ص','ڝ',$iBadlz); 
$iBadlz = str_replace('ض','ڞ',$iBadlz); 
$iBadlz = str_replace('ط','ط',$iBadlz); 
$iBadlz = str_replace('ظ','ڟ',$iBadlz); 
$iBadlz = str_replace('ع','؏',$iBadlz); 
$iBadlz = str_replace('غ','ﻏ̐ ',$iBadlz); 
$iBadlz = str_replace('ف','ڤ',$iBadlz); 
$iBadlz = str_replace('ق','ڦ',$iBadlz); 
$iBadlz = str_replace('ك','ڳ',$iBadlz); 
$iBadlz = str_replace('ل','لَ',$iBadlz);
$iBadlz = str_replace('م','م',$iBadlz); 
$iBadlz = str_replace('ن','ڻ',$iBadlz);  
$iBadlz = str_replace('ه','هـﮧ',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','يِّ',$iBadlz); 

$iBadlz = str_replace('q', 'Ǫ' , $iBadlz);
  	 $iBadlz = str_replace('w', 'Ш' , $iBadlz);
	 $iBadlz = str_replace('e', 'Ξ' , $iBadlz);
  	 $iBadlz = str_replace('r', 'Я' , $iBadlz);
	 $iBadlz = str_replace('t', '₮' , $iBadlz);
  	 $iBadlz = str_replace('y', 'Џ' , $iBadlz);
	 $iBadlz = str_replace('u', 'Ǚ' , $iBadlz);
  	 $iBadlz = str_replace('i', 'ł' , $iBadlz);
	 $iBadlz = str_replace('o', 'Ф' , $iBadlz);
  	 $iBadlz = str_replace('p', 'ק' , $iBadlz);
	 $iBadlz = str_replace('a', 'Λ' , $iBadlz);
  	 $iBadlz = str_replace('s', 'Ŝ' , $iBadlz);
	 $iBadlz = str_replace('d', 'Ð' , $iBadlz);
  	 $iBadlz = str_replace('f', 'Ŧ' , $iBadlz);
	 $iBadlz = str_replace('g', '₲' , $iBadlz);
  	 $iBadlz = str_replace('h', 'Ḧ' , $iBadlz);
	 $iBadlz = str_replace('j', 'J' , $iBadlz);
  	 $iBadlz = str_replace('k', 'К' , $iBadlz);
	 $iBadlz = str_replace('l', 'Ł' , $iBadlz);
  	 $iBadlz = str_replace('z', 'Ꙃ' , $iBadlz);
	 $iBadlz = str_replace('x', 'Ж' , $iBadlz);
  	 $iBadlz = str_replace('c', 'Ͼ' , $iBadlz);
	 $iBadlz = str_replace('v', 'Ṽ' , $iBadlz);
  	 $iBadlz = str_replace('b', 'Б' , $iBadlz);
  	 $iBadlz = str_replace('n', 'Л' , $iBadlz);
	 $iBadlz = str_replace('m', 'Ɱ' , $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
   }
   if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$iBadlz = str_replace('ا','آ̀',$text); 
$iBadlz = str_replace('ب','ب',$iBadlz); 
$iBadlz = str_replace('ت','ت',$iBadlz);
$iBadlz = str_replace('ث','ث',$iBadlz); 
$iBadlz = str_replace('ج','ج',$iBadlz);  
$iBadlz = str_replace('ح','ح̀',$iBadlz); 
$iBadlz = str_replace('خ','خ',$iBadlz); 
$iBadlz = str_replace('د','د̀',$iBadlz); 
$iBadlz = str_replace('ذ','ذ̀',$iBadlz); 
$iBadlz = str_replace('ر','ر̀',$iBadlz); 
$iBadlz = str_replace('ز','ز',$iBadlz); 
$iBadlz = str_replace('س','س̀́',$iBadlz); 
$iBadlz = str_replace('ش','ش̀́',$iBadlz); 
$iBadlz = str_replace('ص','ص̀́',$iBadlz); 
$iBadlz = str_replace('ض','ض',$iBadlz); 
$iBadlz = str_replace('ط','ط̀́',$iBadlz); 
$iBadlz = str_replace('ظ','ظ̀́',$iBadlz); 
$iBadlz = str_replace('ع','ع̀́',$iBadlz); 
$iBadlz = str_replace('غ','غ',$iBadlz); 
$iBadlz = str_replace('ف','ف̀',$iBadlz); 
$iBadlz = str_replace('ق','ق̀',$iBadlz); 
$iBadlz = str_replace('ك','ك',$iBadlz); 
$iBadlz = str_replace('ل','ل',$iBadlz);
$iBadlz = str_replace('م','م̀',$iBadlz); 
$iBadlz = str_replace('ن','ن̀',$iBadlz);  
$iBadlz = str_replace('ه','ه̀',$iBadlz); 
$iBadlz = str_replace('و','و',$iBadlz); 
$iBadlz = str_replace('ي','ي',$iBadlz);

$iBadlz = str_replace('a', 'ⓐ', $iBadlz);
$iBadlz = str_replace('b', 'ⓑ', $iBadlz);
$iBadlz = str_replace('c', '©', $iBadlz);
$iBadlz = str_replace('d', 'ⓓ', $iBadlz);
$iBadlz = str_replace('e', 'ⓔ', $iBadlz);
$iBadlz = str_replace('f', 'ⓕ', $iBadlz);
$iBadlz = str_replace('g', 'ⓖ', $iBadlz);
$iBadlz = str_replace('h', 'ⓗ', $iBadlz);
$iBadlz = str_replace('i', 'ⓘ', $iBadlz);
$iBadlz = str_replace('j', 'ⓙ', $iBadlz);
$iBadlz = str_replace('k', 'ⓚ', $iBadlz);
$iBadlz = str_replace('l', 'ⓛ', $iBadlz);
$iBadlz = str_replace('m', 'ⓜ', $iBadlz);
$iBadlz = str_replace('n', 'ⓝ', $iBadlz);
$iBadlz = str_replace('o', 'ⓞ', $iBadlz);
$iBadlz = str_replace('p', 'ⓟ', $iBadlz);
$iBadlz = str_replace('q', 'ⓠ', $iBadlz);
$iBadlz = str_replace('r', 'ⓡ', $iBadlz);
$iBadlz = str_replace('s', 'ⓢ', $iBadlz);
$iBadlz = str_replace('t', 'ⓣ', $iBadlz);
$iBadlz = str_replace('u', 'ⓤ', $iBadlz);
$iBadlz = str_replace('v', 'ⓥ', $iBadlz);
$iBadlz = str_replace('w', 'ⓦ', $iBadlz);
$iBadlz = str_replace('x', 'ⓧ', $iBadlz);
$iBadlz = str_replace('y', 'ⓨ', $iBadlz);
$iBadlz = str_replace('z', 'ⓩ', $iBadlz);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$iBadlz."".$smile
   ]);
}

if($text != '/start'and$text!='/us'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $iBadlz = $text;
$iBadlz = str_replace('a','⎛α⎞',$iBadlz); 
$iBadlz = str_replace('b','⎛в⎞',$iBadlz); 
$iBadlz = str_replace('c','⎛c⎞',$iBadlz); 
$iBadlz = str_replace('d','⎛ɒ⎞',$iBadlz); 
$iBadlz = str_replace('e','⎛є⎞',$iBadlz); 
$iBadlz = str_replace('f','⎛f⎞',$iBadlz); 
$iBadlz = str_replace('g','⎛ɢ⎞',$iBadlz); 
$iBadlz = str_replace('h','⎛н⎞',$iBadlz); 
$iBadlz = str_replace('i','⎛ɪ⎞',$iBadlz); 
$iBadlz = str_replace('j','⎛ᴊ⎞',$iBadlz); 
$iBadlz = str_replace('s','⎛ĸ⎞',$iBadlz); 
$iBadlz = str_replace('l','⎛ℓ⎞',$iBadlz); 
$iBadlz = str_replace('m','⎛м⎞',$iBadlz); 
$iBadlz = str_replace('n','⎛и⎞',$iBadlz); 
$iBadlz = str_replace('o','⎛σ⎞',$iBadlz); 
$iBadlz = str_replace('p','⎛ρ⎞',$iBadlz); 
$iBadlz = str_replace('q','⎛q⎞',$iBadlz); 
$iBadlz = str_replace('r','⎛я⎞',$iBadlz); 
$iBadlz = str_replace('f','⎛s⎞',$iBadlz); 
$iBadlz = str_replace('t','⎛τ⎞ ',$iBadlz); 
$iBadlz = str_replace('u','⎛υ⎞ ',$iBadlz); 
$iBadlz = str_replace('v','⎛v⎞',$iBadlz); 
$iBadlz = str_replace('w','⎛ω⎞',$iBadlz); 
$iBadlz = str_replace('x','⎛x⎞',$iBadlz); 
$iBadlz = str_replace('y','⎛y⎞',$iBadlz); 
$iBadlz = str_replace('z','⎛z⎞',$iBadlz); 
 
$iBadlz = str_replace('ض','ضِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ص','صِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ث','ثِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ق','قِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ف','فِٰ͒ـِﮧۢ',$iBadlz); 
$iBadlz = str_replace('غ','غِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ع','عِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ه','ۿۿہ',$iBadlz); 
$iBadlz = str_replace('خ','خِٰ̐ـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ح','حِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ج','جِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ش','شِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('س','سِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ي','يِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ب','بِٰـِﮧۢ',$iBadlz);
$iBadlz = str_replace('ل','لِٰـِﮧۢ',$iBadlz); 
$iBadlz = str_replace('ا','آ',$iBadlz); 
$iBadlz = str_replace('ت','تِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ن','نِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('م','مِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ك','ڪِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ة','ةً',$iBadlz); 
$iBadlz = str_replace('ء','ء',$iBadlz); 
$iBadlz = str_replace('ظ','ظِٰـﮧِۢ',$iBadlz); 
$iBadlz = str_replace('ط','طِٰـﮧِۢ',$iBadlz); 
 $iBadlz = str_replace('ذ','ذٰ',$iBadlz); 
$iBadlz = str_replace('د','د',$iBadlz); 
$iBadlz = str_replace('ز','ژ',$iBadlz); 
$iBadlz = str_replace('ر','رٰ',$iBadlz); 
$iBadlz = str_replace('و','ﯛ̲୭',$iBadlz); 
 $iBadlz = str_replace('ى','ىٍ',$iBadlz);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$iBadlz."".$smile
   ]);
}

$bio = array("❥•َ⚡️͢ֆ⸽
⠀

            ‏ＢΔ S R A ┆17 Y.O ↴   
  ﴿ ‏ ‏ $text 💛ء","⠀
⠀
⠀



⠀                  I R A Q ┆19 Y.O ↴    
        ﴿ $text ️. 💛۽
⠀
⠀
⠀",

"⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀
⠀⠀⠀⠀⠀⠀
⠀⠀⠀ ⠀⠀
⠀ ⠀⠀⠀⠀- ᗩGE : 17 Y.O
$text ً.  💛 
⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀
⠀⠀⠀⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀
⠀
⠀
⠀
$text . 🥀  
⠀⠀⠀⠀- Unfollow Block ♚ֆ 〞 
⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀
‏‏‏$text 🖤ء
⠀⠀⠀⠀⠀✗ ᗩGE┊19 ✿‏ֆ
 ⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"⠀⠀


⠀⠀
$text 🥀 🚬 
⠀  ⠀   ғollow мe , ғollow вacĸ⠀⠀
⠀⠀⠀⠀⠀⠀┄༻☹️༺┄⠀
⠀⠀⠀⠀⠀ㅤ⠀‏ ‏⠀⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀
- ‏$text ☻. 
⠀⠀⠀⠀⠀- 🇮🇶|| 19 Y.O ❞
 ⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"⠀
⠀
⠀



⠀            ‏ＢΔ S R A ┆17 Y.O ↴    
🖤. $text
⠀
⠀
⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀⠀⠀⠀⠀⠀✗ IR‏ΔQ ˛⁽💛₎⇣    
﴿ ‏‏$text . 🖤‏ء
⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
     ﴿‏ ‏$text🤦🏽‍♀️ً ٰ. 
⠀⠀⠀⠀⠀⠀  𖤍 BASRA - iQ ‏
⠀‎
⠀‎
⠀
⠀‎
",

"‎‏⠀
‎‏⠀
‏⠀

⠀⠀

⠀
⠀
   ‏‏‏$text 🖤ء
⠀⠀⠀⠀⠀✗ ᗩGE┊19 ✿‏ֆ
 ⠀
⠀
⠀‎
‏⠀⠀⠀
‎‏⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀ ֆ ⁽ ♥ ⁾↵
               

 ⠀          ‹ 🇮🇶 ³¹³ BAGHDAD ›⠀⠀
$text! 🤷🏽‍♀️
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀
⠀",

"⠀⠀
‏⠀
‏⠀
‏⠀
⠀
⠀⠀⠀⠀⠀
⠀  ⠀⠀                      
⠀⠀⠀⠀•┆BΔGHDΔD 🇮🇶 ‏ֆ 
‏$text 🖤‏.
⠀⠀⠀⠀⠀⠀⠀
‏⠀
⠀
⠀
⠀",

"⠀
⠀
⠀



⠀⠀⠀⠀⠀⠀IRΔQ┆19 Y.O ↴    
⠀
   ﴿ $text 💚.
⠀
⠀
⠀
⠀",

"⠀
⠀
⠀



⠀                  Baghdad ┆15 Y.O ↴    
  ﴿ ‏$text 🖤.
⠀
⠀
⠀",

"⠀
⠀
⠀ 

⠀
⠀
    
 ‏$text  🖤»
 ⠀⠀     ⠀- Bagdad 19Y.O♚ֆ 
⠀

⠀ ⠀
⠀ ⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀          ⠀⠀➝ IR‏ΔQ ˛⁽ 💙 ₎⇣    
⠀⠀⠀⠀
‏$text 💔.
    ⠀
⠀⠀⠀⠀
⠀
⠀",

"⠀
‏⠀


⠀
⠀ 
⠀⠀⠀⠀⠀❥⁽ AGE┊9 ♚ )
⠀
﴿ $text ❤️.

⠀


⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀♛ | ؁ ➝🇮🇶
﴿ •  $text 🖤 ֆء
⠀♛ | OFFICIAL ACCOANT
⠀
⠀
⠀
⠀",

"⠀ 
⠀                  ⠀      ↓ ❛
⠀
⠀    ⠀              ﴾   ⠀ ⠀ 
⠀       ♩❥ $text ﴿⠀ ⠀ 
⠀       welcome to my profile 
⠀ 
⠀
⠀⠀⠀",

"⠀⠀


⠀⠀‏“🥀 $text “
   ⠀  ғollow мe , ғollow вacĸ⠀⠀
⠀⠀⠀⠀⠀┄༻☹️༺┄⠀
⠀⠀⠀⠀⠀ㅤ⠀
‏
",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀⠀♛ | ؁ ➝🇮🇶‏
♥️ $text ♯
⠀⠀⠀♛ | OFFICIAL ACCOANT
⠀
⠀
⠀
⠀",

"⠀ㅤ
ㅤ 
⠀⠀ ㅤ 


⠀ ⠀⠀ ㅤ ㅤ ⠀ㅤ ㅤ ؁ ➝🇮🇶   
$text
⠀ㅤ ✿ωєℓ¢σм тσσмуρяσfιℓє✿

‏⠀⠀⠀
⠀
ㅤ ㅤ 
⠀⠀⠀⠀⠀",

"
⠀
⠀
⠀⠀⠀ ⠀ ⠀⠀⠀⠀⠀⠀⠀↴⠀
⠀⠀❞ᗷᗩS3RAY 🇮🇶|| 21 Y.O ❞
$text
‏﴿ 🌞💧 ﴾

⠀ ⠀⠀ 
⠀⠀",

"⠀
⠀

⠀⠀
⠀
⠀⠀⠀⠀⠀⠀  ⠀┄༻💠༺┄⠀                      
 ﴿ $text ❤️ء  ﴾ 
⠀‏⠀ ⠀ᎳᎬᏞᏟᎾm TO ṃʏ ƿяȏғıʟ
⠀⠀⠀⠀⠀⠀⠀┄༻💠༺┄
⠀
⠀
⠀
⠀",

"⠀‏⠀

⠀‏⠀⠀⠀⠀⠀ ⠀❥ ⁞ ؁  ֆء
‏﴿ $text  ..؟⠀
⠀ ⠀⠀⠀‏⠀ᴡᴇʟᴄᴏᴍ ᴛᴏ ᴍʏ ᴘʀᴏғɪʟ⠀
⠀
⠀
⠀",

"⠀
⠀⠀
⠀⠀
⠀⠀ ⠀ ⠀⠀ ⠀⠀◂◂⠀⠀⠀▮▮⠀⠀⠀▸▸
⠀ ⠀⠀ ⠀ ⠀  |◂ ▬▬▬▬●▬▬ ◂|
⠀ ⠀⠀ ⠀   ➰ $text ➰ 
 ⠀ ❈⁽ From : IRΔQ➢ＢΔＧḤＤΔＤ ❉
⠀",

"⠀
⠀
⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀❶❽ Ꭹ.Ꭷ
⠀⠀⠀⠀⠀⠀⠀❖┊ᖴᖇOᗰ ᗷᗩᔕᖇᗩ
‏⠀$text ✘✋🏻 ⠀⠀⠀
⠀⠀⠀⠀↬ ❈⁽ шεᴌcσмε тσ мч вяσғ ❁
⠀
⠀
⠀
⠀",

"‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀ ❈ ⁽💛 ✿ ₎❈↴
‏⠀

﴿   $text ❤️
‏⠀‏ ⠀ᎳᎬᏞᏟᎾm TO ṃʏ ƿяȏғıʟ⠀
⠀⠀⠀⠀
‏⠀
‏⠀
‏⠀
⠀",

"⠀⠀


⠀⠀
$text 😴🎷
     ғollow мe , ғollow вacĸ⠀⠀
⠀⠀⠀⠀┄༻☹️༺┄⠀
⠀⠀⠀⠀⠀ㅤ⠀
‏
‏ ‏⠀⠀ 

      ⠀⠀⠀⠀⠀     ⠀⠀⠀⠀⠀⠀",

"⠀ ⠀ ⠀
⠀ ⠀ ⠀

‏⠀⠀ ⠀
⠀  ⠀❆ＩＱ › ＢΔＧḤＤΔＤ ❉‏⠀
‏‏⠀($text ֆ ☺️!)
              ※•┈•ʚ♚ɞ•┈‏​•※
⠀ ⠀ ⠀
⠀ ⠀ ⠀
⠀ ⠀ ⠀
⠀ ⠀ ⠀",

"‏⠀
‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀⠀ ✿┊Y.O:19  ֆ 
$text 💔ء﴾
‏⠀⠀‏⠀⠀⠀┈┉━❀🚶🏻❀━┅┄⠀
‏⠀
‏⠀
",
"⠀
⠀
⠀
⠀
⠀⠀⠀          ⠀⠀➝ IR‏ΔQ ˛⁽ 💙 ₎⇣    
⠀⠀⠀⠀
 $text 💚۽
    ⠀
⠀⠀⠀⠀
⠀
⠀",

"⠀

⠀
⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀♛؁17♛
⠀⠀⠀⠀⠀﴾ IQ ﴿ ��🇶  ❥ᗷᗩᔕᖇᗩ⠀
“ $text 🏃
⠀⠀
⠀
⠀
⠀",

"‏⠀
‏⠀
‏⠀
‏⠀
‏⠀
⠀⠀⠀⠀⠀⠀ ✿┊Y.O:19  ֆ 
⠀  ⠀❆ＩＱ › ＢΔＧḤＤΔＤ ❉‏⠀
$text ؟❤️﴾
‏⠀⠀‏⠀⠀⠀┈┉━❀🚶🏻❀━┉┄⠀
‏⠀
‏⠀
",
"⠀
⠀
⠀
⠀
⠀⠀⠀ ⠀⠀➝ IR‏ΔQ ˛⁽ ♥ ₎⇣  
⠀⠀⠀⠀
⠀⠀ $text ⁽✺⃕₎ 
↬  ❈⁽ шεʟcσмε тσ мч вяσғ ❁
‏⠀⠀⠀⠀┄༻💗༺┄       ⠀
⠀⠀⠀⠀
⠀
⠀
⠀",

"⠀
⠀

⠀
⠀
⠀⠀⠀⠀⠀⠀⠀◂◄⠀⠀▮▮⠀⠀▸►
⠀⠀⠀◂⠀━━━━❊━━━━⠀▸
$text ء.
  
⠀
⠀
⠀
⠀",

"⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀
⠀⠀⠀⠀⠀⠀
⠀⠀⠀ ⠀⠀
⠀ ⠀⠀⠀        ⠀- ᗩGE : 17 Y.O

$text
؛❤
‏
⠀ ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀",

"‎‏ㅤ
‎‏⠀⠀⠀‏ㅤ⠀⠀⠀
‎‏ㅤ
⠀‏
‎‏ㅤ⠀⠀ ⠀     ⠀ ➝ Y.O:18 ֆ 💭  

 $text 🌸₎
‎‏ㅤ
‎‏ㅤ
‎‏ㅤ⠀⠀⠀",);
$bior = array_rand($bio, 1);
if($text && $text !=="/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$bio[$bior]",
'reply_to_message_id'=>$msid,]);}
if($text && $text !=="/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👁‍🗨┇ تمت الزخرفة بنجاح √

📡┇ l مطور البوت للتواصل

🤵┇DEV⇨ @P6XXX",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
['text'=>"📎 قناتي ستوريات 💖", 'url'=>"https://t.me/jeccc"]
     ]

   ]
   ])
   ]); return false;}

 $sudo = 1189284654; //ايديك
$t =$message->chat->title; 
$user = $message->from->username; 
if($text == "/start") {
bot( sendmessage ,[
 chat_id =>$chat_id, 
 text =>"
 ",
 reply_to_message_id =>$message->message_id,
]);
bot( sendMessage ,[
 chat_id =>$sudo,
 text =>"تم دخول شخص الى البوت الخاص بك 🔰،

📮┇معلوماته في الأسفل 👋
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$name ¦ name

$from_id ¦ id
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉",
 disable_web_page_preview => true ,
 parse_mode =>"Markdown",
]);
}
