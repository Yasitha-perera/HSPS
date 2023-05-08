<?php
session_start();
include("conn.php");

session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>
