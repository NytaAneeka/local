<?php

session_start();

if (empty($_SESSION)){
    print_r($_SESSION);

    $_SESSION['kint'] = 1;
}
else {
    print_r($_SESSION);
    unset($_SESSION['kint']);
}
echo session_id() . "<br>";

?>

<?php

$time= time();
date("Y-m-d H:i:s,$time");
echo $time;

?>
