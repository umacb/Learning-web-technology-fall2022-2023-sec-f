<?php
ob_start();
session_start();
$username="abcd";
$password="1234";
$errorMsg="";
if (isset($_POST['login']) && !empty($_POST['username'])
&& !empty($_POST['password'])) {
if ($_POST['username'] == $username &&
$_POST['password'] == $password) {
$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['username'] = $username;
header("Location:/index.php");
exit;
}else {
$errorMsg = 'Wrong username or password';
}
}
?>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="" action="next.html" enctype="">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="" value="" placeholder="username" /></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="" value="" placeholder="password" /></td>
                </tr>
                <td>
                     <input type="checkbox" value="IsRememberMe" id="rememberMe"><label for="rememberMe">Remember me<br></label>
                    <input type="submit" name="" value="Submit" oneclick="IsRememberM()">
                
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>