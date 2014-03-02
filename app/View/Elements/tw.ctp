<?php
// URLを変換
$tw_url = mb_ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\" target=\"_blank\">\\0</a>",$tw);

// @userを取り出す
preg_match_all("/@([[:alnum:]]|_)+/",$tw_url,$alphas);

//preg_replace($pattern,$replacement,$tw_url);
// debug($alphas);

$tw_url_alpha = $tw_url;
foreach ($alphas[0] as $alpha) {
    $tw_url_alpha = mb_ereg_replace($alpha,'<a href="http://twitter.com/'.str_replace('@','',$alpha).'" target="_blank">'.$alpha."</a>", $tw_url_alpha);
}
// $tw_url_alpha = mb_ereg_replace("@([[:alnum:]]|_)+","<a href=\"http://twitter.com/\\0\" target=\"_blank\">\\0</a>",$tw_url);
echo $tw_url_alpha;
?>
