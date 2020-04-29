<?php
session_start();
if(isset($_SESSION['username']))
{
    session_destroy();
    echo "<h1>loged-out succesfully</h1>";
    sleep(2);
    echo "<script>location.href='homepage.php'</script>";
    //header('Refresh: 2; URL=homepage.php');
}
else{
    echo "<script>location.href='homepage.php'</script>";
}
?>