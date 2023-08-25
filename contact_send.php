<?php

/*
require_once "./inc/db.php";
*/


if ($_POST['upflg'] == 1) {


// POSTデータのSQLの為のエスケープ処理
// foreach ( (array)$_POST as $key => $val ) {
// 	if (!is_array($val)) $_POST[$key] = htmlentities(pg_escape_string($val), ENT_QUOTES, mb_internal_encoding());
// }


	//チェックボックス
	$item = "";

	foreach ( (array)$_POST['item'] as $key => $val ) {
		$item .= $val."  ";
	}


	// ホームページ運営者に返信するメール
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");
	$today = date("Y/m/d H:i:s");

	/* 案件によって調整
	------------------------------------------------------------ */

	/* 件名、本文冒頭 */
	$mail_title = "K's JAPAN";
	//$mail_title = $passmaster_array['hptitle'];

	/* クライアントメールアドレス */
	$mailto   = "support@at-gungun.co.jp";
	//$mailto = $infomail;

	/* エンドユーザー返信メール末尾の案件アドレス */
	//$site_url_mail = "";
	$site_url_mail = $site_url;

	//CC、BCCでメールを送信させる 20170807 kajiwara 編集
	$mailCc  = "support@at-gungun.co.jp";
	//$mailCc  = "$infomail_cc;

	/* "メインの送信先アドレスをExtlink発行のメールアドレスにしない場合、
		BCC枠に「backup@{各ドメインアドレス　例：backup@extlink.co.jp}」を入れてください。
		メインアドレスがExtlink発行のメールの場合は別途BCC用のメールアドレスを
		発行し、そちらを設定してください */
	$mailBcc = "support@at-gungun.co.jp";
	//$mailBcc  = "$infomail_bcc;
	
	//送信エラー時の送信先
	$efrom = "-f"."support@at-gungun.co.jp";

	/* --------------------------------------------------------- */


	$subject = "{$mail_title}ホームページの『お問い合わせ』より送信";

	$message = <<< maildata
{$mail_title}ホームページの『お問い合わせ』よりメールがありました。

送信日時：{$today}

＜送信内容＞

お名前：{$_POST['name']}

お電話番号：{$_POST['tel']}

郵便番号：〒{$_POST['zip1']}

メールアドレス：{$_POST['mail']}

メーカー：{$_POST['maker']}

車種：{$_POST['car']}

お問い合わせ内容：{$_POST['msg']}

maildata;

	$fromName = mb_encode_mimeheader($mail_title);
	$header    = "From:{$fromName} <{$mailto}>";


	//CC、BCCでメールを送信させる 20170808 kajiwara 編集
	$header .= "\r\n";
	$header .= "Cc:{$mailCc}";
	$header .= "\r\n";
	$header .= "Bcc:{$mailBcc}" .PHP_EOL;

	//メール送信
	mb_send_mail($mailto, $subject, $message, $header);

	// ユーザー宛
	$header = "From:".mb_encode_mimeheader($mail_title)."<".$mailto.">\r\n";
	$mailto_guest = $_POST['mail'];
	$subject = "【{$mail_title}】お問い合わせフォーム確認メール";
	$message = <<<_message
『{$mail_title}』ホームページ より、
お問い合わせ頂きまして、誠にありがとうございます。
お問い合わせ内容については、後日こちらよりご連絡をさせて頂きます。

このメールは、メールサーバより自動送信しています。

送信日時：{$today}

----------------------------------------------------------------------

＜お問い合わせ内容＞

お名前：{$_POST['name']}

お電話番号：{$_POST['tel']}

郵便番号：〒{$_POST['zip1']}

メールアドレス：{$_POST['mail']}

メーカー：{$_POST['maker']}

車種：{$_POST['car']}

お問い合わせ内容：{$_POST['msg']}

----------------------------------------------------------------------

{$mail_title}ホームページの『お問い合わせ』より送信
URL:{$site_url_mail}

_message;


	//メール送信
	mb_send_mail($mailto_guest,$subject,$message,$header);

} else {

	header("Location: ./index.php");
	exit;

}