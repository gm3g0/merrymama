<?php
/*switch($route->getParameter(1)){
case "logout";
unset($_SESSION['memberID']);
unset($_SESSION['username']);
header('Location: login');
break;
case "home";
if(UserVeridator::isLogin(isset($_SESSION['username'])?$_SESSION['username']:'')){
include('view/header/default.php'); // 載入共用的頁首
include('view/body/home.php'); // 載入登入用的頁面
include('view/footer/default.php'); // 載入共用的頁尾
}else{
header('Location: logout');
}
break;
case "login";
if(isset($_POST['submit']))
{
$gump = new GUMP();

$_POST = $gump->sanitize($_POST);

$validation_rules_array = array(
'username' => 'required|alpha_numeric|max_len,20|min_len,3',
'password' => 'required|max_len,20|min_len,3'
);
$gump->validation_rules($validation_rules_array);

$filter_rules_array = array(
'username' => 'trim|sanitize_string',
'password' => 'trim',
);
$gump->filter_rules($filter_rules_array);

$validated_data = $gump->run($_POST);

if($validated_data === false) {
$error = $gump->get_readable_errors(false);
} else {
// validation successful
foreach($validation_rules_array as $key => $val) {
${$key} = $_POST[$key];
}
$userVeridator = new UserVeridator();
$userVeridator->loginVerification($username, $password);
$error = $userVeridator->getErrorArray();

if(count($error) == 0){
$condition = "username = :username";
$order_by = "1";
$fields = "*";
$limit = "LIMIT 1";
$data_array = array(":username" => $username);
$result = merrymama::get()->query("members", $condition, $order_by, $fields, $limit, $data_array);
$_SESSION['memberID'] = $result[0]['memberID'];
$_SESSION['username'] = $username;
header('Location: home');
}
}
}
include('view/header/default.php'); // 載入共用的頁首
include('view/body/login.php'); // 載入登入用的頁面
include('view/footer/default.php'); // 載入共用的頁尾
break;
}*/
?>