<?php
ob_start();
define('API_KEY','1815387495:AAHiD_wIvyXfYuwZ33XBuuepC5NDNhN6--g'); #توكنك
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$MROAN19s=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$MROAN19s);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
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
$admin = "1189284654"; 
date_default_timezone_set('Asia/Baghdad');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");
$n=date("n");


if($text ==  '/start' ){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" 
 - مـرحـبا بك عزيـزي في هذا البوت
-  يمكنك أن تأخذ (( بايوات - رموز - نبذات - اسامي جاهزه - زخرفه
- تحكم بواسـطه الازار في الاسفـل 😻💞
- H𝒆𝒍𝒍𝒐 𝒅𝒆𝒂𝒓, 𝒊𝒏 𝒕𝒉𝒆 𝒅𝒆𝒄𝒐𝒓𝒂𝒕𝒊𝒐𝒏 𝒃𝒐𝒕.
- C𝒐𝒏𝒕𝒓𝒐𝒍 𝒕𝒉𝒆 𝒃𝒐𝒕 𝒃𝒚 𝒎𝒆𝒂𝒏𝒔 𝒐𝒇 𝒕𝒉𝒆
- 𝒃𝒖𝒕𝒕𝒐𝒏𝒔 𝒂𝒕 𝒕𝒉𝒆 𝒃𝒐𝒕𝒕𝒐𝒎
- 𝒎𝒚 𝒅𝒆𝒗 @p6xxx
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اسماء جاهزه','callback_data'=>'bbb'],['text'=>'نبذات جاهزه','callback_data'=>'vo']],
[['text'=>'بايوات انستا','callback_data'=>'a1'],['text'=>'رموز و شعارات','callback_data'=>'rr']],
[['text'=>'زخرفة أسمك','callback_data'=>'zsz'],['text'=>"ستوريات 🖤",'url'=>'T.me/jeccc']],
]
])]);}

if($data=="hom"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 - مـرحـبا بك عزيـزي في هذا البوت
-  يمكنك أن تأخذ (( بايوات - رموز - نبذات - اسامي جاهزه - زخرفه
- تحكم بواسـطه الازار في الاسفـل 😻💞
- H𝒆𝒍𝒍𝒐 𝒅𝒆𝒂𝒓, 𝒊𝒏 𝒕𝒉𝒆 𝒅𝒆𝒄𝒐𝒓𝒂𝒕𝒊𝒐𝒏 𝒃𝒐𝒕.
- C𝒐𝒏𝒕𝒓𝒐𝒍 𝒕𝒉𝒆 𝒃𝒐𝒕 𝒃𝒚 𝒎𝒆𝒂𝒏𝒔 𝒐𝒇 𝒕𝒉𝒆
- 𝒃𝒖𝒕𝒕𝒐𝒏𝒔 𝒂𝒕 𝒕𝒉𝒆 𝒃𝒐𝒕𝒕𝒐𝒎
-𝒎𝒚 𝒅𝒆𝒗 @P6xxx
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'اسماء جاهزه','callback_data'=>'bbb'],['text'=>'نبذات جاهزه','callback_data'=>'nn']],
[['text'=>'بايوات انستا','callback_data'=>'a1'],['text'=>'رموز و شعارات','callback_data'=>'rr']],
[['text'=>'زخرفة أسمك','callback_data'=>'zsz'],['text'=>"ستوريات 🖤",'url'=>'T.me/jeccc']],
]
])]);}


