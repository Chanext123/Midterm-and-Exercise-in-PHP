<?php

echo date('Y-m-d h:i:s');
echo '<br/>';
if(isset($_COOKIE['Test'])) {
    echo "You already visited this page.";
} else {
    setcookie("Test","hits");
}
?>
<html>
<head>
</head>
<body>

</body>
</html>