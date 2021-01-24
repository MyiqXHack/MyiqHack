<?php
#####فكشن اتصال ######
ob_start();
define('API_KEY', '1571392668:AAEksVQ055UFpEQszHE_Ss7LBAfJxz0oU8I');
echo "https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
    $ok = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ok";
        $ok_Iq = file_get_contents($url);
        return json_decode($ok_Iq);
}
##### المتغيرات######
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chsaied = "i40ta";
$sudo = 1104669942;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
##### اشتراك اجباري #####
$php88 = "mroan1235";
$MROAN = " c_941"; 
if($text == "/start"){$from_id = $message->from->id;
$join2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$php88&user_id=".$from_id);
$join3 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$MROAN&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join2,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVphp88D"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- اهلا بك عزيزي 💘¦ -
💬¦- ليمكنك استخدام البوت  -
💭¦- عليك الاشتراك في القناة  - :
💎¦- قناه اولا - @$php88
🎄¦ قناه الثانيه - @$MROAN
💬¦ عند الاشتراك بل قنوات اضغط /start
",
'reply_to_message_id'=>$message->message_id,
]);return false;}}   


##### نص بوت #####

if ($text == '/start') {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"` اهلا بك  `{ [$name](tg://user?id=$id) }`في بوت الزخرفه 💥`

`يابة هاذ مو بوت براسه 74الف حض ضيم وعلي  ⚡️`

`والي تكتلك يزخرف 13 نوع عربي و انكليزي سمول و كابتل`

`ترة تكدر تكدر تغير الايموجي بس دز اسمك مرة ثانية يتغير و اضغط على الاسم ينسخ  🌪`",
'disable_web_page_preview'=>'true',
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
                'inline_keyboard'=>[
[['text'=>'📡- تابع جديدنا -📡','url'=>"https://t.me/$chsaied"]],
]])
]);}

##### اذاعة ######

if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"عزيــزي⇓
ارســل الكليشه للأذاعــه🎋"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}

#####نص البوت######
#### زخرفة ارقام ####
if ($text !== '/start' and $text !=='اذاعه') {
 $count = count($text);
$k = $text;
 $k = str_replace('0', '⁰', $k);
   $k = str_replace('1', '¹', $k);
   $k = str_replace('2', ' ² ', $k);
   $k = str_replace('3', 'ᓆ³ ', $k);
   $k = str_replace('4', 'ᓅ⁴ ', $k);
   $k = str_replace('5', '⁵', $k);
   $k = str_replace('6', 'ᓘ⁶ ', $k);
   $k = str_replace('7', 'ᓘ ⁷ ', $k);
   $k = str_replace('8', 'ᓗ⁸', $k);
   $k = str_replace('9', '⁹', $k);
   $k = str_replace('10', ' ¹⁰', $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"$k"
   ]);
}

#### الزخرفه #####
if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
$A = str_replace('a','𝗔',$A); 
$A = str_replace("b","𝗕",$A); 
$A = str_replace("c","𝗖",$A); 
$A = str_replace("d","𝗗",$A); 
$A = str_replace("e","𝗘",$A); 
$A = str_replace("f","𝗙",$A); 
$A = str_replace("g","𝗚",$A); 
$A = str_replace("h","𝗛",$A); 
$A = str_replace("i","𝗜",$A); 
$A = str_replace("j","𝗝",$A); 
$A = str_replace("k","𝗞",$A); 
$A = str_replace("l","𝗟",$A); 
$A = str_replace("m","𝗠",$A); 
$A = str_replace("n","𝗡",$A); 
$A = str_replace("o","𝗢",$A); 
$A = str_replace("p","𝗣",$A); 
$A = str_replace("q","𝗤",$A); 
$A = str_replace("r","𝗥",$A); 
$A = str_replace("s","𝗦",$A); 
$A = str_replace("t","𝗧",$A); 
$A = str_replace("u","𝗨",$A); 
$A = str_replace("v","𝗩",$A); 
$A = str_replace("w","𝗪",$A); 
$A = str_replace("x","𝗫",$A); 
$A = str_replace("y","𝗬",$A); 
$A = str_replace("z","𝗭",$A); 
      
$A = str_replace('ض','ضـٰ̲ـہ',$A); 
$A = str_replace('ص','صـٰ̲ـہ',$A); 
$A = str_replace('ث','ثـٰ̲ـہ',$A); 
$A = str_replace('ق','قـٰ̲ـہ',$A); 
$A = str_replace('ف','فـٰ̲ـہ',$A); 
$A = str_replace('غ','غـٰ̲ـہ',$A); 
$A = str_replace('ع','عـٰ̲ـہ',$A); 
$A = str_replace('ه','هـٰ̲ـہ',$A); 
$A = str_replace('خ','خـٰ̲ـہ',$A); 
$A = str_replace('ح','حـٰ̲ـہ',$A); 
$A = str_replace('ج','جـٰ̲ـہ',$A); 
$A = str_replace('ش','شـٰ̲ـہ',$A); 
$A = str_replace('س','سـٰ̲ـہ',$A); 
$A = str_replace('ي','يـٰ̲ـہ',$A); 
$A = str_replace('ب','بـٰ̲ـہ',$A);
$A = str_replace('ل','لـٰ̲ـہ',$A); 
$A = str_replace('ا','اٰ',$A); 
$A = str_replace('ت','تـٰ̲ـہ',$A); 
$A = str_replace('ن','نـٰ̲ـہ',$A); 
$A = str_replace('م','مـٰ̲ـہ',$A); 
$A = str_replace('ك','كـٰ̲ـہ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظـٰ̲ـہ',$A); 
$A = str_replace('ط','طـٰ̲ـہ',$A); 
$A = str_replace('ذ','ذٰ',$A); 
$A = str_replace('د','دٰ',$A); 
$A = str_replace('ز','زٰ',$A); 
$A = str_replace('ر','رٰ',$A); 
$A = str_replace('و','وٰ',$A); 
$A = str_replace('ى','ىَ',$A); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
}
 
if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('a','𝐀',$text); 
$A = str_replace('a','𝐀',$A); 
$A = str_replace("b","𝐁",$A); 
$A = str_replace("c","𝐂",$A); 
$A = str_replace("d","𝐃",$A); 
$A = str_replace("e","𝐄",$A); 
$A = str_replace("f","𝐅",$A); 
$A = str_replace("g","𝐆",$A); 
$A = str_replace("h","𝐇",$A); 
$A = str_replace("i","𝐈",$A); 
$A = str_replace("j","𝐉",$A); 
$A = str_replace("k","𝐊",$A); 
$A = str_replace("l","𝐋",$A); 
$A = str_replace("m","𝐌",$A); 
$A = str_replace("n","𝐍",$A); 
$A = str_replace("o","𝐎",$A); 
$A = str_replace("p","𝐏",$A); 
$A = str_replace("q","𝐐",$A); 
$A = str_replace("r","𝐑",$A); 
$A = str_replace("s","𝐒",$A); 
$A = str_replace("t","𝐓",$A); 
$A = str_replace("u"," 𝐔",$A); 
$A = str_replace("v","𝐕",$A); 
$A = str_replace("w","𝐖",$A); 
$A = str_replace("x","𝐗",$A); 
$A = str_replace("y","𝐘",$A); 
$A = str_replace("z","𝐙",$A);
 
$A = str_replace('ض','ضـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ص','صـ๋͜‏ـﮧ',$A); 
$A = str_replace('ث','ثـ๋͜‏ـﮧ',$A); 
$A = str_replace('ق','قـ๋͜‏ـﮧ',$A); 
$A = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$A); 
$A = str_replace('غ','غـ๋͜‏ـﮧ',$A); 
$A = str_replace('ع','عـ๋͜‏ـﮧ',$A); 
$A = str_replace('ه','ۿۿہ',$A); 
$A = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ح','حـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ج','جـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ش','شـ๋͜‏ـﮧ ',$A); 
$A = str_replace('س','سـ๋͜‏ـﮧ',$A); 
$A = str_replace('ي',' يـ๋͜‏ـﮧ',$A); 
$A = str_replace('ب','  بـ๋͜‏ـﮧ',$A);
$A = str_replace('ل',' لـ๋͜‏ـﮧ',$A); 
$A = str_replace('ا','آ',$A); 
$A = str_replace('ت','  تـ๋͜‏ـﮧ',$A); 
$A = str_replace('ن','نـ๋͜‏ـﮧ',$A); 
$A = str_replace('م','مـ๋͜‏ـﮧ',$A); 
$A = str_replace('ك','ڪـ๋͜‏ـﮧ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظـ๋͜‏ـﮧ',$A); 
$A = str_replace('ط','طـ๋͜‏ـﮧ',$A); 
 $A = str_replace('ذ','ذِ',$A); 
$A = str_replace('د','دٰ',$A); 
$A = str_replace('ز','زً',$A); 
$A = str_replace('ر','ر',$A); 
$A = str_replace('و','ﯛ̲୭',$A); 
 $A = str_replace('ى','ىٰ',$A);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }

if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('a','̶a̶',$text); 
$A = str_replace('b','b̶',$A); 
$A = str_replace('c','c̶',$A); 
$A = str_replace('d','d̶',$A); 
$A = str_replace('e','e̶',$A); 
$A = str_replace('f','f̶',$A); 
$A = str_replace('g','g̶',$A); 
$A = str_replace('h','h̶',$A); 
$A = str_replace('i','i̶',$A); 
$A = str_replace('j','j̶',$A); 
$A = str_replace('k','k̶',$A); 
$A = str_replace('l','l̶',$A); 
$A = str_replace('m','m̶',$A); 
$A = str_replace('n','n̶',$A); 
$A = str_replace('o','o̶',$A); 
$A = str_replace('p','p̶',$A); 
$A = str_replace('q','q̶',$A); 
$A = str_replace('r','r̶',$A); 
$A = str_replace('s','s̶',$A); 
$A = str_replace('t','t̶',$A); 
$A = str_replace('u','ᵘ̶ ',$A); 
$A = str_replace('v','v̶',$A); 
$A = str_replace('w','w̶',$A); 
$A = str_replace('x','x̶',$A); 
$A = str_replace('y','y̶',$A); 
$A = str_replace('z','z̶',$A); 

 $A = str_replace('ض','ضۜہٰٰ',$A); 
$A = str_replace('ص','صۛہٰٰ',$A); 
$A = str_replace('ث','ثہٰٰ',$A); 
$A = str_replace('ق','قྀ̲ہٰٰٰ',$A); 
$A = str_replace('ف','ف͒ہٰٰ',$A); 
$A = str_replace('غ','غہٰٰ',$A); 
$A = str_replace('ع','ۤ؏ـ',$A); 
$A = str_replace('ه','ھہ',$A); 
$A = str_replace('خ','خٰ̐ہ',$A); 
$A = str_replace('ح','حہٰٰ',$A); 
$A = str_replace('ج','جْۧ ',$A); 
$A = str_replace('ش','شِٰہٰٰ',$A); 
$A = str_replace('س','سٰٰٓ',$A); 
$A = str_replace('ي','يِٰہ',$A); 
$A = str_replace('ب','بّہ',$A);
$A = str_replace('ل','ل',$A); 
$A = str_replace('ا','آ',$A); 
$A = str_replace('ت',' تَہَٰ',$A); 
$A = str_replace('ن','نَِٰہ',$A); 
$A = str_replace('ك','ڪٰྀہٰٰٖ',$A); 
$A = str_replace('م','مـ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظۗـہٰٰ',$A); 
$A = str_replace('ط','طۨہٰٰ',$A); 
 $A = str_replace('ذ','ذِ',$A); 
$A = str_replace('د','دُ',$A); 
$A = str_replace('ز','ژ',$A); 
$A = str_replace('ر','رٰ',$A); 
$A = str_replace('و','وً',$A); 
 $A = str_replace('ى','ى',$A);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }

if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text; 
$A = str_replace('a','⧼α⧽',$A); 
$A = str_replace('b','⧼в⧽',$A); 
$A = str_replace('c','⧼c⧽',$A); 
$A = str_replace('d','⧼ɒ⧽',$A); 
$A = str_replace('e','⧼є⧽',$A); 
$A = str_replace('f','⧼f⧽',$A); 
$A = str_replace('g','⧼ɢ⧽',$A); 
$A = str_replace('h','⧼н⧽',$A); 
$A = str_replace('i','⧼ɪ⧽',$A); 
$A = str_replace('j','⧼ᴊ⧽',$A); 
$A = str_replace('k','⧼ĸ⧽',$A); 
$A = str_replace('l','⧼ℓ⧽',$A); 
$A = str_replace('m','⧼м⧽',$A); 
$A = str_replace('n','⧼и⧽',$A); 
$A = str_replace('o','⧼σ⧽',$A); 
$A = str_replace('p','⧼ρ⧽',$A); 
$A = str_replace('q','⧼q⧽',$A); 
$A = str_replace('r','⧼я⧽',$A); 
$A = str_replace('s','⧼s⧽',$A); 
$A = str_replace('t','⧼τ⧽',$A); 
$A = str_replace('u','⧼υ⧽',$A); 
$A = str_replace('v','⧼v⧽',$A); 
$A = str_replace('w','⧼ω⧽',$A); 
$A = str_replace('x','⧼x⧽',$A); 
$A = str_replace('y','⧼y⧽',$A); 
$A = str_replace('z','⧼z⧽',$A); 

$A = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$A); 
$A = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$A); 
$A = str_replace('ث','ث̲ꫭـﮧ',$A); 
$A = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$A); 
$A = str_replace('ف','',$A); 
$A = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$A); 
$A = str_replace('ع','غـّٰ̐ہٰٰ',$A); 
$A = str_replace('ه','ٰ̲ھہ',$A); 
$A = str_replace('خ','خ̲ﮧ',$A); 
$A = str_replace('ح','ح̲ꪳـﮧ',$A); 
$A = str_replace('ج','ج̲ꪸـﮧ',$A); 
$A = str_replace('ش','ش̲ꪾـﮧ',$A); 
$A = str_replace('س','سـ̷ٰٰﮧْ',$A); 
$A = str_replace('ي','يـِٰ̲ﮧ',$A); 
$A = str_replace('ب','ب̲ꪰـﮧ',$A);
$A = str_replace('ل','لٍُـّٰ̐ہ',$A); 
$A = str_replace('ا',' ཻا ',$A); 
$A = str_replace('ت','تـٰۧﮧ',$A); 
$A = str_replace('ن','نٰ̲̐ـﮧْ',$A); 
$A = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$A); 
$A = str_replace('ك','كـِّﮧْٰٖ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظَـ๋͜ﮧْ',$A); 
$A = str_replace('ط','ط̲꫁ـﮧ',$A); 
 $A = str_replace('ذ','ذٖ',$A); 
$A = str_replace('د','دُ',$A); 
$A = str_replace('ز','ژٰ',$A); 
$A = str_replace('ر','',$A); 
$A = str_replace('و','ﯛ૭',$A); 
 $A = str_replace('ى','ىِ',$A); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }
if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('ض', 'ضٰـــ֧֯͝ۦـ', $text);
   $A = str_replace('ص', 'صٖصـــ֧֯͝ۦـ', $A);
   $A = str_replace('ث', 'ثـــ֧֯͝ۦـ', $A);
   $A = str_replace('ق', 'قـــ֧֯͝ۦـ', $A);
   $A = str_replace('ف', 'فٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('غ', 'غٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('ع', '؏ـــ֧֯͝ۦـ', $A);
   $A = str_replace('خ', 'خٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('ح', 'حَحـــ֧֯͝ۦـ', $A);
   $A = str_replace('ج', 'جـــ֧֯͝ۦـ', $A);
   $A = str_replace('ش', 'شٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('س', 'س͜ـ̠س', $A);
   $A = str_replace('ي', 'يٰۧـــ֧֯͝ۦـ', $A);
   $A = str_replace('ب', 'بـــ֧֯͝ۦـ', $A);
   $A = str_replace('ل', 'لٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تـــ֧֯͝ۦـ', $A);
   $A = str_replace('ن', 'نِـــ֧֯͝ۦـ', $A);
   $A = str_replace('م', 'مِـٰٚـــ֧֯͝ۦـ', $A);
   $A = str_replace('ك', 'ڰ̠̤ڪ', $A);
   $A = str_replace('ط', 'طـــ֧֯͝ۦـ', $A);
   $A = str_replace('ذ', 'ذِ', $A);
   $A = str_replace('ظ', 'ظـــ֧֯͝ۦـ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('ظ', 'ظـــ֧֯͝ۦـ', $A);
   $A = str_replace('و', 'ﯛ̲', $A);
   $A = str_replace("ه", "هٰ̐ہ", $A);
   
   $A = str_replace('a',"ᵃ",$A);
$A = str_replace("b","ᵇ",$A);
$A = str_replace("c","ᶜ",$A);
$A = str_replace("d","ᵈ",$A);
$A = str_replace("e","ᵉ",$A);
$A = str_replace("f","ᶠ",$A);
$A = str_replace("g","ᵍ",$A);
$A = str_replace("h","ʰ",$A);
$A = str_replace("i","ᶤ",$A);
$A = str_replace("j","ʲ",$A);
$A = str_replace("k","ᵏ",$A);
$A = str_replace("l","ˡ",$A);
$A = str_replace("m","ᵐ",$A);
$A = str_replace("n","ᶰ",$A);
$A = str_replace("o","ᵒ",$A);
$A = str_replace("p","ᵖ",$A);
$A = str_replace("q","ᵠ",$A);
$A = str_replace("r","ʳ",$A);
$A = str_replace("s","ˢ",$A);
$A = str_replace("t","ᵗ",$A);
$A = str_replace("u","ᵘ",$A);
$A = str_replace("v","ᵛ",$A);
$A = str_replace("w","ʷ",$A);
$A = str_replace("x","ˣ",$A);
$A = str_replace("y","ʸ",$A);
$A = str_replace("z","ᶻ",$A);

   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = $text;
   $A = str_replace('ض', 'ض͜ــ๋͜ـ', $A);
   $A = str_replace('ص', 'ص͜ــ๋͜ـ', $A);
   $A = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $A);
   $A = str_replace('ق', 'ق͜ــ๋͜ـ', $A);
   $A = str_replace('ف', 'ف͒͜ــ๋͜ـ', $A);
   $A = str_replace('غ', 'غ͜ــ๋͜ـ', $A);
   $A = str_replace('ع', 'ع͜ــ๋͜ـ', $A);
   $A = str_replace('خ', 'خ̐͜ــ๋͜ـ', $A);
   $A = str_replace('ح', 'ح͜ــ๋͜ـ', $A);
   $A = str_replace('ج', 'ج͜ــ๋͜ـ', $A);
   $A = str_replace('ش', 'ش͜ــ๋͜ـ', $A);
   $A = str_replace('س', 'س͜ــ๋͜ـ', $A);
   $A = str_replace('ي', 'ي͜ــ๋͜ـ', $A);
   $A = str_replace('ب', 'ب͜ــ๋͜ـ', $A);
   $A = str_replace('ل', 'ل͜ــ๋͜ـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'ت͜ــ๋͜ـ', $A);
   $A = str_replace('ن', 'ن͜ــ๋͜ـ', $A);
   $A = str_replace('م', 'م͜ــ๋͜ـ', $A);
   $A = str_replace('ك', 'ڪ͜ــ๋͜ـ', $A);
   $A = str_replace('ط', 'ط͜ــ๋͜ـ', $A);
   $A = str_replace('ظ', 'ظ͜ــ๋͜ـ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('ظ', 'ظــ๋͜ـ', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A = str_replace('q', 'Θ' , $A);
  	 $A = str_replace('w', 'ẁ' , $A);
	 $A = str_replace('e', 'ë' , $A);
  	 $A = str_replace('r', 'я' , $A);
	 $A = str_replace('t', 'ť' , $A);
  	 $A = str_replace('y', 'y' , $A);
	 $A = str_replace('u', 'ע' , $A);
  	 $A = str_replace('i', 'į' , $A);
	 $A = str_replace('o', 'ð' , $A);
  	 $A = str_replace('p', 'ρ' , $A);
	 $A = str_replace('a', 'à' , $A);
  	 $A = str_replace('s', 'ś' , $A);
	 $A = str_replace('d', 'ď' , $A);
  	 $A = str_replace('f', '∫' , $A);
	 $A = str_replace('g', 'ĝ' , $A);
  	 $A = str_replace('h', 'ŋ' , $A);
	 $A = str_replace('j', 'Ј' , $A);
  	 $A = str_replace('k', 'қ' , $A);
	 $A = str_replace('l', 'Ŀ' , $A);
  	 $A = str_replace('z', 'ź' , $A);
	 $A = str_replace('x', 'א' , $A);
  	 $A = str_replace('c', 'ć' , $A);
	 $A = str_replace('v', 'V' , $A);
  	 $A = str_replace('b', 'Ђ' , $A);
  	 $A = str_replace('n', 'ŋ' , $A);
	 $A = str_replace('m', 'm' , $A);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضِــٖٖـ', $A);
   $A = str_replace('ص', 'صـٖٖـ', $A);
   $A = str_replace('ث', 'ثِــٖٖـ', $A);
   $A = str_replace('ق', 'قِـٖٖـ', $A);
   $A = str_replace('ف', 'فِ͒ــٖٖـ', $A);
   $A = str_replace('غ', 'غِــٖٖـ', $A);
   $A = str_replace('ع', 'عِـٖٖـ', $A);
   $A = str_replace('خ', 'خِ̐ـٖٖـ', $A);
   $A = str_replace('ح', 'حِــٖٖـ', $A);
   $A = str_replace('ج', 'جِــٖٖـ', $A);
   $A = str_replace('ش', 'شِــٖٖـ', $A);
   $A = str_replace('س', 'سِــٖٖـ', $A);
   $A = str_replace('ي', 'يِــٖٖـ', $A);
   $A = str_replace('ب', 'بِــٖٖـ', $A);
   $A = str_replace('ل', 'لِــٖٖـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تِــٖٖـ', $A);
   $A = str_replace('ن', 'نِــٖٖـ', $A);
   $A = str_replace('م', 'مِــٖٖـ', $A);
   $A = str_replace('ك', 'ڪِــٖٖـ', $A);
   $A = str_replace('ط', 'طِـٖٖـ', $A);
   $A = str_replace('ظ', 'ظِــٖٖـ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A = str_replace('q', 'Ҩ' , $A);
  	 $A = str_replace('w', 'Щ' , $A);
	 $A = str_replace('e', 'Є' , $A);
  	 $A = str_replace('r', 'R' , $A);
	 $A = str_replace('t', 'ƚ' , $A);
  	 $A = str_replace('y', '￥' , $A);
	 $A = str_replace('u', 'Ц' , $A);
  	 $A = str_replace('i', 'Ī' , $A);
	 $A = str_replace('o', 'Ø' , $A);
  	 $A = str_replace('p', 'P' , $A);
	 $A = str_replace('a', 'Â' , $A);
  	 $A = str_replace('s', '$' , $A);
	 $A = str_replace('d', 'Ð' , $A);
  	 $A = str_replace('f', 'Ŧ' , $A);
	 $A = str_replace('g', 'Ǥ' , $A);
  	 $A = str_replace('h', 'Ħ' , $A);
	 $A = str_replace('j', 'ʖ' , $A);
  	 $A = str_replace('k', 'Қ' , $A);
	 $A = str_replace('l', 'Ŀ' , $A);
  	 $A = str_replace('z', 'Ẕ' , $A);
	 $A = str_replace('x', 'X' , $A);
  	 $A = str_replace('c', 'Ĉ' , $A);
	 $A = str_replace('v', 'V' , $A);
  	 $A = str_replace('b', 'ß' , $A);
  	 $A = str_replace('n', 'И' , $A);
	 $A = str_replace('m', 'ⴅ' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}

 if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضـ๋͜‏ـ', $text);
   $A = str_replace('ص', 'صـ๋͜‏ـ', $A);
   $A = str_replace('ث', 'ثـ๋͜‏ـ', $A);
   $A = str_replace('ق', 'قـ๋͜‏ـ', $A);
   $A = str_replace('ف', 'ف͒ـ๋͜‏ـ', $A);
   $A = str_replace('غ', 'غـ๋͜‏ـ', $A);
   $A = str_replace('ع', 'عـ๋͜‏ـ', $A);
   $A = str_replace('خ', 'خ̐ـ๋͜‏ـ', $A);
   $A = str_replace('ح', 'حـ๋͜‏ـ', $A);
   $A = str_replace('ج', 'جـ๋͜‏ـ', $A);
   $A = str_replace('ش', 'شـ๋͜‏ـ', $A);
   $A = str_replace('س', 'سـ๋͜‏ـ', $A);
   $A = str_replace('ي', 'يـ๋͜‏ـ', $A);
   $A = str_replace('ب', 'بـ๋͜‏ـ', $A);
   $A = str_replace('ل', 'لـ๋͜‏ـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تـ๋͜‏ـ', $A);
   $A = str_replace('ن', 'نـ๋͜‏ـ', $A);
   $A = str_replace('م', 'مـ๋͜‏ـ', $A);
   $A = str_replace('ك', 'ڪـ๋͜‏ـ', $A);
   $A = str_replace('ط', 'طـ๋͜‏ـ', $A);
   $A = str_replace('ظ', 'ظـ๋͜‏ـ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A= str_replace('q', '•🇶', $A);
   $A= str_replace('w', '•🇼', $A);
   $A= str_replace('e', '•🇪', $A);
   $A= str_replace('r', '•🇷', $A);
   $A= str_replace('t', '•🇹', $A);
   $A= str_replace('y', '•🇾', $A);
   $A= str_replace('u', '•🇻', $A);
   $A= str_replace('i', '•🇮', $A);
   $A= str_replace('o', '•🇴', $A);
   $A= str_replace('p', '•🇵', $A);
   $A= str_replace('a', '•🇦', $A);
   $A= str_replace('s', '•🇸', $A);
   $A= str_replace('d', '•🇩', $A);
   $A= str_replace('f', '•🇫', $A);
   $A= str_replace('g', '•🇬', $A);
   $A= str_replace('h', '•🇭', $A);
   $A= str_replace('j', '•🇯', $A);
   $A= str_replace('k', '•🇰', $A);
   $A= str_replace('l', '•🇱', $A);
   $A= str_replace('z', '•🇿', $A);
   $A= str_replace('x', '•🇽', $A);
   $A= str_replace('c', '•🇨', $A);
   $A= str_replace('v', '•🇺', $A);
   $A= str_replace('b', '•🇧', $A);
   $A= str_replace('n', '•🇳', $A);
   $A= str_replace('m', '•🇲', $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضِٰـِۢ', $A);
   $A = str_replace('ص', 'صِٰـِۢ', $A);
   $A = str_replace('ث', 'ثِٰـِۢ', $A);
   $A = str_replace('ق', 'قِٰـِۢ', $A);
   $A = str_replace('ف', 'فِٰ͒ـِۢ', $A);
   $A = str_replace('غ', 'غِٰـِۢ', $A);
   $A = str_replace('ع', 'عِٰـِۢ', $A);
   $A = str_replace('خ', 'خِٰ̐ـِۢ', $A);
   $A = str_replace('ح', 'حِٰـِۢ', $A);
   $A = str_replace('ج', 'جِٰـِۢ', $A);
   $A = str_replace('ش', 'شِٰـِۢ', $A);
   $A = str_replace('س', 'سِٰـِۢ', $A);
   $A = str_replace('ي', 'يِٰـِۢ', $A);
   $A = str_replace('ب', 'بِٰـِۢ', $A);
   $A = str_replace('ل', 'لِٰـِۢ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تِٰـِۢ', $A);
   $A = str_replace('ن', 'نِٰـِۢ', $A);
   $A = str_replace('م', 'مِٰـِۢ', $A);
   $A = str_replace('ك', 'ڪِٰـِۢ', $A);
   $A = str_replace('ط', 'طِٰـِۢ', $A);
   $A = str_replace('ظ', 'ظِٰـِۢ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A = str_replace('q', 'Ⴓ' , $A);
     $A = str_replace('w', 'ᗯ' , $A);
	 $A = str_replace('e', 'ᕮ' , $A);
     $A = str_replace('r', 'ᖇ' , $A);
	 $A = str_replace('t', 'ͳ' , $A);
 	$A = str_replace('y', 'ϒ' , $A);
	 $A = str_replace('u', 'ᘮ' , $A);
	 $A = str_replace('i', 'ᓰ' , $A);
	 $A = str_replace('o', '〇' , $A);
	 $A = str_replace('p', 'ᖘ' , $A);
	 $A = str_replace('a', 'ᗩ' , $A);
	 $A = str_replace('s', 'ᔕ' , $A);
	 $A = str_replace('d', 'ᗪ' , $A);
	 $A = str_replace('f', 'Բ' , $A);
	 $A = str_replace('g', 'ᘐ' , $A);
	 $A = str_replace('h', 'ᕼ' , $A);
	 $A = str_replace('j', 'ᒎ' , $A);
	 $A = str_replace('k', 'Ḱ' , $A);
	 $A = str_replace('l', 'ᒪ' , $A);
	 $A = str_replace('z', 'Ꙁ' , $A);
	 $A = str_replace('x', 'Ꮖ' , $A);
	 $A = str_replace('c', 'ᑕ' , $A);
	 $A = str_replace('v', 'ᐯ' , $A);
	 $A = str_replace('b', 'ᙖ' , $A);
	 $A = str_replace('n', 'ᘉ' , $A);
	 $A = str_replace('m', 'ᙢ' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "໋۠هہؚ", $A);
   
   $A = str_replace('q', 'q' , $A);
  	 $A = str_replace('w', 'ω' , $A);
	 $A = str_replace('e', 'ε' , $A);
  	 $A = str_replace('r', 'я' , $A);
	 $A = str_replace('t', 'т' , $A);
  	 $A = str_replace('y', 'ү' , $A);
	 $A = str_replace('u', 'υ' , $A);
  	 $A = str_replace('i', 'ι' , $A);
	 $A = str_replace('o', 'σ' , $A);
  	 $A = str_replace('p', 'ρ' , $A);
	 $A = str_replace('a', 'α' , $A);
  	 $A = str_replace('s', 's' , $A);
	 $A = str_replace('d', '∂' , $A);
  	 $A = str_replace('f', 'ғ' , $A);
	 $A = str_replace('g', 'g' , $A);
  	 $A = str_replace('h', 'н' , $A);
	 $A = str_replace('j', 'נ' , $A);
  	 $A = str_replace('k', 'к' , $A);
	 $A = str_replace('l', 'ℓ' , $A);
  	 $A = str_replace('z', 'z' , $A);
	 $A = str_replace('x', 'x' , $A);
  	 $A = str_replace('c', 'c' , $A);
	 $A = str_replace('v', 'v' , $A);
  	 $A = str_replace('b', 'в' , $A);
  	 $A = str_replace('n', 'η' , $A);
	 $A = str_replace('m', 'м' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼??) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضِٰـۛৣـ', $A);
   $A = str_replace('ص', 'صِٰـۛৣـ', $A);
   $A = str_replace('ث', 'ثِٰـۛৣـ', $A);
   $A = str_replace('ق', 'قِٰـۛৣـ', $A);
   $A = str_replace('ف', 'فِٰ͒ـۛৣـ', $A);
   $A = str_replace('غ', 'غِٰـۛৣـ', $A);
   $A = str_replace('ع', 'عِٰـۛৣـ', $A);
   $A = str_replace('خ', 'خِٰ̐ـۛৣـ', $A);
   $A = str_replace('ح', 'حِٰـۛৣـ', $A);
   $A = str_replace('ج', 'جِٰـۛৣـ', $A);
   $A = str_replace('ش', 'شِٰـۛৣـ', $A);
   $A = str_replace('س', 'سِٰـۛৣـ', $A);
   $A = str_replace('ي', 'يِٰـۛৣـ', $A);
   $A = str_replace('ب', 'بِٰـۛৣـ', $A);
   $A = str_replace('ل', 'لِٰـۛৣـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تِٰـۛৣـ', $A);
   $A = str_replace('ن', 'نِٰـۛৣـ', $A);
   $A = str_replace('م', 'مِٰـۛৣـ', $A);
   $A = str_replace('ك', 'ڪِٰـۛৣـ', $A);
   $A = str_replace('ط', 'طِٰـۛৣـ', $A);
   $A = str_replace('ظ', 'ظِٰـۛৣـ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "໋۠هہؚ", $A);
   
   $A = str_replace('q', 'Ｑ' , $A);
  	 $A = str_replace('w', 'Ｗ' , $A);
	 $A = str_replace('e', 'Ｅ' , $A);
  	 $A = str_replace('r', 'Ｒ' , $A);
	 $A = str_replace('t', 'Ｔ' , $A);
  	 $A = str_replace('y', 'Ｙ' , $A);
	 $A = str_replace('u', 'Ｕ' , $A);
  	 $A = str_replace('i', 'Ｉ' , $A);
	 $A = str_replace('o', 'Ｏ' , $A);
  	 $A = str_replace('p', 'Ｐ' , $A);
	 $A = str_replace('a', 'Ａ' , $A);
  	 $A = str_replace('s', 'Ｓ' , $A);
	 $A = str_replace('d', 'Ｄ' , $A);
  	 $A = str_replace('f', 'Բ' , $A);
	 $A = str_replace('g', 'Ｇ' , $A);
  	 $A = str_replace('h', 'Ｈ' , $A);
	 $A = str_replace('j', 'Ｊ' , $A);
  	 $A = str_replace('k', 'Ｋ' , $A);
	 $A = str_replace('l', 'Ｌ' , $A);
  	 $A = str_replace('z', 'Ｚ' , $A);
	 $A = str_replace('x', 'Ｘ' , $A);
  	 $A = str_replace('c', 'С' , $A);
	 $A = str_replace('v', 'Ｖ' , $A);
  	 $A = str_replace('b', 'Ｂ' , $A);
  	 $A = str_replace('n', 'Ｎ' , $A);
	 $A = str_replace('m', 'Ⅿ' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضـۘ❈ـۘ', $A);
   $A = str_replace('ص', 'صـۘ❈ـۘ', $A);
   $A = str_replace('ث', 'ثـۘ❈ـۘ', $A);
   $A = str_replace('ق', 'قـۘ❈ـۘ', $A);
   $A = str_replace('ف', 'ف͒ـۘ❈ـۘ', $A);
   $A = str_replace('غ', 'غـۘ❈ـۘ', $A);
   $A = str_replace('ع', 'عـۘ❈ـۘ', $A);
   $A = str_replace('خ', 'خ̐ـۘ❈ـۘ', $A);
   $A = str_replace('ح', 'حـۘ❈ـۘ', $A);
   $A = str_replace('ج', 'جـۘ❈ـۘ', $A);
   $A = str_replace('ش', 'شـۘ❈ـۘ', $A);
   $A = str_replace('س', 'سـۘ❈ـۘ', $A);
   $A = str_replace('ي', 'يـۘ❈ـۘ', $A);
   $A = str_replace('ب', 'بـۘ❈ـۘ', $A);
   $A = str_replace('ل', 'لـۘ❈ـۘ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تـۘ❈ـۘ', $A);
   $A = str_replace('ن', 'نـۘ❈ـۘ', $A);
   $A = str_replace('م', 'م', $A);
   $A = str_replace('ك', 'ڪـۘ❈ـۘ', $A);
   $A = str_replace('ط', 'طـۘ❈ـۘ', $A);
   $A = str_replace('ظ', 'ظـۘ❈ـۘ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "໋۠هہؚ", $A);
   
   $A = str_replace('q', 'Ҩ' , $A);
  	 $A = str_replace('w', 'Ɯ' , $A);
	 $A = str_replace('e', 'Ɛ' , $A);
  	 $A = str_replace('r', '尺' , $A);
	 $A = str_replace('t', 'Ť' , $A);
  	 $A = str_replace('y', 'Ϥ' , $A);
	 $A = str_replace('u', 'Ц' , $A);
  	 $A = str_replace('i', 'ɪ' , $A);
	 $A = str_replace('o', 'Ø' , $A);
  	 $A = str_replace('p', 'þ' , $A);
	 $A = str_replace('a', 'Λ' , $A);
  	 $A = str_replace('s', 'ら' , $A);
	 $A = str_replace('d', 'Ð' , $A);
  	 $A = str_replace('f', 'F' , $A);
	 $A = str_replace('g', 'Ɠ' , $A);
  	 $A = str_replace('h', 'н' , $A);
	 $A = str_replace('j', 'ﾌ' , $A);
  	 $A = str_replace('k', 'Қ' , $A);
	 $A = str_replace('l', 'Ł' , $A);
  	 $A = str_replace('z', 'Ẕ' , $A);
	 $A = str_replace('x', 'χ' , $A);
  	 $A = str_replace('c', 'ㄈ' , $A);
	 $A = str_replace('v', 'Ɣ' , $A);
  	 $A = str_replace('b', 'Ϧ' , $A);
  	 $A = str_replace('n', 'Л' , $A);
	 $A = str_replace('m', '௱' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}

if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = str_replace('ا','ٱ',$text); 
$ggggw = str_replace('ب','ﺑ',$ggggw); 
$ggggw = str_replace('ت','ﺗ̲ ',$ggggw); 
$ggggw = str_replace('ث','ثّـ',$ggggw); 
$ggggw = str_replace('ج','جّـ',$ggggw); 
$ggggw = str_replace('ح','ﺣّ͠ـ',$ggggw); 
$ggggw = str_replace('خ','ﺣ͠ ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ذ','ذّ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','زْ',$ggggw); 
$ggggw = str_replace('س','ﺳ̭͠ ',$ggggw); 
$ggggw = str_replace('ش','ﺷ͠ ',$ggggw);  
$ggggw = str_replace('ص','ڝـ',$ggggw); 
$ggggw = str_replace('ض','ڞـ',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ظـ',$ggggw); 
$ggggw = str_replace('ع','ﻋ̝̚',$ggggw); 
$ggggw = str_replace('غ','ﻏ̣̐',$ggggw); 
$ggggw = str_replace('ف','ﻓ̲̣̐ ',$ggggw); 
$ggggw = str_replace('ق','ﻗ̮ـ̃',$ggggw); 
$ggggw = str_replace('ك','ڪْ',$ggggw); 
$ggggw = str_replace('ل','لْـ',$ggggw);
$ggggw = str_replace('م','م',$ggggw); 
$ggggw = str_replace('ن','ﻧـ',$ggggw);  
$ggggw = str_replace('ه','ھَہّ',$ggggw); 
$ggggw = str_replace('و','ۅ',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('q', 'Ⴓ' , $ggggw);
  	 $ggggw = str_replace('w', 'Ш' , $ggggw);
	 $ggggw = str_replace('e', 'Σ' , $ggggw);
  	 $ggggw = str_replace('r', 'Γ' , $ggggw);
	 $ggggw = str_replace('t', 'Ƭ' , $ggggw);
  	 $ggggw = str_replace('y', 'Ψ' , $ggggw);
	 $ggggw = str_replace('u', 'Ʊ' , $ggggw);
  	 $ggggw = str_replace('i', 'I' , $ggggw);
	 $ggggw = str_replace('o', 'Θ' , $ggggw);
  	 $ggggw = str_replace('p', 'Ƥ' , $ggggw);
	 $ggggw = str_replace('a', 'Δ' , $ggggw);
  	 $ggggw = str_replace('s', 'Ѕ' , $ggggw);
	 $ggggw = str_replace('d', 'D' , $ggggw);
  	 $ggggw = str_replace('f', 'F' , $ggggw);
	 $ggggw = str_replace('g', 'G' , $ggggw);
  	 $ggggw = str_replace('h', 'H' , $ggggw);
	 $ggggw = str_replace('j', 'J' , $ggggw);
  	 $ggggw = str_replace('k', 'Ƙ' , $ggggw);
	 $ggggw = str_replace('l', 'L' , $ggggw);
  	 $ggggw = str_replace('z', 'Z' , $ggggw);
	 $ggggw = str_replace('x', 'Ж' , $ggggw);
  	 $ggggw = str_replace('c', 'C' , $ggggw);
	 $ggggw = str_replace('v', 'Ʋ' , $ggggw);
  	 $ggggw = str_replace('b', 'Ɓ' , $ggggw);
  	 $ggggw = str_replace('n', '∏' , $ggggw);
	 $ggggw = str_replace('m', 'Μ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
   if($text != '/start' and $text != 'اذاعه'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀?? ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','ب',$ggggw); 
$ggggw = str_replace('ت','ت',$ggggw);
$ggggw = str_replace('ث','ث',$ggggw); 
$ggggw = str_replace('ج','جۚ ּ',$ggggw);  
$ggggw = str_replace('ح','حۡ',$ggggw); 
$ggggw = str_replace('خ','خۡ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ذ','ذ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','ز',$ggggw); 
$ggggw = str_replace('س','سۜ',$ggggw); 
$ggggw = str_replace('ش','ش',$ggggw); 
$ggggw = str_replace('ص','ص',$ggggw); 
$ggggw = str_replace('ض','ض',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ظ',$ggggw); 
$ggggw = str_replace('ع','ع',$ggggw); 
$ggggw = str_replace('غ','غ',$ggggw); 
$ggggw = str_replace('ف','ف',$ggggw); 
$ggggw = str_replace('ق','ق',$ggggw); 
$ggggw = str_replace('ك','ك',$ggggw); 
$ggggw = str_replace('ل','ل',$ggggw);
$ggggw = str_replace('م','مۘ',$ggggw); 
$ggggw = str_replace('ن','نۨــہ',$ggggw);  
$ggggw = str_replace('ه','هۂَ',$ggggw); 
$ggggw = str_replace('ٰو','و',$ggggw); 
$ggggw = str_replace('ي','يۧ',$ggggw);

$ggggw = str_replace('q', 'Q' , $ggggw);
  	 $ggggw = str_replace('w', 'Щ' , $ggggw);
	 $ggggw = str_replace('e', '乇' , $ggggw);
  	 $ggggw = str_replace('r', '尺' , $ggggw);
	 $ggggw = str_replace('t', 'ｲ' , $ggggw);
  	 $ggggw = str_replace('y', 'ﾘ' , $ggggw);
	 $ggggw = str_replace('u', 'Ц' , $ggggw);
  	 $ggggw = str_replace('i', 'ﾉ' , $ggggw);
	 $ggggw = str_replace('o', 'Ծ' , $ggggw);
  	 $ggggw = str_replace('p', 'ｱ' , $ggggw);
	 $ggggw = str_replace('a', 'ﾑ' , $ggggw);
  	 $ggggw = str_replace('s', '丂' , $ggggw);
	 $ggggw = str_replace('d', 'Ð' , $ggggw);
  	 $ggggw = str_replace('f', 'ｷ' , $ggggw);
	 $ggggw = str_replace('g', 'Ǥ' , $ggggw);
  	 $ggggw = str_replace('h', 'ん' , $ggggw);
	 $ggggw = str_replace('j', 'ﾌ' , $ggggw);
  	 $ggggw = str_replace('k', 'ズ' , $ggggw);
	 $ggggw = str_replace('l', 'ﾚ' , $ggggw);
  	 $ggggw = str_replace('z', '乙' , $ggggw);
	 $ggggw = str_replace('x', 'ﾒ' , $ggggw);
  	 $ggggw = str_replace('c', 'ζ' , $ggggw);
	 $ggggw = str_replace('v', 'Џ' , $ggggw);
  	 $ggggw = str_replace('b', '乃' , $ggggw);
  	 $ggggw = str_replace('n', '刀' , $ggggw);
	 $ggggw = str_replace('m', 'ᄊ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞??†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','بّـ',$ggggw); 
$ggggw = str_replace('ت','ﭥ',$ggggw);
$ggggw = str_replace('ث','ث',$ggggw); 
$ggggw = str_replace('ج','چ',$ggggw);  
$ggggw = str_replace('ح','פ',$ggggw); 
$ggggw = str_replace('خ','ڂ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ذ','ذ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','ز',$ggggw); 
$ggggw = str_replace('س','س',$ggggw); 
$ggggw = str_replace('ش','ش',$ggggw); 
$ggggw = str_replace('ص','ص',$ggggw); 
$ggggw = str_replace('ض','ضَّ',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ظ',$ggggw); 
$ggggw = str_replace('ع','عّ',$ggggw); 
$ggggw = str_replace('غ','غَ ',$ggggw); 
$ggggw = str_replace('ف','ف̲ ',$ggggw); 
$ggggw = str_replace('ق','ق',$ggggw); 
$ggggw = str_replace('ك','ڪْ',$ggggw); 
$ggggw = str_replace('ل','ﻟ̣̣',$ggggw);
$ggggw = str_replace('م','م',$ggggw); 
$ggggw = str_replace('ن','ن',$ggggw);  
$ggggw = str_replace('ه','ه',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('a', 'Á', $ggggw);
$ggggw = str_replace('b', 'ß', $ggggw);
$ggggw = str_replace('c', 'Č', $ggggw);
$ggggw = str_replace('d', 'Ď', $ggggw);
$ggggw = str_replace('e', 'Ĕ', $ggggw);
$ggggw = str_replace('f', 'Ŧ', $ggggw);
$ggggw = str_replace('g', 'Ğ', $ggggw);
$ggggw = str_replace('h', 'Ĥ', $ggggw);
$ggggw = str_replace('i', 'Ĩ', $ggggw);
$ggggw = str_replace('j', 'Ĵ', $ggggw);
$ggggw = str_replace('k', 'Ķ', $ggggw);
$ggggw = str_replace('l', 'Ĺ', $ggggw);
$ggggw = str_replace('m', 'M', $ggggw);
$ggggw = str_replace('n', 'Ń', $ggggw);
$ggggw = str_replace('o', 'Ő', $ggggw);
$ggggw = str_replace('p', 'P', $ggggw);
$ggggw = str_replace('q', 'Q', $ggggw);
$ggggw = str_replace('r', 'Ŕ', $ggggw);
$ggggw = str_replace('s', 'Ś', $ggggw);
$ggggw = str_replace('t', 'Ť', $ggggw);
$ggggw = str_replace('u', 'Ú', $ggggw);
$ggggw = str_replace('v', 'V', $ggggw);
$ggggw = str_replace('w', 'Ŵ', $ggggw);
$ggggw = str_replace('x', 'Ж', $ggggw);
$ggggw = str_replace('y', 'Ŷ', $ggggw);
$ggggw = str_replace('z', 'Ź', $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','بِ',$ggggw); 
$ggggw = str_replace('ت','ت̲',$ggggw);
$ggggw = str_replace('ث','ثْ',$ggggw); 
$ggggw = str_replace('ج','چ',$ggggw);  
$ggggw = str_replace('ح','ح',$ggggw); 
$ggggw = str_replace('خ','خ',$ggggw); 
$ggggw = str_replace('د','دّ',$ggggw); 
$ggggw = str_replace('ذ','ذّ',$ggggw); 
$ggggw = str_replace('ر','رّ',$ggggw); 
$ggggw = str_replace('ز','زَ',$ggggw); 
$ggggw = str_replace('س','ﺳ̲ ',$ggggw); 
$ggggw = str_replace('ش','ﺷ̲ ',$ggggw); 
$ggggw = str_replace('ص','صـ',$ggggw); 
$ggggw = str_replace('ض','ضَ',$ggggw); 
$ggggw = str_replace('ط','طً',$ggggw); 
$ggggw = str_replace('ظ','ظـ',$ggggw); 
$ggggw = str_replace('ع','ﻋ',$ggggw); 
$ggggw = str_replace('غ','ﻏ̣̐ ',$ggggw); 
$ggggw = str_replace('ف','قّـ',$ggggw); 
$ggggw = str_replace('ق','قّـ',$ggggw); 
$ggggw = str_replace('ك','ڪ',$ggggw); 
$ggggw = str_replace('ل','ڵـ',$ggggw);
$ggggw = str_replace('م','ـمـ',$ggggw); 
$ggggw = str_replace('ن','ﻧ̲ ـ',$ggggw);  
$ggggw = str_replace('ه','ﮬ̲̌ﮧ',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('q', 'ҩ' , $ggggw);
  	 $ggggw = str_replace('w', 'ω' , $ggggw);
	 $ggggw = str_replace('e', '૯' , $ggggw);
  	 $ggggw = str_replace('r', 'Ր' , $ggggw);
	 $ggggw = str_replace('t', '੮' , $ggggw);
  	 $ggggw = str_replace('y', 'ע' , $ggggw);
	 $ggggw = str_replace('u', 'υ' , $ggggw);
  	 $ggggw = str_replace('i', 'ɿ' , $ggggw);
	 $ggggw = str_replace('o', '૦' , $ggggw);
  	 $ggggw = str_replace('p', 'ƿ' , $ggggw);
	 $ggggw = str_replace('a', 'ค' , $ggggw);
  	 $ggggw = str_replace('s', 'ς' , $ggggw);
	 $ggggw = str_replace('d', 'ძ' , $ggggw);
  	 $ggggw = str_replace('f', 'Բ' , $ggggw);
	 $ggggw = str_replace('g', '૭' , $ggggw);
  	 $ggggw = str_replace('h', 'Һ' , $ggggw);
	 $ggggw = str_replace('j', 'ʆ' , $ggggw);
  	 $ggggw = str_replace('k', 'қ' , $ggggw);
	 $ggggw = str_replace('l', 'Ն' , $ggggw);
  	 $ggggw = str_replace('z', 'ઽ' , $ggggw);
	 $ggggw = str_replace('x', '૪' , $ggggw);
  	 $ggggw = str_replace('c', '८' , $ggggw);
	 $ggggw = str_replace('v', '౮' , $ggggw);
  	 $ggggw = str_replace('b', 'ც' , $ggggw);
  	 $ggggw = str_replace('n', 'Ո' , $ggggw);
	 $ggggw = str_replace('m', 'ɱ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','بّـ',$ggggw); 
$ggggw = str_replace('ت','ت̲ ',$ggggw);
$ggggw = str_replace('ث','ثّـ',$ggggw); 
$ggggw = str_replace('ج','ﺟ',$ggggw);  
$ggggw = str_replace('ح','ﺣّ͠ـ',$ggggw); 
$ggggw = str_replace('خ','ﺣ͠ ',$ggggw); 
$ggggw = str_replace('د','دّ',$ggggw); 
$ggggw = str_replace('ذ','دّ',$ggggw); 
$ggggw = str_replace('ر','ڔ',$ggggw); 
$ggggw = str_replace('ز','زْ',$ggggw); 
$ggggw = str_replace('س','سُ',$ggggw); 
$ggggw = str_replace('ش','ﺷ͠ ',$ggggw); 
$ggggw = str_replace('ص','ﺼ',$ggggw); 
$ggggw = str_replace('ض','ضَّ',$ggggw); 
$ggggw = str_replace('ط','طً',$ggggw); 
$ggggw = str_replace('ظ','ظـ',$ggggw); 
$ggggw = str_replace('ع','عـ',$ggggw); 
$ggggw = str_replace('غ','غَ',$ggggw); 
$ggggw = str_replace('ف','ﻓ̲',$ggggw); 
$ggggw = str_replace('ق','ﻗ̮ـ̃',$ggggw); 
$ggggw = str_replace('ك','ﮖ',$ggggw); 
$ggggw = str_replace('ل','ﻟ̲ ',$ggggw);
$ggggw = str_replace('م','ﻣ̲',$ggggw); 
$ggggw = str_replace('ن','ﻧ̲',$ggggw);  
$ggggw = str_replace('ه','ﮬ̲̌ﮧ',$ggggw); 
$ggggw = str_replace('و','ﯚ',$ggggw); 
$ggggw = str_replace('ي','يَ',$ggggw);

$ggggw = str_replace('q', 'Ꝙ' ,$ggggw);
  	 $ggggw = str_replace('w', 'Ѡ' ,$ggggw);
	 $ggggw = str_replace('e', 'Ɛ' ,$ggggw);
  	 $ggggw = str_replace('r', 'Ɽ' ,$ggggw);
	 $ggggw = str_replace('t', 'Ͳ' ,$ggggw);
  	 $ggggw = str_replace('y', 'Ỿ' ,$ggggw);
	 $ggggw = str_replace('u', 'Ʊ' ,$ggggw);
  	 $ggggw = str_replace('i', 'ị' ,$ggggw);
	 $ggggw = str_replace('o', 'Ỗ' ,$ggggw);
  	 $ggggw = str_replace('p', 'Ꝓ' ,$ggggw);
	 $ggggw = str_replace('a', 'Λ' ,$ggggw);
  	 $ggggw = str_replace('s', 'Ṥ' ,$ggggw);
	 $ggggw = str_replace('d', 'δ' ,$ggggw);
  	 $ggggw = str_replace('f', 'Բ' ,$ggggw);
	 $ggggw = str_replace('g', '₲' ,$ggggw);
  	 $ggggw = str_replace('h', 'Ḩ' ,$ggggw);
	 $ggggw = str_replace('j', 'Ĵ' ,$ggggw);
  	 $ggggw = str_replace('k', 'Ҡ' ,$ggggw);
	 $ggggw = str_replace('l', 'Ⱡ' ,$ggggw);
  	 $ggggw = str_replace('z', 'Ꙃ' ,$ggggw);
	 $ggggw = str_replace('x', 'Ӿ' ,$ggggw);
  	 $ggggw = str_replace('c', 'Ƈ' ,$ggggw);
	 $ggggw = str_replace('v', 'Ѵ' ,$ggggw);
  	 $ggggw = str_replace('b', 'ß' ,$ggggw);
  	 $ggggw = str_replace('n', 'ⴂ' ,$ggggw);
	 $ggggw = str_replace('m', 'ⴅ' ,$ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);
}
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','ﭜ',$ggggw); 
$ggggw = str_replace('ج','چ',$ggggw); 
$ggggw = str_replace('ث','ﭦ',$ggggw); 
$ggggw = str_replace('ت','ﭠ',$ggggw); 
$ggggw = str_replace('ح','ڂ',$ggggw); 
$ggggw = str_replace('خ','خ',$ggggw); 
$ggggw = str_replace('د','ﮃ',$ggggw); 
$ggggw = str_replace('ذ','ڎ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','ژ',$ggggw); 
$ggggw = str_replace('س','ﺳ̭͠ ',$ggggw); 
$ggggw = str_replace('ش','شَ',$ggggw); 
$ggggw = str_replace('ص','ڝ',$ggggw); 
$ggggw = str_replace('ض','ڞ',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ڟ',$ggggw); 
$ggggw = str_replace('ع','؏',$ggggw); 
$ggggw = str_replace('غ','ﻏ̐ ',$ggggw); 
$ggggw = str_replace('ف','ڤ',$ggggw); 
$ggggw = str_replace('ق','ڦ',$ggggw); 
$ggggw = str_replace('ك','ڳ',$ggggw); 
$ggggw = str_replace('ل','لَ',$ggggw);
$ggggw = str_replace('م','م',$ggggw); 
$ggggw = str_replace('ن','ڻ',$ggggw);  
$ggggw = str_replace('ه','هـﮧ',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','يِّ',$ggggw); 

$ggggw = str_replace('q', 'Ǫ' , $ggggw);
  	 $ggggw = str_replace('w', 'Ш' , $ggggw);
	 $ggggw = str_replace('e', 'Ξ' , $ggggw);
  	 $ggggw = str_replace('r', 'Я' , $ggggw);
	 $ggggw = str_replace('t', '₮' , $ggggw);
  	 $ggggw = str_replace('y', 'Џ' , $ggggw);
	 $ggggw = str_replace('u', 'Ǚ' , $ggggw);
  	 $ggggw = str_replace('i', 'ł' , $ggggw);
	 $ggggw = str_replace('o', 'Ф' , $ggggw);
  	 $ggggw = str_replace('p', 'ק' , $ggggw);
	 $ggggw = str_replace('a', 'Λ' , $ggggw);
  	 $ggggw = str_replace('s', 'Ŝ' , $ggggw);
	 $ggggw = str_replace('d', 'Ð' , $ggggw);
  	 $ggggw = str_replace('f', 'Ŧ' , $ggggw);
	 $ggggw = str_replace('g', '₲' , $ggggw);
  	 $ggggw = str_replace('h', 'Ḧ' , $ggggw);
	 $ggggw = str_replace('j', 'J' , $ggggw);
  	 $ggggw = str_replace('k', 'К' , $ggggw);
	 $ggggw = str_replace('l', 'Ł' , $ggggw);
  	 $ggggw = str_replace('z', 'Ꙃ' , $ggggw);
	 $ggggw = str_replace('x', 'Ж' , $ggggw);
  	 $ggggw = str_replace('c', 'Ͼ' , $ggggw);
	 $ggggw = str_replace('v', 'Ṽ' , $ggggw);
  	 $ggggw = str_replace('b', 'Б' , $ggggw);
  	 $ggggw = str_replace('n', 'Л' , $ggggw);
	 $ggggw = str_replace('m', 'Ɱ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);
   }
   if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = str_replace('ا','آ̀',$text); 
$ggggw = str_replace('ب','ب',$ggggw); 
$ggggw = str_replace('ت','ت',$ggggw);
$ggggw = str_replace('ث','ث',$ggggw); 
$ggggw = str_replace('ج','ج',$ggggw);  
$ggggw = str_replace('ح','ح̀',$ggggw); 
$ggggw = str_replace('خ','خ',$ggggw); 
$ggggw = str_replace('د','د̀',$ggggw); 
$ggggw = str_replace('ذ','ذ̀',$ggggw); 
$ggggw = str_replace('ر','ر̀',$ggggw); 
$ggggw = str_replace('ز','ز',$ggggw); 
$ggggw = str_replace('س','س̀́',$ggggw); 
$ggggw = str_replace('ش','ش̀́',$ggggw); 
$ggggw = str_replace('ص','ص̀́',$ggggw); 
$ggggw = str_replace('ض','ض',$ggggw); 
$ggggw = str_replace('ط','ط̀́',$ggggw); 
$ggggw = str_replace('ظ','ظ̀́',$ggggw); 
$ggggw = str_replace('ع','ع̀́',$ggggw); 
$ggggw = str_replace('غ','غ',$ggggw); 
$ggggw = str_replace('ف','ف̀',$ggggw); 
$ggggw = str_replace('ق','ق̀',$ggggw); 
$ggggw = str_replace('ك','ك',$ggggw); 
$ggggw = str_replace('ل','ل',$ggggw);
$ggggw = str_replace('م','م̀',$ggggw); 
$ggggw = str_replace('ن','ن̀',$ggggw);  
$ggggw = str_replace('ه','ه̀',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('a', '𝒂', $ggggw);
$ggggw = str_replace('b', '𝒃', $ggggw);
$ggggw = str_replace('c', '𝒄', $ggggw);
$ggggw = str_replace('d', '𝒅', $ggggw);
$ggggw = str_replace('e', '𝒆', $ggggw);
$ggggw = str_replace('f', '𝒓', $ggggw);
$ggggw = str_replace('g', '𝒈', $ggggw);
$ggggw = str_replace('h', '𝒉', $ggggw);
$ggggw = str_replace('i', '𝒊', $ggggw);
$ggggw = str_replace('j', '𝒋', $ggggw);
$ggggw = str_replace('k', '𝒌', $ggggw);
$ggggw = str_replace('l', '𝒍', $ggggw);
$ggggw = str_replace('m', '𝒎', $ggggw);
$ggggw = str_replace('n', '𝒏', $ggggw);
$ggggw = str_replace('o', '𝒐', $ggggw);
$ggggw = str_replace('p', '𝒑', $ggggw);
$ggggw = str_replace('q', '𝒒', $ggggw);
$ggggw = str_replace('r', '𝒓', $ggggw);
$ggggw = str_replace('s', '𝒔', $ggggw);
$ggggw = str_replace('t', '𝒕', $ggggw);
$ggggw = str_replace('u', '𝒖', $ggggw);
$ggggw = str_replace('v', '𝒗', $ggggw);
$ggggw = str_replace('w', '𝒘', $ggggw);
$ggggw = str_replace('x', '𝒙', $ggggw);
$ggggw = str_replace('y', '𝒚', $ggggw);
$ggggw = str_replace('z', '𝒛', $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);
}

if($text != '/start' and $text != 'اذاعه'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $ggggw = $text;
$ggggw = str_replace('a','⎛α⎞',$ggggw); 
$ggggw = str_replace('b','⎛в⎞',$ggggw); 
$ggggw = str_replace('c','⎛c⎞',$ggggw); 
$ggggw = str_replace('d','⎛ɒ⎞',$ggggw); 
$ggggw = str_replace('e','⎛є⎞',$ggggw); 
$ggggw = str_replace('f','⎛f⎞',$ggggw); 
$ggggw = str_replace('g','⎛ɢ⎞',$ggggw); 
$ggggw = str_replace('h','⎛н⎞',$ggggw); 
$ggggw = str_replace('i','⎛ɪ⎞',$ggggw); 
$ggggw = str_replace('j','⎛ᴊ⎞',$ggggw); 
$ggggw = str_replace('s','⎛ĸ⎞',$ggggw); 
$ggggw = str_replace('l','⎛ℓ⎞',$ggggw); 
$ggggw = str_replace('m','⎛м⎞',$ggggw); 
$ggggw = str_replace('n','⎛и⎞',$ggggw); 
$ggggw = str_replace('o','⎛σ⎞',$ggggw); 
$ggggw = str_replace('p','⎛ρ⎞',$ggggw); 
$ggggw = str_replace('q','⎛q⎞',$ggggw); 
$ggggw = str_replace('r','⎛я⎞',$ggggw); 
$ggggw = str_replace('f','⎛s⎞',$ggggw); 
$ggggw = str_replace('t','⎛τ⎞ ',$ggggw); 
$ggggw = str_replace('u','⎛υ⎞ ',$ggggw); 
$ggggw = str_replace('v','⎛v⎞',$ggggw); 
$ggggw = str_replace('w','⎛ω⎞',$ggggw); 
$ggggw = str_replace('x','⎛x⎞',$ggggw); 
$ggggw = str_replace('y','⎛y⎞',$ggggw); 
$ggggw = str_replace('z','⎛z⎞',$ggggw); 
 
$ggggw = str_replace('ض','ضِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ص','صِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ث','ثِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ق','قِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ف','فِٰ͒ـِﮧۢ',$ggggw); 
$ggggw = str_replace('غ','غِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ع','عِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ه','ۿۿہ',$ggggw); 
$ggggw = str_replace('خ','خِٰ̐ـﮧِۢ',$ggggw); 
$ggggw = str_replace('ح','حِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ج','جِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ش','شِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('س','سِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ي','يِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ب','بِٰـِﮧۢ',$ggggw);
$ggggw = str_replace('ل','لِٰـِﮧۢ',$ggggw); 
$ggggw = str_replace('ا','آ',$ggggw); 
$ggggw = str_replace('ت','تِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ن','نِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('م','مِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ك','ڪِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ة','ةً',$ggggw); 
$ggggw = str_replace('ء','ء',$ggggw); 
$ggggw = str_replace('ظ','ظِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ط','طِٰـﮧِۢ',$ggggw); 
 $ggggw = str_replace('ذ','ذٰ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ز','ژ',$ggggw); 
$ggggw = str_replace('ر','رٰ',$ggggw); 
$ggggw = str_replace('و','ﯛ̲୭',$ggggw); 
 $ggggw = str_replace('ى','ىٍ',$ggggw);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$ggggw."".$smile
   ]);
}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','ᗩ',$text);
$ARMOF = str_replace("b","ᗷ",$ARMOF);
$ARMOF = str_replace("c","ᑕ",$ARMOF);
$ARMOF = str_replace("d","ᗪ",$ARMOF);
$ARMOF = str_replace("e","E",$ARMOF);
$ARMOF = str_replace("E","E",$ARMOF);
$ARMOF = str_replace("g","G",$ARMOF);
$ARMOF = str_replace("h","ᕼ",$ARMOF);
$ARMOF = str_replace("i","I",$ARMOF);
$ARMOF = str_replace("j","ᒍ",$ARMOF);
$ARMOF = str_replace("k","K",$ARMOF);
$ARMOF = str_replace("l","ᒪ",$ARMOF);
$ARMOF = str_replace("m","ᗰ",$ARMOF);
$ARMOF = str_replace("n","ᑎ",$ARMOF);
$ARMOF = str_replace("o","O",$ARMOF);
$ARMOF = str_replace("p","ᑭ",$ARMOF);
$ARMOF = str_replace("q","ᑫ",$ARMOF);
$ARMOF = str_replace("r","ᖇ",$ARMOF);
$ARMOF = str_replace("s","ᔕ",$ARMOF);
$ARMOF = str_replace("t","T",$ARMOF);
$ARMOF = str_replace("u","ᑌ",$ARMOF);
$ARMOF = str_replace("v","ᐯ",$ARMOF);
$ARMOF = str_replace("w","ᗯ",$ARMOF);
$ARMOF = str_replace("x","᙭",$ARMOF);
$ARMOF = str_replace("y","Y",$ARMOF);
$ARMOF = str_replace("z","ᘔ",$ARMOF);

$ARMOF = str_replace('ض','᎗ᘞ̇',$ARMOF); 
$ARMOF = str_replace('ص','᎗ᘗ',$ARMOF); 
$ARMOF = str_replace('ث','᎗̇̈ɹ',$ARMOF); 
$ARMOF = str_replace('ق','ᓆ',$ARMOF); 
$ARMOF = str_replace('ف','ᓅ',$ARMOF); 
$ARMOF = str_replace('غ','᎗ჺ',$ARMOF); 
$ARMOF = str_replace('ع','᎗ϛ',$ARMOF); 
$ARMOF = str_replace('ه','᎗බ',$ARMOF); 
$ARMOF = str_replace('خ','ᓘ',$ARMOF); 
$ARMOF = str_replace('ح','ᓗ',$ARMOF); 
$ARMOF = str_replace('ج','ᓗฺ',$ARMOF); 
$ARMOF = str_replace('ش','᎗ɹ̇̈ɹɹ',$ARMOF); 
$ARMOF = str_replace('س','᎗ɹɹɹ',$ARMOF); 
$ARMOF = str_replace('ي','᎗̤ɹ',$ARMOF); 
$ARMOF = str_replace('ب','᎗̣ɹ',$ARMOF);
$ARMOF = str_replace('ل','⅃',$ARMOF); 
$ARMOF = str_replace('ا','Ȋ',$ARMOF); 
$ARMOF = str_replace('ت','᎗̈ɹ',$ARMOF); 
$ARMOF = str_replace('ن','᎗̇ɹ',$ARMOF); 
$ARMOF = str_replace('ܭ','ك',$ARMOF); 
$ARMOF = str_replace('م','ᓄ',$ARMOF); 
$ARMOF = str_replace('ة','᎗Ꭷ',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','᎗̇Ь',$ARMOF); 
$ARMOF = str_replace('ط','᎗Ь',$ARMOF); 
 $ARMOF = str_replace('ذ','̇ↄ',$ARMOF); 
$ARMOF = str_replace('د','ↄ',$ARMOF); 
$ARMOF = str_replace('ز','j',$ARMOF); 
$ARMOF = str_replace('ر','ȷ',$ARMOF); 
$ARMOF = str_replace('و','g',$ARMOF); 
 $ARMOF = str_replace('ى','ʟɾʅ',$ARMOF);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','Ꭿ',$text);
$ARMOF = str_replace("b","Ᏸ",$ARMOF);
$ARMOF = str_replace("c","Ꮸ",$ARMOF);
$ARMOF = str_replace("d","Ꮷ",$ARMOF);
$ARMOF = str_replace("e","Ꮛ",$ARMOF);
$ARMOF = str_replace("f","Ꭶ",$ARMOF);
$ARMOF = str_replace("g","Ᏻ",$ARMOF);
$ARMOF = str_replace("h","Ᏺ",$ARMOF);
$ARMOF = str_replace("i","Ꭸ",$ARMOF);
$ARMOF = str_replace("j","Ꮰ",$ARMOF);
$ARMOF = str_replace("k","Ꮵ",$ARMOF);
$ARMOF = str_replace("l","Ꮭ",$ARMOF);
$ARMOF = str_replace("m","ᗰ",$ARMOF);
$ARMOF = str_replace("n","Ꮑ",$ARMOF);
$ARMOF = str_replace("o","Ꭷ",$ARMOF);
$ARMOF = str_replace("p","Ꭾ",$ARMOF);
$ARMOF = str_replace("q","Ꮕ",$ARMOF);
$ARMOF = str_replace("r","ᖇ",$ARMOF);
$ARMOF = str_replace("s","Ꮥ",$ARMOF);
$ARMOF = str_replace("t","Ꮱ",$ARMOF);
$ARMOF = str_replace("u","Ꮼ",$ARMOF);
$ARMOF = str_replace("v","Ꮙ",$ARMOF);
$ARMOF = str_replace("w","Ꮗ",$ARMOF);
$ARMOF = str_replace("x","Ꮂ",$ARMOF);
$ARMOF = str_replace("y","Ꮍ",$ARMOF);
$ARMOF = str_replace("z","ᔓ",$ARMOF);
                     
$ARMOF = str_replace('ض','ضٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ص','صٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ث','ثٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ق','قٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ف','فٰہٰٖ',$ARMOF);
$ARMOF = str_replace('غ','غٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ع','عٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ه','هٰہٰٖ',$ARMOF);
$ARMOF = str_replace('خ','خٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ح','حٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ج','جٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ش','شٰہٰٖ',$ARMOF);
$ARMOF = str_replace('س','سٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ي','يٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ب','بٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ل','لہٰٖ',$ARMOF);
$ARMOF = str_replace('ا','اٰ',$ARMOF);
$ARMOF = str_replace('ت','تٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ن','نٰہٰٖ',$ARMOF);
$ARMOF = str_replace('م','مٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ك','كٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ة','ةً',$ARMOF);
$ARMOF = str_replace('ء','ء',$ARMOF);
$ARMOF = str_replace('ظ','ظٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ط','طٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ذ','ذٖ',$ARMOF);
$ARMOF = str_replace('د','دٰ',$ARMOF);
$ARMOF = str_replace('ز','زٖ',$ARMOF);
$ARMOF = str_replace('ر','رٰ',$ARMOF);
$ARMOF = str_replace('و','وٰ',$ARMOF);
$ARMOF = str_replace('ى','ى',$ARMOF);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a',"ᵃ",$text);
$ARMOF = str_replace("b","ᵇ",$ARMOF);
$ARMOF = str_replace("c","ᶜ",$ARMOF);
$ARMOF = str_replace("d","ᵈ",$ARMOF);
$ARMOF = str_replace("e","ᵉ",$ARMOF);
$ARMOF = str_replace("f","ᶠ",$ARMOF);
$ARMOF = str_replace("g","ᵍ",$ARMOF);
$ARMOF = str_replace("h","ʰ",$ARMOF);
$ARMOF = str_replace("i","ᶤ",$ARMOF);
$ARMOF = str_replace("j","ʲ",$ARMOF);
$ARMOF = str_replace("k","ᵏ",$ARMOF);
$ARMOF = str_replace("l","ˡ",$ARMOF);
$ARMOF = str_replace("m","ᵐ",$ARMOF);
$ARMOF = str_replace("n","ᶰ",$ARMOF);
$ARMOF = str_replace("o","ᵒ",$ARMOF);
$ARMOF = str_replace("p","ᵖ",$ARMOF);
$ARMOF = str_replace("q","ᵠ",$ARMOF);
$ARMOF = str_replace("r","ʳ",$ARMOF);
$ARMOF = str_replace("s","ˢ",$ARMOF);
$ARMOF = str_replace("t","ᵗ",$ARMOF);
$ARMOF = str_replace("u","ᵘ",$ARMOF);
$ARMOF = str_replace("v","ᵛ",$ARMOF);
$ARMOF = str_replace("w","ʷ",$ARMOF);
$ARMOF = str_replace("x","ˣ",$ARMOF);
$ARMOF = str_replace("y","ʸ",$ARMOF);
$ARMOF = str_replace("z","ᶻ",$ARMOF);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','Ａ',$text);
$ARMOF = str_replace("b","Ｂ",$ARMOF);
$ARMOF = str_replace("c","Ｃ",$ARMOF);
$ARMOF = str_replace("d","Ｄ",$ARMOF);
$ARMOF = str_replace("e","Ｅ",$ARMOF);
$ARMOF = str_replace("E","Ｆ",$ARMOF);
$ARMOF = str_replace("g","Ｇ",$ARMOF);
$ARMOF = str_replace("h","Ｈ",$ARMOF);
$ARMOF = str_replace("i","Ｉ",$ARMOF);
$ARMOF = str_replace("j","Ｊ",$ARMOF);
$ARMOF = str_replace("k","Ｋ",$ARMOF);
$ARMOF = str_replace("l","Ｌ",$ARMOF);
$ARMOF = str_replace("m","Ｍ",$ARMOF);
$ARMOF = str_replace("n","Ｎ",$ARMOF);
$ARMOF = str_replace("o","Ｏ",$ARMOF);
$ARMOF = str_replace("p","Ｐ",$ARMOF);
$ARMOF = str_replace("q","Ｑ",$ARMOF);
$ARMOF = str_replace("r","Ｒ",$ARMOF);
$ARMOF = str_replace("s","Ｓ",$ARMOF);
$ARMOF = str_replace("t","Ｔ",$ARMOF);
$ARMOF = str_replace("u","U",$ARMOF);
$ARMOF = str_replace("v","Ｖ",$ARMOF);
$ARMOF = str_replace("w","Ｗ",$ARMOF);
$ARMOF = str_replace("x","Ｘ",$ARMOF);
$ARMOF = str_replace("y","Ｙ",$ARMOF);
$ARMOF = str_replace("z","Ｚ",$ARMOF);

$ARMOF = str_replace('ع','عٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ض','ضٰہٰٖ ',$ARMOF); 
$ARMOF = str_replace('ص','صٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ث','ثٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ق','قٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ف','فٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('غ','غٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ه','هٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('خ','خٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ح','حٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ج','جٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ش','شٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('س','سٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ب','بٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ي','يٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ل','لہٰٖ',$ARMOF); 
$ARMOF = str_replace('ا','اٰ',$ARMOF); 
$ARMOF = str_replace('ت','تٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ن','نٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('م','مٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ك','كٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ظ','ظٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ء','ءِ',$ARMOF); 
$ARMOF = str_replace('ذ','ذٖ',$ARMOF); 
$ARMOF = str_replace('ط','طٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('د','دٰ',$ARMOF); 
$ARMOF = str_replace('ز','زٰ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','وَٰ',$ARMOF); 
$ARMOF = str_replace('ى','ىٰ',$ARMOF); 
 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','𝗔',$text); 
$ARMOF = str_replace("b","𝗕",$ARMOF); 
$ARMOF = str_replace("c","𝗖",$ARMOF); 
$ARMOF = str_replace("d","𝗗",$ARMOF); 
$ARMOF = str_replace("e","𝗘",$ARMOF); 
$ARMOF = str_replace("f","𝗙",$ARMOF); 
$ARMOF = str_replace("g","𝗚",$ARMOF); 
$ARMOF = str_replace("h","𝗛",$ARMOF); 
$ARMOF = str_replace("i","𝗜",$ARMOF); 
$ARMOF = str_replace("j","𝗝",$ARMOF); 
$ARMOF = str_replace("k","𝗞",$ARMOF); 
$ARMOF = str_replace("l","𝗟",$ARMOF); 
$ARMOF = str_replace("m","𝗠",$ARMOF); 
$ARMOF = str_replace("n","𝗡",$ARMOF); 
$ARMOF = str_replace("o","𝗢",$ARMOF); 
$ARMOF = str_replace("p","𝗣",$ARMOF); 
$ARMOF = str_replace("q","𝗤",$ARMOF); 
$ARMOF = str_replace("r","𝗥",$ARMOF); 
$ARMOF = str_replace("s","𝗦",$ARMOF); 
$ARMOF = str_replace("t","𝗧",$ARMOF); 
$ARMOF = str_replace("u","𝗨",$ARMOF); 
$ARMOF = str_replace("v","𝗩",$ARMOF); 
$ARMOF = str_replace("w","𝗪",$ARMOF); 
$ARMOF = str_replace("x","𝗫",$ARMOF); 
$ARMOF = str_replace("y","𝗬",$ARMOF); 
$ARMOF = str_replace("z","𝗭",$ARMOF); 
                    
$ARMOF = str_replace('ض','ضـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ص','صـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ث','ثـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ق','قـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ف','فـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('غ','غـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ع','عـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ه','هـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('خ','خـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ح','حـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ج','جـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ش','شـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('س','سـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ي','يـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ب','بـٰ̲ـہ',$ARMOF);
$ARMOF = str_replace('ل','لـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ا','اٰ',$ARMOF); 
$ARMOF = str_replace('ت','تـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ن','نـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('م','مـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ك','كـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ط','طـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ذ','ذٰ',$ARMOF); 
$ARMOF = str_replace('د','دٰ',$ARMOF); 
$ARMOF = str_replace('ز','زٰ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','وٰ',$ARMOF); 
$ARMOF = str_replace('ى','ىَ',$ARMOF); 

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}


if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','⧼α⧽',$text); 
$ARMOF = str_replace('b','⧼в⧽',$ARMOF); 
$ARMOF = str_replace('c','⧼c⧽',$ARMOF); 
$ARMOF = str_replace('d','⧼ɒ⧽',$ARMOF); 
$ARMOF = str_replace('e','⧼є⧽',$ARMOF); 
$ARMOF = str_replace('f','⧼f⧽',$ARMOF); 
$ARMOF = str_replace('g','⧼ɢ⧽',$ARMOF); 
$ARMOF = str_replace('h','⧼н⧽',$ARMOF); 
$ARMOF = str_replace('i','⧼ɪ⧽',$ARMOF); 
$ARMOF = str_replace('j','⧼ᴊ⧽',$ARMOF); 
$ARMOF = str_replace('k','⧼ĸ⧽',$ARMOF); 
$ARMOF = str_replace('l','⧼ℓ⧽',$ARMOF); 
$ARMOF = str_replace('m','⧼м⧽',$ARMOF); 
$ARMOF = str_replace('n','⧼и⧽',$ARMOF); 
$ARMOF = str_replace('o','⧼σ⧽',$ARMOF); 
$ARMOF = str_replace('p','⧼ρ⧽',$ARMOF); 
$ARMOF = str_replace('q','⧼q⧽',$ARMOF); 
$ARMOF = str_replace('r','⧼я⧽',$ARMOF); 
$ARMOF = str_replace('s','⧼s⧽',$ARMOF); 
$ARMOF = str_replace('t','⧼τ⧽',$ARMOF); 
$ARMOF = str_replace('u','⧼υ⧽',$ARMOF); 
$ARMOF = str_replace('v','⧼v⧽',$ARMOF); 
$ARMOF = str_replace('w','⧼ω⧽',$ARMOF); 
$ARMOF = str_replace('x','⧼x⧽',$ARMOF); 
$ARMOF = str_replace('y','⧼y⧽',$ARMOF); 
$ARMOF = str_replace('z','⧼z⧽',$ARMOF); 

$ARMOF = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$ARMOF); 
$ARMOF = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$ARMOF); 
$ARMOF = str_replace('ث','ث̲ꫭـﮧ',$ARMOF); 
$ARMOF = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$ARMOF); 
$ARMOF = str_replace('ف','',$ARMOF); 
$ARMOF = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$ARMOF); 
$ARMOF = str_replace('ع','غـّٰ̐ہٰٰ',$ARMOF); 
$ARMOF = str_replace('ه','ٰ̲ھہ',$ARMOF); 
$ARMOF = str_replace('خ','خ̲ﮧ',$ARMOF); 
$ARMOF = str_replace('ح','ح̲ꪳـﮧ',$ARMOF); 
$ARMOF = str_replace('ج','ج̲ꪸـﮧ',$ARMOF); 
$ARMOF = str_replace('ش','ش̲ꪾـﮧ',$ARMOF); 
$ARMOF = str_replace('س','سـ̷ٰٰﮧْ',$ARMOF); 
$ARMOF = str_replace('ي','يـِٰ̲ﮧ',$ARMOF); 
$ARMOF = str_replace('ب','ب̲ꪰـﮧ',$ARMOF);
$ARMOF = str_replace('ل','لٍُـّٰ̐ہ',$ARMOF); 
$ARMOF = str_replace('ا',' ཻا ',$ARMOF); 
$ARMOF = str_replace('ت','تـٰۧﮧ',$ARMOF); 
$ARMOF = str_replace('ن','نٰ̲̐ـﮧْ',$ARMOF); 
$ARMOF = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$ARMOF); 
$ARMOF = str_replace('ك','كـِّﮧْٰٖ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظَـ๋͜ﮧْ',$ARMOF); 
$ARMOF = str_replace('ط','ط̲꫁ـﮧ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذٖ',$ARMOF); 
$ARMOF = str_replace('د','دُ',$ARMOF); 
$ARMOF = str_replace('ز','ژٰ',$ARMOF); 
$ARMOF = str_replace('ر','',$ARMOF); 
$ARMOF = str_replace('و','ﯛ૭',$ARMOF); 
 $ARMOF = str_replace('ى','ىِ',$ARMOF); 

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}


if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ME0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','🅰',$text); 
$ARMOF = str_replace('b','🅱',$ARMOF); 
$ARMOF = str_replace('c','🅲',$ARMOF); 
$ARMOF = str_replace('d','🅳',$ARMOF); 
$ARMOF = str_replace('e','🅴',$ARMOF); 
$ARMOF = str_replace('f','🅵',$ARMOF); 
$ARMOF = str_replace('g','🅶',$ARMOF); 
$ARMOF = str_replace('h','🅷',$ARMOF); 
$ARMOF = str_replace('i','🅸',$ARMOF); 
$ARMOF = str_replace('j','🅹',$ARMOF); 
$ARMOF = str_replace('k','🅺',$ARMOF); 
$ARMOF = str_replace('l','🅻',$ARMOF); 
$ARMOF = str_replace('m','🅼',$ARMOF); 
$ARMOF = str_replace('n','🅽',$ARMOF); 
$ARMOF = str_replace('o','🅾',$ARMOF); 
$ARMOF = str_replace('p','🅿',$ARMOF); 
$ARMOF = str_replace('q','🆀',$ARMOF); 
$ARMOF = str_replace('r','🆁',$ARMOF); 
$ARMOF = str_replace('s','🆂',$ARMOF); 
$ARMOF = str_replace('t','🆃',$ARMOF); 
$ARMOF = str_replace('u',' 🆄',$ARMOF); 
$ARMOF = str_replace('v','🆅',$ARMOF); 
$ARMOF = str_replace('w','🆆',$ARMOF); 
$ARMOF = str_replace('x','🆇',$ARMOF); 
$ARMOF = str_replace('y','🆈',$ARMOF); 
$ARMOF = str_replace('z','🆉',$ARMOF); 
 
$ARMOF = str_replace('ض','ضـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ص','صـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ث','ثـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ق','قـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('غ','غـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ع','عـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ه','ۿۿہ',$ARMOF); 
$ARMOF = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ح','حـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ج','جـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ش','شـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('س','سـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ي',' يـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ب','  بـ๋͜‏ـﮧ',$ARMOF);
$ARMOF = str_replace('ل',' لـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت','  تـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ن','نـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('م','مـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ك','ڪـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ط','طـ๋͜‏ـﮧ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذِ',$ARMOF); 
$ARMOF = str_replace('د','دٰ',$ARMOF); 
$ARMOF = str_replace('ز','زً',$ARMOF); 
$ARMOF = str_replace('ر','ر',$ARMOF); 
$ARMOF = str_replace('و','ﯛ̲୭',$ARMOF); 
 $ARMOF = str_replace('ى','ىٰ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','⎛α⎞',$text); 
$ARMOF = str_replace('b','⎛в⎞',$ARMOF); 
$ARMOF = str_replace('c','⎛c⎞',$ARMOF); 
$ARMOF = str_replace('d','⎛ɒ⎞',$ARMOF); 
$ARMOF = str_replace('e','⎛є⎞',$ARMOF); 
$ARMOF = str_replace('f','⎛f⎞',$ARMOF); 
$ARMOF = str_replace('g','⎛ɢ⎞',$ARMOF); 
$ARMOF = str_replace('h','⎛н⎞',$ARMOF); 
$ARMOF = str_replace('i','⎛ɪ⎞',$ARMOF); 
$ARMOF = str_replace('j','⎛ᴊ⎞',$ARMOF); 
$ARMOF = str_replace('k','⎛ĸ⎞',$ARMOF); 
$ARMOF = str_replace('l','⎛ℓ⎞',$ARMOF); 
$ARMOF = str_replace('m','⎛м⎞',$ARMOF); 
$ARMOF = str_replace('n','⎛и⎞',$ARMOF); 
$ARMOF = str_replace('o','⎛σ⎞',$ARMOF); 
$ARMOF = str_replace('p','⎛ρ⎞',$ARMOF); 
$ARMOF = str_replace('q','⎛q⎞',$ARMOF); 
$ARMOF = str_replace('r','⎛я⎞',$ARMOF); 
$ARMOF = str_replace('s','⎛s⎞',$ARMOF); 
$ARMOF = str_replace('t','⎛τ⎞ ',$ARMOF); 
$ARMOF = str_replace('u','⎛υ⎞ ',$ARMOF); 
$ARMOF = str_replace('v','⎛v⎞',$ARMOF); 
$ARMOF = str_replace('w','⎛ω⎞',$ARMOF); 
$ARMOF = str_replace('x','⎛x⎞',$ARMOF); 
$ARMOF = str_replace('y','⎛y⎞',$ARMOF); 
$ARMOF = str_replace('z','⎛z⎞',$ARMOF); 
 
$ARMOF = str_replace('ض','ضِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ص','صِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ث','ثِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ق','قِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ف','فِٰ͒ـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('غ','غِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ع','عِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ه','ۿۿہ',$ARMOF); 
$ARMOF = str_replace('خ','خِٰ̐ـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ح','حِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ج','جِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ش','شِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('س','سِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ي','يِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ب','بِٰـِﮧۢ',$ARMOF);
$ARMOF = str_replace('ل','لِٰـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت','تِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ن','نِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('م','مِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ك','ڪِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ط','طِٰـﮧِۢ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذٰ',$ARMOF); 
$ARMOF = str_replace('د','د',$ARMOF); 
$ARMOF = str_replace('ز','ژ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','ﯛ̲୭',$ARMOF); 
 $ARMOF = str_replace('ى','ىٍ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}


if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','̶a̶',$text); 
$ARMOF = str_replace('b','b̶',$ARMOF); 
$ARMOF = str_replace('c','c̶',$ARMOF); 
$ARMOF = str_replace('d','d̶',$ARMOF); 
$ARMOF = str_replace('e','e̶',$ARMOF); 
$ARMOF = str_replace('f','f̶',$ARMOF); 
$ARMOF = str_replace('g','g̶',$ARMOF); 
$ARMOF = str_replace('h','h̶',$ARMOF); 
$ARMOF = str_replace('i','i̶',$ARMOF); 
$ARMOF = str_replace('j','j̶',$ARMOF); 
$ARMOF = str_replace('k','k̶',$ARMOF); 
$ARMOF = str_replace('l','l̶',$ARMOF); 
$ARMOF = str_replace('m','m̶',$ARMOF); 
$ARMOF = str_replace('n','n̶',$ARMOF); 
$ARMOF = str_replace('o','o̶',$ARMOF); 
$ARMOF = str_replace('p','p̶',$ARMOF); 
$ARMOF = str_replace('q','q̶',$ARMOF); 
$ARMOF = str_replace('r','r̶',$ARMOF); 
$ARMOF = str_replace('s','s̶',$ARMOF); 
$ARMOF = str_replace('t','t̶',$ARMOF); 
$ARMOF = str_replace('u','ᵘ̶ ',$ARMOF); 
$ARMOF = str_replace('v','v̶',$ARMOF); 
$ARMOF = str_replace('w','w̶',$ARMOF); 
$ARMOF = str_replace('x','x̶',$ARMOF); 
$ARMOF = str_replace('y','y̶',$ARMOF); 
$ARMOF = str_replace('z','z̶',$ARMOF); 

 $ARMOF = str_replace('ض','ضۜہٰٰ',$ARMOF); 
$ARMOF = str_replace('ص','صۛہٰٰ',$ARMOF); 
$ARMOF = str_replace('ث','ثہٰٰ',$ARMOF); 
$ARMOF = str_replace('ق','قྀ̲ہٰٰٰ',$ARMOF); 
$ARMOF = str_replace('ف','ف͒ہٰٰ',$ARMOF); 
$ARMOF = str_replace('غ','غہٰٰ',$ARMOF); 
$ARMOF = str_replace('ع','ۤ؏ـ',$ARMOF); 
$ARMOF = str_replace('ه','ھہ',$ARMOF); 
$ARMOF = str_replace('خ','خٰ̐ہ',$ARMOF); 
$ARMOF = str_replace('ح','حہٰٰ',$ARMOF); 
$ARMOF = str_replace('ج','جْۧ ',$ARMOF); 
$ARMOF = str_replace('ش','شِٰہٰٰ',$ARMOF); 
$ARMOF = str_replace('س','سٰٰٓ',$ARMOF); 
$ARMOF = str_replace('ي','يِٰہ',$ARMOF); 
$ARMOF = str_replace('ب','بّہ',$ARMOF);
$ARMOF = str_replace('ل','ل',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت',' تَہَٰ',$ARMOF); 
$ARMOF = str_replace('ن','نَِٰہ',$ARMOF); 
$ARMOF = str_replace('ك','ڪٰྀہٰٰٖ',$ARMOF); 
$ARMOF = str_replace('م','مـ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظۗـہٰٰ',$ARMOF); 
$ARMOF = str_replace('ط','طۨہٰٰ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذِ',$ARMOF); 
$ARMOF = str_replace('د','دُ',$ARMOF); 
$ARMOF = str_replace('ز','ژ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','وً',$ARMOF); 
 $ARMOF = str_replace('ى','ى',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text != 'اذاعه'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','🅐',$text); 
$ARMOF = str_replace("b","🅑",$ARMOF); 
$ARMOF = str_replace("c","🅒",$ARMOF); 
$ARMOF = str_replace("d","🅓",$ARMOF); 
$ARMOF = str_replace("e","🅔",$ARMOF); 
$ARMOF = str_replace("f","🅕",$ARMOF); 
$ARMOF = str_replace("g","🅖",$ARMOF); 
$ARMOF = str_replace("h","🅗",$ARMOF); 
$ARMOF = str_replace("i","🅘",$ARMOF); 
$ARMOF = str_replace("j","🅙",$ARMOF); 
$ARMOF = str_replace("k","🅚",$ARMOF); 
$ARMOF = str_replace("l","🅛",$ARMOF); 
$ARMOF = str_replace("m","🅜",$ARMOF); 
$ARMOF = str_replace("n","🅝",$ARMOF); 
$ARMOF = str_replace("o","🅞",$ARMOF); 
$ARMOF = str_replace("p","🅟",$ARMOF); 
$ARMOF = str_replace("q","🅠",$ARMOF); 
$ARMOF = str_replace("r","🅡",$ARMOF); 
$ARMOF = str_replace("s","🅢",$ARMOF); 
$ARMOF = str_replace("t","🅣",$ARMOF); 
$ARMOF = str_replace("u"," 🅤",$ARMOF); 
$ARMOF = str_replace("v","🅥",$ARMOF); 
$ARMOF = str_replace("w","🅦",$ARMOF); 
$ARMOF = str_replace("x","🅧",$ARMOF); 
$ARMOF = str_replace("y","🅨",$ARMOF); 
$ARMOF = str_replace("z","🅩",$ARMOF); 
 
$ARMOF = str_replace('ض','ضً',$ARMOF); 
$ARMOF = str_replace('ص','صً',$ARMOF); 
$ARMOF = str_replace('ث','ثہ',$ARMOF); 
$ARMOF = str_replace('ق','قہً',$ARMOF); 
$ARMOF = str_replace('ف','فُہ',$ARMOF); 
$ARMOF = str_replace('غ','غہ',$ARMOF); 
$ARMOF = str_replace('ع','عہُ',$ARMOF); 
$ARMOF = str_replace('ه','ه',$ARMOF); 
$ARMOF = str_replace('خ','خہ',$ARMOF); 
$ARMOF = str_replace('ح','حہ',$ARMOF); 
$ARMOF = str_replace('ج','جہ',$ARMOF); 
$ARMOF = str_replace('ش','شہ',$ARMOF); 
$ARMOF = str_replace('س','سہ',$ARMOF); 
$ARMOF = str_replace('ي','يہ',$ARMOF); 
$ARMOF = str_replace('ب',' ٻً',$ARMOF);
$ARMOF = str_replace('ل','لہ',$ARMOF); 
$ARMOF = str_replace('ا',' ٳ',$ARMOF); 
$ARMOF = str_replace('ت','تہ',$ARMOF); 
$ARMOF = str_replace('ن','نٍ',$ARMOF); 
$ARMOF = str_replace('ك','كُہ',$ARMOF); 
$ARMOF = str_replace('م','مْ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظً',$ARMOF); 
$ARMOF = str_replace('ط','طہ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذً',$ARMOF); 
$ARMOF = str_replace('د','دِ',$ARMOF); 
$ARMOF = str_replace('ز','زً',$ARMOF); 
$ARMOF = str_replace('ر','ڒٍ',$ARMOF); 
$ARMOF = str_replace('و','وٌ',$ARMOF); 
 $ARMOF = str_replace('ى','ىّ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}
if($text != '/start' and $text != 'اذاعه'){

  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','⎛α⎞',$text); 
$ARMOF = str_replace('b','⎛в⎞',$ARMOF); 
$ARMOF = str_replace('c','⎛c⎞',$ARMOF); 
$ARMOF = str_replace('d','⎛ɒ⎞',$ARMOF); 
$ARMOF = str_replace('e','⎛є⎞',$ARMOF); 
$ARMOF = str_replace('f','⎛f⎞',$ARMOF); 
$ARMOF = str_replace('g','⎛ɢ⎞',$ARMOF); 
$ARMOF = str_replace('h','⎛н⎞',$ARMOF); 
$ARMOF = str_replace('i','⎛ɪ⎞',$ARMOF); 
$ARMOF = str_replace('j','⎛ᴊ⎞',$ARMOF); 
$ARMOF = str_replace('k','⎛ĸ⎞',$ARMOF); 
$ARMOF = str_replace('l','⎛ℓ⎞',$ARMOF); 
$ARMOF = str_replace('m','⎛м⎞',$ARMOF); 
$ARMOF = str_replace('n','⎛и⎞',$ARMOF); 
$ARMOF = str_replace('o','⎛σ⎞',$ARMOF); 
$ARMOF = str_replace('p','⎛ρ⎞',$ARMOF); 
$ARMOF = str_replace('q','⎛q⎞',$ARMOF); 
$ARMOF = str_replace('r','⎛я⎞',$ARMOF); 
$ARMOF = str_replace('s','⎛s⎞',$ARMOF); 
$ARMOF = str_replace('t','⎛τ⎞ ',$ARMOF); 
$ARMOF = str_replace('u','⎛υ⎞ ',$ARMOF); 
$ARMOF = str_replace('v','⎛v⎞',$ARMOF); 
$ARMOF = str_replace('w','⎛ω⎞',$ARMOF); 
$ARMOF = str_replace('x','⎛x⎞',$ARMOF); 
$ARMOF = str_replace('y','⎛y⎞',$ARMOF); 
$ARMOF = str_replace('z','⎛z⎞',$ARMOF); 
 
$ARMOF = str_replace('ض','ضِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ص','صِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ث','ثِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ق','قِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ف','فِٰ͒ـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('غ','غِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ع','عِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ه','ۿۿہ',$ARMOF); 
$ARMOF = str_replace('خ','خِٰ̐ـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ح','حِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ج','جِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ش','شِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('س','سِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ي','يِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ب','بِٰـِﮧۢ',$ARMOF);
$ARMOF = str_replace('ل','لِٰـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت','تِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ن','نِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('م','مِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ك','ڪِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ط','طِٰـﮧِۢ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذٰ',$ARMOF); 
$ARMOF = str_replace('د','د',$ARMOF); 
$ARMOF = str_replace('ز','ژ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','ﯛ̲୭',$ARMOF); 
 $ARMOF = str_replace('ى','ىٍ',$ARMOF);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);
}