if($data=="a1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀⠀⠀ ⠀  
                    ⠀ ⠀#𝑀𝑒
⠀⠀ ⠀‟‏ أما أكون #الأوليـٌه او لا أكون ”
⠀⠀⠀ ⠀  ⠀ ‏𝑃𝑒𝑟𝑠𝑜𝑛𝑎𝑙 𝑎𝑐𝑐𝑜𝑢𝑛𝑡

.
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a2']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}




if($data=="a2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
  ⠀ ⠀ ⠀⠀⠀ 𝚏𝚛𝚘𝚖 : 🇮🇶 #𝙳𝙸𝚈𝙰𝙻𝙰 
 ⁃ فيني الف شعور يخاف عليك 🖤.
⠀⠀⠀⠀- 𝚠𝚎𝚕𝚌𝚘𝚖𝚎 𝚝𝚘 𝚖𝚢 𝚙𝚛𝚘𝚏𝚒𝚕𝚎 .
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a3']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}



if($data=="a3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
  ⠀⠀⠀⠀ ⠀- #𝑑𝑖𝑦𝑎𝑙𝑎  .
   ⠀- 𝘀𝘁𝗿𝗼𝗻𝗴 , 𝗻𝗼𝘁 𝗯𝗿𝗼𝗸𝗲𝗻 .ㅤ  
- لأجلَ نفسكَ ڪُن ჺـزيز نفس 𓃠 :
⠀⠀ 𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄
⠀⠀⠀⠀ - 𝗺𝘆 𝗰𝗵𝗮𝗻𝗻𝗲𝗹 ⤵︎ .
⠀⠀⠀
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a4']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}


if($data=="a4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀  ⠀  
⠀⠀ ⠀⠀  ⠀⠀⠀- 𝓘𝐫𝐚𝐪 ✔︎ .           
   - صَعبات كُلش تره الگضيتهن وَّحدي ❗️. ⠀   
⠀  
⠀  ⠀  ⠀⠀
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a5']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}




if($data=="a5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀⠀⠀
⠀⠀⠀     ⠀⠀⠀ ⠀- 𝑀𝑎𝑟𝑐h 18 .
⠀⠀   ⠀⠀⠀- 𝐹𝑟𝑜𝑚 𝐼𝑟𝑎𝑞 🏹🔹️.
             ‏୪ يستَحقون حتّى عَناء التَفكير 🐍
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a6']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}




if($data=="a6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⧼ I𝐑𝐀𝐐 ⧽
⧼ L𝐎𝐕𝐄 ⧽✨ ⧽☁️ ⧽🍕 ⧽🍫 
⧼ A𝐆𝐄𖢿₁₉₉₉ ⧽

⧼ P𝐔𝐑𝐄 𝐀𝐒 𝐀 𝐂𝑳𝐎𝐔𝐃.⁦☊ ⧽
⧼ نقية ڪْٱنهٱ غَيمة ☁️𖠰⧽
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a7']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}



if($data=="a7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀          

               🇮🇶  √ 18 Y.O ↴    
    تزّعـلـك الحيـاة وتصـالحـك رسالـة .
⠀       - ᴡᴇʟᴄᴏᴍᴇ ᴇᴠᴇʀʏᴏɴᴇ 💛
⠀⠀          
⠀
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a8']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}


if($data=="a8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀
⠀

⠀⠀⠀ ⠀    ⠀- IRΔQ┆22 Y.O ↴⠀ 
⠀
‏•‏ رسالـهۂۦ قصيرة ע تراقب مـِْט لم يعـدُد لك 📮⇣
⠀
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a9']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}



if($data=="a9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀⠀                
⠀ ⠀ ⠀⠀⠀. ғʀᴏᴍ #ʙᴀsʀᴀ ↻. 
أنتي إصــــــنعــي الــقـــوة لتقـــــوي🐆💎
⠀ ⠀⠀ - ᴡᴇʟᴄᴏᴍᴇ ᴇᴠᴇʀʏᴏɴᴇ ❔
⠀
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'بايو آخر','callback_data'=>'a10']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}



if($data=="a10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ⠀⠀⠀
⠀
⠀⠀
⠀⠀⠀ BΔGHDAD 𖤍 ┆18 Y.O
   𝐍𝐎 𝐌𝐀𝐓𝐓𝐄𝐑 𝐖𝐇𝐀𝐓 𝐎𝐓𝐇𝐄𝐑 𝐏𝐄𝐎𝐏𝐋𝐄 𝐓𝐇𝐈𝐍𝐊 •
        لاتهتـم لِرأي الناس ★•⠀

⠀⠀⠀⠀⠀⠀⠀⠀◂◂⠀♥️⠀▸▸⠀
⠀
⠀⠀⠀⠀⠀⠀
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"خروج",'callback_data'=>'hom']],]])]);}




