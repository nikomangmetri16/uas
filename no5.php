<?php


$text ="Kamu bisa mengirim berkasnya ke alamat email saya nikomangmetri16@gmail.com";

function deteksiEmail($input)
{
    $regex = "/[\w]+@[a-z.]+/";
    $timpa = "<a href='mailto:$0'>$0</a>";

    return preg_replace($regex, $timpa, $input);
}


echo deteksiemail ($text);

?>