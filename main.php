<?php
    ob_start();
    $token = '1945004551:AAFRKS50XlK6LsBuzsqrP602bUW-LsdKzBQ';
    define('API_KEY', $token);
    function bot($method, $datas = [])
    {
        $mohmd = http_build_query($datas);
        $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method . "?$mohmd";
        $mohmd = file_get_contents($url);
        return json_decode($mohmd);
    }

    $update = json_decode(file_get_contents('php://input'));
    $ofon = file_get_contents("alhala.txt");
    $groups = file_get_contents("groups.txt");
    $member = file_get_contents("member.txt");
    $set = file_get_contents("set.txt");
    $sabama = file_get_contents("sabama.txt");
    $bannn = file_get_contents("bans.txt");

    $message = $update->message;
    $from_id = $message->from->id;
    $chat_id = $message->chat->id;
    $idbot = 1945004551;
    $DS = 1168709542;
    $box = "GH321321321";
    $blrd = $message->reply_to_message;
    $name = $message->from->first_name;
    $ns = $message->text;
    $message_id = $message->message_id;
    $mo = $update->callback_query->data;
    $title = $message->chat->title;
    $type = $message->chat->type;
    $blrdid = $blrd->from->id;
    $uzor = $message->from->username;
    //groups
    $dara = -1001276667760;
    $groups_ex = explode("X", $groups);
    $num = count($groups_ex);
    $uzar = $message->chat->username;
    $new = $message->new_chat_member;
    $gg = $message->reply_to_message->message_id;
    $ban = explode("B", $bannn);
    $mprsd = bot('getChatMembersCount', [
        'chat_id' => $chat_id
    ])->result;
    //nsee----------
    $start = "عنب هو روبوت صُمم لنشر أذكارٍ متميزة ونفحٍ من القرآن الكريم في المجموعات كل ساعتين تقريبًا ما دامت المجموعة تنبض.