if($data=="bbb"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 قم بأختيار جنسك فقط وستضهر الاسامي المناسبه لك
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'إنثى','callback_data'=>'b1'],['text'=>'ذكر','callback_data'=>'b2']],
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}


if($data=="b1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
 ‹ ﺂيـهہ˛ 𓄼ᴬᵞᴬ‏⠀

‹ رﻗﯿۿ˛ 𓄼ʳᵟᵒ

‹ بنين˛ 𓄼ᴮᶯᵒ

‹ زينب˛ 𓄼ᙆᶯᵒ

‹ ﺂسيڵ˛ 𓄼ᴬˢᵒ

‹ ۿدۅ˛ 𓄼ʰᵈᵒ

‹ فوش˛ 𓄼ᶠᵒˢ

‹ نوࢪ˛  𓄼ᴬᶯᵒ
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}






if($data=="rr"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
→→→→→→→→→→→→→→
♫𖢌𖣀𖤐𖣐𖤓☽↷↶𖠳୰𓄼𓂁⋆☼∵𓂐𓇼𐄬𖡼☤⤶⚘𖤏∭𖡗♙𖧯⦅ꕥ𖥤𖧷𖦥𖡩𖠲𖠕⿻⌱𖨬𖧷𖢇ϗ ◡̈⃝  ⠉̮⃝  ⍢⃝ ‏ ‏ɵ̷̥ˬɵ̷̥  ɵ᷄ˬɵ᷅  o̴̶‸o̴̶ ☬ 𓆩 𓀒𓆪 ▽ 𖤍 𓅔 𓅓 𓃠 𓆩 𓆪 ® 𓅟 ☽ ⁶⁹ ʷʰʸ ௸ظ ⁰¹²³⁴⁵⁶⁷⁸⁹ ↺ ↻ ☊ ☋ ☤ ‌‏𓈊 ⚚❈ ま ঌ ⁶³✦ ☤ ♘ 𖤍 ☬ ▽ ⁶³𓅔 𓅓 𓃠 𓆩𓆪⁶³🏴 ® 𓅟 ☽ ⁶⁹ ʷʰʸ ௸   ⁰¹²³⁴⁵⁶⁸⁹ ↺ ↻ ☊ ☋ ☤ ‌‏𓈊 𖤐 𐂂 𓃞 𓃟 𓃡 ⁶³𓆈 Ꭰ Ꭱ Ꭰ ☤☽↷↶ ‏ϟ   ☉ ☼ ☽ ☾ ♁   ❅ ❆ ☬ 𓆩 𓀒𓆪 ▽ 𖤍 𓅔 𓅓 𓃠 𓆩 𓆪 ® 𓅟 ☽𖠰 𖠱 𖠲 𖠳 𖠴 𖠵 𖠶 𖠷 𖠸 𖡗 𖡘 𖡙 𖡚 𖡛 𖡜 𖡝 𖡞 𖡟 𖡠 𖡡 𖡢 𖡣 𖡤 𖡥 𖡦 𖡧 𖡨 𖡩 𖡪 𖡫 𖡬 𖡭 𖡮 𖡯 𖡰 𖡱 𖡲 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 𓅾 𓅿 𓆀 𓆁 𓆂 𓏾 𓏿 𓐀 ‏𓀀 𓀁 𓀂 𓀃 𓀄 𓀅 𓀆 𓀇 𓀈 𓀉 𓀊 𓀋 𓀌 𓀍 𓀎 𓀏 𓀐 𓀑 𓀒 𓀓 𓀔 𓀕 𓀖 𓀗 𓀘 𓀙 𓀚 𓀛 𓀜 𓀝 𓀞 𓀟 𓀠 𓀡 𓀢 𓀣 𓀤 𓀥 𓀦 𓀧 𓀨 𓀩 𓀪 𓀫 𓀬 𓀭 𓀮 𓀯 𓀰 𓀱 𓀲 𓀳 𓀴 𓀵 𓀶 𓀷 𓀸 𓀹 𓀺 𓀻 𓀼 𓀽 𓀾 𓀿 𓁀 𓁁 𓁂 𓁃 𓁄 𓁅 𓁆 𓁇 𓁈 𓁉 𓁊 𓁋 𓁌 𓁍 𓁎 𓁏 𓁐 𓁑 𓁒 𓁓 𓁔 𓁕 𓁖 𓁗 𓁘 𓁙 𓁚 𓁛 𓁜 𓁝 𓁞 𓁟 𓁠 𓁡 𓁢 𓁣 𓁤 𓁥 𓁦 𓁧 𓁨 𓁩 𓁪 𓁫 𓁬 𓁭 𓁮 𓁯 𓁰 𓁱 𓁲 𓁳 𓁴 𓁵 𓁶 𓁷 𓁸 𓁹 𓁺 𓁻 𓁼 𓁽 𓁾 𓁿 𓂀𓂅 𓂆 𓂇 𓂈 𓂉 𓂊 𓂋 𓂌 𓂍 𓂎 𓂏 𓂐 𓂑 𓂒 𓂓 𓂔 𓂕 𓂖 𓂗 𓂘 𓂙 𓂚 𓂛 𓂜 𓂝 𓂞 𓂟 𓂠 𓂡 𓂢 𓂣 𓂤 𓂥 𓂦 𓂧 𓂨 𓂩 𓂪 𓂫 𓂬 𓂭 𓂮 𓂯 𓂰 𓂱 𓂲 𓂳 𓂴 𓂵 𓂶 𓂷 𓂸 𓂹 𓂺 𓂻 𓂼 𓂽 𓂾 𓂿 𓃀 𓃁 𓃂 𓃃 𓃅 𓃆 𓃇 𓃈 𓃉 𓃊 𓃋 𓃌 𓃍 𓃎 𓃏 𓃐 𓃑 𓃒 𓃓 𓃔 𓃕 𓃖 𓃗 𓃘 ?? 𓃚 𓃛 𓃜 𓃝 𓃞 𓃟 𓃠 𓃡 𓃢 𓃣 𓃤 𓃥 𓃦 𓃧 𓃨 𓃩 𓃪 𓃫 𓃬 𓃭 𓃮 𓃯 𓃰 𓃱 𓃲 𓃳 𓃴 𓃵 𓃶 𓃷 𓃸 𓃹 𓃺 𓃻 𓃼 𓃽 𓃾 𓃿 𓄀 𓄁 𓄂 𓄃 𓄄 𓄅 𓄆 𓄇 𓄈 𓄉 𓄊 𓄋 𓄌 𓄍 𓄎 𓄏 𓄐 𓄑 𓄒 𓄓 𓄔 𓄕 𓄖 𓄙 𓄚 𓄛 𓄜 𓄝 𓄞 𓄟 𓄠 𓄡 𓄢 𓄣 𓄤 𓄥 𓄦 𓄧 𓄨 𓄩 𓄪 𓄫 𓄬 𓄭 𓄮 𓄯 𓄰 𓄱 𓄲 𓄳 𓄴 𓄵 𓄶 𓄷 𓄸 𓄹 𓄼 𓄽 𓄾 𓄿 𓅀 𓅁 𓅂 𓅃 𓅄 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔 𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅪 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 𓅼 𓅽 𓅾 𓅿 𓆀 𓆁 𓆂 𓆃 𓆄 𓆅 𓆆 𓆇 𓆈 𓆉 𓆊 𓆋 𓆌 𓆍 𓆎 𓆐 𓆑 𓆒 𓆓 𓆔 𓆕 𓆖 𓆗 𓆘 𓆙 𓆚 𓆛 𓆜 𓆝 𓆞 𓆟 𓆠 𓆡 𓆢 𓆣 𓆤 𓆥 𓆦 𓆧 𓆨 𓆩𓆪 𓆫 𓆬 𓆮 𓆯 𓆰 𓆱 𓆲 𓆳 𓆴 𓆵 𓆶 𓆷 𓆸 𓆹 𓆺 𓆻 𓆼 𓆽 𓆾 𓆿 𓇀 𓇁 𓇂 𓇃 𓇄 𓇅 𓇆 𓇇 𓇈 𓇉 𓇊 𓇋 𓇌 𓇍 𓇎 𓇏 𓇐 𓇑 𓇒 𓇓 𓇔 𓇕 𓇖 𓇗 𓇘 𓇙 𓇚 𓇛 𓇜 𓇝 𓇞 𓇟 𓇠 𓇡 𓇢 𓇣 𓇤 𓇥 𓇦 𓇧 𓇨 𓇩 𓇪 𓇫 𓇬 𓇭 𓇮 𓇯 𓇰 𓇱 𓇲 𓇳 𓇴 𓇵 𓇶 𓇷 𓇸 𓇹 𓇺 𓇻 𓇼 𓇾 𓇿 𓈀 𓈁 𓈂 𓈃 𓈄 𓈅 𓈆 𓈇 𓈈 𓈉 𓈊 𓈋 𓈌 𓈍 𓈎 𓈏 𓈐 𓈑 𓈒 𓈓 𓈔 𓈕 𓈖 𓈗 𓈘 𓈙 𓈚 𓈛 𓈜 𓈝 𓈞 𓈟 𓈠 𓈡 𓈢 𓈣 𓈤 𓈥 𓈦 𓈧 𓈨 𓈩 𓈪 𓈫 𓈬 𓈭 𓈮 𓈯 𓈰 𓈱 𓈲 𓈳 𓈴 𓈵 𓈶 𓈷 𓈸 𓈹 𓈺 𓈻 𓈼 𓈽 𓈾 𓈿 𓉀 𓉁 𓉂 𓉃 𓉄 𓉅 𓉆 𓉇 𓉈 𓉉 𓉊 𓉋 𓉌 𓉍 𓉎 𓉏 𓉐 𓉑 𓉒 𓉓 𓉔 𓉕 𓉖 𓉗 𓉘 𓉙 𓉚 𓉛 𓉜 𓉝 𓉞 𓉟 𓉠 𓉡 𓉢 𓉣 𓉤 𓉥 𓉦 𓉧 𓉨 𓉩 𓉪 𓉫 𓉬 𓉭 𓉮 𓉯 𓉰 𓉱 𓉲 𓉳 𓉴 𓉵 𓉶 𓉷 𓉸 𓉹 𓉺 𓉻 𓉼 𓉽 𓉾 𓉿 𓊀 𓊁 𓊂 𓊃 𓊄 𓊅 𓊈 𓊉 𓊊 𓊋 𓊌 𓊍 𓊎 𓊏 𓊐 𓊑 𓊒 𓊓 ?? 𓊕 𓊖 𓊗 𓊘 𓊙 𓊚 𓊛 𓊜 𓊝 𓊞 𓊟 𓊠 𓊡 𓊢 𓊣 𓊤 𓊥 𓊦 𓊧 𓊨 𓊩 𓊪 𓊫 𓊬 𓊭 𓊮 𓊯 𓊰 𓊱 𓊲 𓊳 𓊴 𓊵 𓊶 𓊷 𓊸 𓊹 𓊺 𓊻 𓊼 𓊽 𓊾 𓊿 𓋀 𓋁 𓋂 𓋃 𓋄 𓋅 𓋆 𓋇 𓋈 𓋉 𓋊 𓋋 𓋌 𓋍 𓋎 𓋏 𓋐 𓋑 𓋒 𓋓 𓋔 𓋕 𓋖 𓋗 𓋘 𓋙 𓋚 𓋛 𓋜 𓋝 𓋞 𓋟 𓋠 𓋡 𓋢 𓋣 𓋤 𓋥 𓋦 𓋧 𓋨 𓋩 𓋪 𓋫 𓋬 𓋭 𓋮 𓋯 𓋰 𓋱 𓋲 𓋳 𓋴 𓋵 𓋶 𓋷 𓋸 𓋹 𓋺 𓋻 𓋼 𓋽 𓋾 𓋿 𓌀 𓌁 𓌂 𓌃 𓌄 𓌅 𓌆 𓌇 𓌈 𓌉 𓌊 𓌋 𓌌 𓌍 𓌎 𓌏 𓌐 𓌑 𓌒 𓌓 𓌔 𓌕 𓌖 𓌗 𓌘 𓌙 𓌚 𓌛 𓌜 𓌝 𓌞 𓌟 𓌠 𓌡 𓌢 𓌣 𓌤 𓌥 𓌦 𓌧 𓌨 𓌩 𓌪 𓌫 𓌬 𓌭 𓌮 𓌯 𓌰 𓌱 𓌲 𓌳 𓌴 𓌵 𓌶 𓌷 𓌸 𓌹 𓌺 𓌻 𓌼 𓌽 𓌾 𓌿 𓍀 𓍁 𓍂 𓍃 𓍄 𓍅 𓍆 𓍇 𓍈 𓍉 𓍊 𓍋 𓍌 𓍍 𓍎 𓍏 𓍐 𓍑 𓍒 𓍓 𓍔 𓍕 𓍖 𓍗 𓍘 𓍙 𓍚 𓍛 𓍜 𓍝 𓍞 𓍟 𓍠 𓍡 𓍢 𓍣 𓍤 𓍥 𓍦 𓍧 𓍨 𓍩 𓍪 𓍫 𓍬 𓍭 𓍮 𓍯 𓍰 𓍱 𓍲 𓍳 𓍴 𓍵 𓍶 𓍷 𓍸 𓍹 𓍺 𓍻 𓍼 𓍽 𓍾 𓍿 𓎀 𓎁 𓎂 𓎃 𓎄 𓎅 𓎆 𓎇 𓎈 𓎉 𓎊 𓎋 𓎌 𓎍 𓎎 𓎏 𓎐 𓎑 𓎒 𓎓 𓎔 𓎕 𓎖 𓎗 𓎘 𓎙 𓎚 𓎛 𓎜 𓎝 𓎞 𓎟 𓎠 𓎡 𓏋 𓏌 𓏍 𓏎 𓏏 𓏐 𓏑 𓏒 𓏓 𓏕 𓏖 𓏗 𓏘 𓏙 𓏚 𓏛 𓏜 𓏝 𓏞 𓏟 𓏠 𓏡 𓏢 𓏣 𓏤 𓏥 𓏦 𓏧 𓏨 𓏩 𓏪 𓏫 𓏬 𓏭 𓏮 𓏯 𓏰 𓏱 𓏲 𓏳 𓏴 𓏶 𓏷 𓏸 𓏹 𓏺 𓏻
→→→→→→→→→→→→→→
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الصفحه الرئيسيه",'callback_data'=>'hom']],]])]);}
if($text == 'بايو'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"قناتنا @h4ck3riraq",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"ﺂن ࢦم ﭑعجبـﮧڪ ‘ ڪل ﭑلڪثير من ﭑࢦتـﮧراب  ✗ْٰ̯⃕͡”㋡",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"صٰنعٰٰتٰ ﻣﻧهْہ شـٰ̲ﺨﺻٰﮧۧـٲ لايـٰ̲ﮪـزم فهزمنيْ 🌝🖕🏾“",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"شـٓديِٰ حـٰيـلِـج بـلڪٰـٰي تـٓعٰـٰٰجبينـيِٰ ‏☻✋!",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"صَبࢦيٰ خِـٰࢦ آشٖـٰږبَ وآمٖـﯙت بڪٰيٰڤٖيٰ 🧞‍♂✨",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"أذِا مـٰوُ گدٰهٰهآ مٰآمجٰبوٰر تركٰبههٰآ وتطِٰيحٓ شعٰلمِكٰ عٰلىٰ خخٰيلٰ يٰبِنٰ المٰرآجٰيٰح✗ْٰ̯⃕͡”㋡",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"وقت ﺂلشــدايد ياۿرج ڪثر ﺂلذيــاب ووقـت ﺂلرخى ياڪثـر زول ﺂلذيابۿﮧ㋡!!  ",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"ۈ ؏ ﻁﺂڕﻱ ﭑﻟۈﻓﺂٱ ﻋﻨﺩﻱ ڪݪ ﺻﺂﺣﭒ ﺄڪﻠـب ﻣن ﭑﻟﺜﺂﻧﻱ✗ْٰ̯⃕͡”㋡",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"آﻟﹻۧﹻۧۧخہۣۗﹻﹻﹻﹻآصِ ﺑبہۣۗﹻﹻﹻﹻډولإږ وإذآ ﭼﺂُوبټڰ صلي رڪعتين شڪر للهُ😏✌",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"آخٌر يـﮯوُمِـ بّعَمِـريـﮯ مِـآ رآح آخٌوُنجَ حبّيـﮯبّتُيـﮯ جَدُيـدُهِہ‏“",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"😌تعرف يعني شنوو عزت نفس🤔 يعني الهوه لو يتكبر عليه ماتنفسه ثيمالله🏃‍",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"اكرهني ميخالف بس لتحبني مصلحة",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"ﺂﺂنـٍـٌأ، ﺂﺂۈڵ، م̷ـــِْن، ۻــٌرݓ ﺨﺨيــﺂلۿــﺂﺂ،ﹾ ﹺ،",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"وكـت ﭑﻟشـده ﭑوڭفلـك وڪفــهه تـﻧڙﻟل روس وﻟد ععمكك㋡!! ",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"مطور البوت > @Rsj4d                           قناة البوت > @h4ck3riraq ",
]);
}
if($text == "جديدنا✅"){
bot('sendmessage',[
chat_id=>$chat_id,
"text"=> "قناتنا للهكر والبوتات @h4ck3riraq"
]);
}

