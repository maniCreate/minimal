<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $name = null;
      $from = null;
      $subject = null;
      $content = null;

      $autoBack_content = null;

      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

      date_default_timezone_set('Asia/Tokyo');

      $header = "From: ManiLabo <noreply@mani-labo.net>\n";

      $to = 'noreply@mani-labo.net';
      $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
      $from = htmlspecialchars($_POST['mail'],ENT_QUOTES);
      $content = htmlspecialchars($_POST['content'],ENT_QUOTES);
      if( isset( $_POST[ 'category' ] ) ){
        //選択されたラジオボタンの value の内容が表示される
        $subject = $_POST['category'];
      } else {
        $subject = 'なし';
      };

      //運営側自動返信メール
      $reply_call_title = '【ManiLabo】下記の通りお問い合わせがありました。確認をお願いします';
      $reply_call_content = 'ManiLaboに以下の通りお問い合わせがありましたのでご連絡致します。'."\n".
      '確認後2~3日までに返信をお願いします。'."\n"."\n".
      '------------------------------------'."\n".
      '▼お問い合わせ内容▼'."\n"."\n".
      'お問い合わせ日時：'.date("Y"."年"."m"."月"."d"."日"." "."H"."時"."i"."分")."\n".
      'お名前：'.$name."\n".
      'メールアドレス：'.$from."\n".
      'お問い合わせ内容：'.$subject."\n".
      '本文：'."\n".
      $content."\n".
      '------------------------------------'."\n"."\n".
      '===================================='."\n".
      '- ManiLabo：とあるミニマリストのポートフォリオサイト[minimal] -'."\n".
      '◆Administrator：まに / mani'."\n".
      '◆Web Site：https://www.mani-labo.net'."\n".
      '◆Mail：mani.mlife@gmail.com'."\n".
      '===================================='
      ;

      //問い合わせ側自動返信メール
      $autoBack_to = $from;
      $autoBack_subject = '【自動返信】minimalにお問い合わせありがとうございます！';
      $autoBack_content =  $name.'様'."\n"."\n".
      'この度は「minimal」にお問い合わせ頂きましてありがとうございます！'."\n".
      'お問い合わせ頂きました内容は下記の通り受付致しました。'."\n".
      '確認後、2~3日以内に返信致しますので今暫くお待ち下さいませ。'."\n"."\n".
      '------------------------------------'."\n".
      '▼お問い合わせ内容▼'."\n"."\n".
      'お問い合わせ日時：'.date("Y"."年"."m"."月"."d"."日"." "."H"."時"."i"."分")."\n".
      'お名前：'.$name."\n".
      'メールアドレス：'.$from."\n".
      'お問い合わせ内容：'.$subject."\n".
      '本文：'."\n".
      $content."\n".
      '------------------------------------'."\n"."\n".
      '【注意】'."\n".
      'なお、このメールは自動返信によって送信されています。'."\n".
      'このメールに返信を頂きましても返信を致しかねますのでご注意下さいませ。'."\n"."\n".
      '===================================='."\n".
      '- ManiLabo：とあるミニマリストのポートフォリオサイト[minimal] -'."\n".
      '◆Administrator：まに / mani'."\n".
      '◆Web Site：https://www.mani-labo.net'."\n".
      '◆Mail：mani.mlife@gmail.com'."\n".
      '===================================='
      ;

      if(mb_send_mail($to, $reply_call_title, $reply_call_content, $header)) {
        mb_send_mail($autoBack_to, $autoBack_subject, $autoBack_content, $header);

      } else {
        echo('メールの送信に失敗しました。');
      };

      $_POST["name"] = null;
      $_POST["mail"] = null;
      $_POST["category"] = null;
      $_POST["content"] = null;
      $name = null;
      $from = null;
      $subject = null;
      $content = null;

    ?>
  </body>
</html>
