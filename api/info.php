<script>alert()</script>

<?php 
$a = fopen('dados.html','a');
fwrite($a, "\n". $_SERVER['HTTP_USER_AGENT']);
?>