if($text == 'نبذات 2🔥'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"مصنع بوتات حمآية  @sajadrembo_bot",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"﴿「كــن الأسـوء ولا تگگــن نـسـخہـة زائـفــة 😏🖖🏼 卍“ ﴾‏✞♕",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"تـﺣز ﺑﺨٱطڔي ﺎفـﻋاﻟها وٱﻗووڵ ﻏاﻟيهہ ❤",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"ٳحہبكُہ مْنٍ قہًبلہ مْٳيہجہريہ ٻًيہه ٳلہدٍمْ »» يہٳحہسہ💓ـيہنٍ (عہُ).",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"نَْبـْۦٰــذْھ•||عۤݪمٖتكٰكۨ شݪۄڼ تطِيٰږ مٖوۤ صٰعۤبھﮧٰ ﺂڬسٰر جِڼآحٰحٓګك✗",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"ٱﺈسمـێ ۦَٰ ؏ـقدهٖہ ۦَٰ ڵي ۦَٰ ﯗڵٱﺈد ۦَٰ ٱﺈڵقحبهٖہ ۦَٰ ✘",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"^_•",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"حتا الضحكة يلي نضحكها كذب🌝",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"••للباحثين عن الحب الصادق ابحثو عن مطاعم احسللكم وعزموني وياكم 🌝❤️😹؟",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"𝑫𝒐𝒏’𝒕 𝒍𝒆𝒕 𝒚𝒐𝒖𝒓 𝒉𝒂𝒑𝒑𝒊𝒏𝒆𝒔𝒔 𝒅𝒆𝒑𝒆𝒏𝒅 𝒐𝒏 𝒔𝒐𝒎",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"انتَ تحاول جاهداً لكسبي لكنك تفشل فـــჂ̤ كُل مره 🖤⛅️،",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"يًسـكـنـنـي مـن [ الـعـنـاد ] مـا يـكـفـي [ دولــة ]",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"لن تتوقف الحياة على اشخاص خذلونا فدائما يعوضنا الله❤... بمن هم افضل",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"في يسار صدري💘 .....لك وطن 💚",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"‏﮼ﯛڪﭑنك مديـنۿ ﯛࢪد بـ‏؏ـمق قـلبـي🌻 💞.*",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"‏كن اقرب لي منهم فـ آنـيٰ اخترتك من بينهم .🕊🐾",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"ڈﺑـلٳﭑن قلبـﯥ-ﻣٳﭑ ﭔقى-حـﺳ-بہ فرٰﺣۿۂء☹",
]);
bot('sendmessage', ['chat_id' => $chat_id,'text' =>"مطور البوت > @Rsj4d                           قناة البوت > @h4ck3riraq ",
]);





