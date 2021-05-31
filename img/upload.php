<?php
$sharexdir = "";
$domain_url = "https://iucc.ml/img/"
$lengthofstring = 10;

function RandomString($length) {
    $keys = array_merge(range(0, 9), range('a', 'z'));
    $key = '';
    for($i=0; $i < length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}
$filename = RandomString($lengthofstring);
$target_file = $_FILES["sharex"]["name"];
$fileType = pathinfo($target_file, PATHINFO_EXTENTION);

if (move_uploaded_file($_FILES["sharex"]["tmp_name"], $sharexdir.$filename.'.'.$fileType))
{
    echo $domain_url.$sharexdir.$filename.'.'.$fileType;
}
else
{
    echo 'File upload  fialed - CHMOD/Folder doesn\'t exist?'
}
?>