شكرًا لك لأختياري، أتمنى أن تغمُر حياتك الطمأنينة وآمل كذلك أن أُضيف قيمةً ونكهة خاصة لمجموعتك، وإنّها لتُسعدني حقًا اقتراحاتُك وملاحظاتُك حولي، لا تتردد أبدًا بتقديمها هنا.
";
    $k002 = '^💜^┇فٌعلت المجموعة من مطور شكرًا لكم.';
    $k003 = "هذه بعض الأوامر الخاصة ( `تلاوة`، `ذكر`، `آية`، `صفحة 2` )، أكتبها للروبوت لتتلقى النتيجة.";
    //rands----
    $azkar = random_int(979, 1050);
    $liz = "https://t.me/GH321321321/$azkar";
    $zr = random_int(342, 800);
    $SK = random_int(696, 739);
    $sosc = -1001597446072;
    $tlawa1 = [random_int(16, 338), random_int(816, 978), random_int(1286, 1830)];
    $tlawa4 = array_rand($tlawa1, 1);
    $lit = "https://t.me/GH321321321/$tlawa1[$tlawa4]";
    //time get----------
    date_default_timezone_set('asia/riyadh');
    $time = date('G:i');
    $mnt = date('i');
    $sony = date('s');
    $saa = array("1:00", "9", "11", "15", "17", "21");
    $scsc = array("1", "4", "8", "11", "15", "20", "25", "30", "41");
    //CODS☕⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌⚌
    //todevcods+++++++++++++++++++++++++++
    if ($from_id == $DS) {
        if ($ns == "تفعل" and $type != 'private' and !in_array($chat_id, $groups_ex)) {
            file_put_contents("groups.txt", $chat_id . "X", FILE_APPEND);
            bot('sendmessage', ['chat_id' => $chat_id, 'text' => $k002]);
            bot('sendMessage', [
                'chat_id' => $dara,
                'text' => "فعلني المبادر ([$name](tg://user?id=$from_id)) في المجموعة الجديدة ($title) والتفاصيل:\nID: $chat_id / $uzar| N: groups_num | $mprsd MU",
                'parse_mode' => "MarkDown",
            ]);
        }

        if ($ns == "طرد") {
            bot('kickchatmember', [
                'chat_id' => $chat_id,
                'user_id' => $blrdid
            ]);
        } elseif ($ns == 'حذف') {
            bot('deleteMessage', [
                'chat_id' => $chat_id,
                'message_id' => $message->reply_to_message->message_id,
            ]);
        }
        $bomm = str_replace("حظر ", "", $ns);
        if ($ns == "حظر $bomm" and is_numeric($bomm) and $bomm != $DS || $chat_id == $dara) {
            if (!in_array($from_id, $ban)) {
                file_put_contents("bans.txt", $bomm . "B", FILE_APPEND);
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "❝ $bomm حُظِر ❞",
                    'reply_to_message_id' => $message_id,
                ]);
            } else {
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "$bomm محظور؟"
                ]);
            }
        }

        $un = str_replace("الغاء حظر ", "", $ns);
        if ($ns == "الغاء حظر $un" and in_array($un, $ban)) {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "رُفع الحظر ،✅"
            ]);
            $ung = str_replace($un . "B", "", file_get_contents("bans.txt"));
            file_put_contents("bans.txt", "$ung");
        }

        //add code -----
        if (preg_match('/^(iaddc) (.*)/s', $ns) && $from_id == $DS and $type == 'private') {
            $php = str_replace("iaddc", "", $ns);
            file_put_contents("a.php", "<?php\n " . $php . "\n;?>");
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "*• تم اضـافة الكـود بنجـاح ✔️*",
                'reply_to_message_id' => $message_id,
                "parse_mode" => "markdown"
            ]);
        }
        include "a.php";
        if ($ns == "عنب حذف الكود" && $from_id == $DS) {
            unlink("a.php");
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "• تم حذف الكود"
            ]);
        }

        //++ ++ ++
        if ($ns == "تشغيل" and $chat_id == $dara || $from_id == $DS and $ofon != "on") {
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => '^💜^┇عدت أعمل'
            ]);
            file_put_contents("alhala.txt", "on");
        }
        if ($ns == "تعطيل" and $chat_id == $dara || $from_id == $DS and $ofon != "off") {
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => '^❌^┇البوت معطل'
            ]);
            file_put_contents("alhala.txt", "off");
        }
    }

    // -- -- -- 
    if (!in_array($chat_id, $ban) and !in_array($from_id, $ban)) {

        if ($blrd && $from_id != $DS && $blrdid == "1945004551") {
            bot('forwardmessage', [
                'chat_id' => "-1001543079722",
                'from_chat_id' => $chat_id,
                'message_id' => $message_id
            ]);
            bot('sendmessage', [
                'chat_id' => "-1001543079722",
                'text' => "@$uzar - $title - `$chat_id`"
            ]);
        }

        if ($type == 'private' and $from_id != $DS) {
            bot('forwardMessage', [
                'chat_id' => -1001543079722,
                'from_chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => $ns
            ]);
        }

        if ($type == "private") {
            $member_ex = explode("\n", $member);
            $mnum = count($member_ex);
            $k005 = "
            🍇 زائرٌ جديد - $mnum
            ـ┤ <code>$from_id</code> 
            ـ┤ <a href='tg://user?id=$from_id'>$name .</a> 
            ـ┘ @$uzar
            ";
            $k006 = "👤 جاءني شخصٌ من أخي
            ـ┤ $mnum حتى الآن 
            ـ┤ <code>$from_id</code> 
            ـ┤ <a href='tg://user?id=$from_id'>$name .</a> 
            ـ┘ @$uzar";
            if ($ns == "/start Gift") {
                bot('sendChatAction', [
                    'chat_id' => $chat_id,
                    'action' => 'typing'
                ]);
                bot('Copymessage', [
                    'chat_id' => $chat_id,
                    'message_id' => random_int(60, 112),
                    'from_chat_id' => "-1001692619970"
                ]);
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "- /zed"
                ]);
                if (!in_array($chat_id, $member_ex)) {
                    file_put_contents("member.txt", "\r\n$chat_id", FILE_APPEND);
                    bot('sendmessage', ['chat_id' => $dara, 'text' => $k006, 'parse_mode' => "HTML",]);
                }
            } elseif ($ns == "/start" and !in_array($chat_id, $member_ex)) {
                file_put_contents("member.txt", "\r\n$chat_id", FILE_APPEND);
                bot('sendChatAction', [
                    'chat_id' => $chat_id,
                    'action' => 'typing',
                ]);
                bot('sendvoice', [
                    'chat_id' => $chat_id,
                    'voice' => "$lit",
                    'caption' => "$start",
                    'parse_mode' => "MarkDown",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "🌱 أضفني لمجموعتك ", 'url' => "http://t.me/Inabbot?startgroup=true"]]
                        ]
                    ])
                ]);
                bot('sendmessage', [
                    'chat_id' => $dara,
                    'text' => $k005,
                    'parse_mode' => "HTML",
                ]);
            } elseif ($ns == "/start") {
                bot('sendChatAction', [
                    'chat_id' => $chat_id,
                    'action' => 'typing',
                ]);
                bot('sendvoice', [
                    'chat_id' => $chat_id,
                    'voice' => "$lit",
                    'caption' => $start . "\n" . $k003,
                    'parse_mode' => "markdown",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "أضفني لمَجْمُوعَتِك ➕", 'url' => "http://t.me/Inabbot?startgroup=true"]]
                        ]
                    ])
                ]);
            }
        }

        if ($ofon == "on") {

            if ($message and $mnt != "00" and !in_array($time, $saa) and $sabama != "ahaa") {
                file_put_contents("sabama.txt", "ahaa");
                bot('sendMessage', [
                    'chat_id' => $dara,
                    'text' => "تم 💚",
                ]);
            }


            if ($ns == 'عنب') {
                if ($type != "private" and !in_array($chat_id, $groups_ex)) {
                    $talm = "المجموعة غير مفعلة 🛑";
                } elseif ($type != "private" and in_array($chat_id, $groups_ex)) {
                    $talm = "كيف يمكنني أن أٌسعدك اليوم؟";
                } elseif ($type == 'private') {
                    $talm = "كيف يمكنني أن أٌسعدك اليوم؟";
                }
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => $talm,
                    'reply_to_message_id' => $message_id
                ]);
            }

            if ($ns == "تفعيل" and $type != 'private') {
                $infoi = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=$chat_id&user_id=$idbot"), true);
                $info = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=$chat_id&user_id=$from_id"), true);
                $you = $info['result']['status'];
                $bot = $infoi['result']['status'];
                if (in_array($chat_id, $groups_ex)) {
                    bot('sendmessage', [
                        'chat_id' => $chat_id,
                        'text' => 'مفعلٌ بالفعل سيدي',
                        'reply_to_message_id' => $message_id

                    ]);
                    exit;
                } elseif ($you == 'administrator' || $you == "creator" and $mprsd >= "15" and $bot == 'administrator' && !in_array($chat_id, $groups_ex)) {
                    file_put_contents("groups.txt", $chat_id . "X", FILE_APPEND);
                    bot('sendmessage', [
                        'chat_id' => $chat_id,
                        'text' => 'تم تفعيل المجموعة من الآن سأرسل الأذكار والتنبيهات هنا، جزاكم الله ثوابها.'
                    ]);
                    bot('sendMessage', [
                        'chat_id' => $dara,
                        'text' => "فعلني المبادر ([$name](tg://user?id=$from_id)) في المجموعة الجديدة ($title) والتفاصيل:\nID: $chat_id / $uzar| N: groups_num | $mprsd MU",
                    ]);
                }
            }

            // -- -- --
            if ($ns == "منشور" and $chat_id == $dara) {
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "  قم بالرد على الرسالة المراد إذاعتها الآن وأكتب . ⟪`نشر`⟫",
                ]);
                file_put_contents("set.txt", "$from_id");
            }
            $executed = false;
            if ($ns == "نشر" and $blrd and $chat_id == $dara and $from_id == $set) {
                if (!$executed) {
                    for ($c = 0; $c < $num; $c++) {
                        bot('Copymessage', [
                            'chat_id' => $groups_ex[$c],
                            'from_chat_id' => $chat_id,
                            'message_id' => $gg,
                            'disable_web_page_preview' => true,
                        ]);
                    }
                    file_put_contents("set.txt", "ko");
                    bot('sendMessage', [
                        'chat_id' => $chat_id,
                        'text' => "- تم زرع الأثر في عدد غير مهم من المجموعات ☑",
                    ]);
                    $executed = true;
                }
            } elseif ($ns != "نشر" && $chat_id == $dara && $set != "ko") {
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "💢 error"
                ]);
                file_put_contents("set.txt", "ko");
            }

            // -- -- --
            if ($ns and $type == "supergroup" and in_array($time, $saa) and $sabama != "tmzz" and in_array($sony, $scsc)) {
                for ($c = 0; $c < $num; $c++) {
                    bot('Copymessage', [
                        'chat_id' => $groups_ex[$c],
                        'message_id' => "$zr",
                        'from_chat_id' => $sosc,
                    ]);
                    file_put_contents("sabama.txt", "tmzz");
                }
            }

            if ($message->new_chat_member) {
                $t = $message->new_chat_member->id;
                if ($t == $idbot and $type != 'channel') {
                    bot('sendMessage', [
                        'chat_id' => $dara,
                        'text' => "in $title -- @$uzar -- $mprsd,>> $uzor ,, $name added me to $chat_id"
                    ]);
                    if ($mprsd >= 15 and !in_array($chat_id, $groups_ex)) {
                        bot('sendMessage', [
                            'chat_id' => $chat_id,
                            'text' => "🤍⟫ سعيدٌ بوجودي هُنا!
شكرا لكم، أتمنى أن يخفَّ ظلّي عليكم✨",
                            'reply_to_message_id' => $message_id,
                        ]);
                        bot('sendChatAction', ['chat_id' => $chat_id, 'action' => 'typing',]);
                        bot('sendMessage', ['chat_id' => $chat_id, 'text' => "الأن أحتاج منصب مشرف المجموعة، ثم أكتب ⟪`تفعيل`⟫", 'parse_mode' => "markdown"]);
                    } elseif (in_array($chat_id, $groups_ex)) {
                        bot('Sendvoice', [
                            'chat_id' => $chat_id,
                            'voice' => "$lit",
                            'caption' => "عُدتُ وعلى العَوْدُ أَحْمَدْ، شُكْرًا وأهلاً بكم مرة أخرى. ^^"
                        ]);
                        bot('sendMessage', [
                            'chat_id' => $chat_id,
                            'text' => "😉 $talm",
                        ]);
                    }
                }
                exit;
            }
        }
        //༄༄༄༄༄༄༄༄༄༄༄༄

        if ($ns == "أية" or $ns == "حكمة" or $ns == "آية" or $ns == "أية" or $ns == "آيه" or $ns == "ايه" or $ns == "/aya" or $ns == "/aya@InabBOT" or $ns == "أيه" or $ns == "آي") {
            $AYA = random_int(1080, 1271);
            bot('Copymessage', [
                'chat_id' => $chat_id,
                'message_id' => $AYA,
                'from_chat_id' => "$sosc"
            ]);
        }
        //༄༄༄༄༄༄༄༄༄༄༄༄༄
        if ($ns == "تلاوة" or $ns == "تلاوه" or $ns == "ت" or $ns == "ق" or $ns == "راحة نفسية" or $ns == "/zed" or $ns == "روق" or $ns == '/zed@InabBOT' or $ns == "نروق" or $ns == 'نسمع' or $ns == 'نرتاح' or $ns == "قران" or $ns == "قرأن" or $ns == "قرآن") {
            bot('sendChatAction', [
                'chat_id' => $chat_id,
                'action' => 'record_voice',
            ]);
            sleep(1);
            bot("Sendvoice", ["chat_id" => $chat_id, "voice" => "$lit", "caption" => "*تلاوة عطِرة ♡. -- /zed*", 'reply_to_message_id' => $message->message_id, 'parse_mode' => "markdown"]);
        }

        if ($text == "أذكار" or $ns == "ذكر" or $ns == "دعاء" or $ns == "ثواب" or $ns == "/zkr" or $ns == "/zkr@InabBOT") {
            bot('sendphoto', [
                'chat_id' => $chat_id,
                'photo' => "https://t.me/GH321321321/$SK",
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => '💙 أكثر ! ، 🔄', 'callback_data' => 't']],
                    ]
                ])
            ]);
        }
    }

    if ($mo == "t") {
        bot('editMessageMedia', [
            'chat_id' => $update->callback_query->message->chat->id,
            'message_id' => $update->callback_query->message->message_id,
            'media' => json_encode([
                'type' => 'photo',
                'media' => "https://t.me/GH321321321/$SK",
                'parse_mode' => "MarkDown",
            ]),
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => 'أكثر ', 'callback_data' => 't']],
                ]
            ])
        ]);
    }

    //adds
    if ($from_id == "5482636954") {
        bot('sendMessage', [
            'chat_id' => "-1001543079722",
            'text' => "😶‍🌫️ \n $ns \n\n $title || @$uzar || $mprsd || $chat_id",
        ]);
    }

    $n = str_replace("run ", "", $ns);
    if ($ns == "run $n" and !in_array($n, $groups_ex) && $from_id == $DS) {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "،✅"
        ]);
        file_put_contents("groups.txt", $n . "X", FILE_APPEND);
    }
    $nu = str_replace("check ", "", $ns);
    if ($ns == "check $nu" && $from_id == $DS) {
        $f = file_get_contents($nu);
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "--- \n" . $f
        ]);
    }
    $u = explode(" ", $ns); // special post
    if ($u[0] == "to" and $from_id == $DS) {
        $a = bot('Copymessage', [
            'chat_id' => $u[1],
            'from_chat_id' => $chat_id,
            'message_id' => $gg
        ])->ok;
        if (!isset($a)) {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "فَشلَت العملية"
            ]);
        }
    }

    $e12 = str_replace([" ", "ة"], ["", "ه"], $ns);
    if (preg_match("/عنبصفحه([\d]*)$/", $e12, $count) || preg_match("/صفحه([\d]*)$/", $e12, $count)) {
        if ($count[1] < 605) {
            bot('SendPhoto', [
                'chat_id' => $chat_id,
                'photo' => "http://www.islamicbook.ws/1/" . $count[1] . ".png",
                'parse_mode' => "MarkDown",
                'caption' => "هاكَ الصفحة *$count[1]* من القرآن العظيم 🌿💜",
                'reply_to_message_id' => $message_id,
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => 'الصفحة التالية', 'callback_data' => $count[1]]],
                    ]
                ])
            ]);
        }
    }

    $data = $update->callback_query->data;
    $next_page = $data + 1;

    if ($data > 0 and $data < 605) {
        bot('editMessageMedia', [
            'chat_id' => $update->callback_query->message->chat->id,
            'message_id' => $update->callback_query->message->message_id,
            'media' => json_encode([
                'type' => 'photo',
                'media' => "http://www.islamicbook.ws/1/{$next_page}.png", //هنا الحاصل
            ]),
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => 'الصفحة التالية', 'callback_data' => $next_page]],
                ]
            ])
        ]);
    }

    if ($ns == ".") {
        $bit = $groups_ex[random_int(1, count($groups_ex))];
        if ($bit != null) {
            $getchat = bot('getchat', ['chat_id' => $bit])->ok;
            if ($getchat != true) {
                $un = str_replace($bit . "X", "", file_get_contents("groups.txt"));
                file_put_contents("groups.txt", $un);
                $s = "غير مفعلة وأُزيلت.";
            } else {
                $s = "مستمرة.";
            }
            bot('sendMessage', [
                'chat_id' => $dara,
                'text' => "`$bit` " . $s,
                'parse_mode' => "MarkDown"
            ]);
        }
    }
