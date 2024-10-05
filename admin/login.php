<?php
require_once 'vendor/autoload.php';
 
// Lấy những giá trị này từ https://console.google.com
$client_id = 'điền vào đây'; 
$client_secret = 'điền vào đây';
$redirect_uri = 'http://localhost/VietNamNews/admin/login.php';  //Authorized redirect URIs
 
//Thông tin kết nói database
$db_username = "root"; //Database Username
$db_password = ""; //Database Password
$host_name = "localhost"; //Mysql Hostname
$db_name = 'vietnamnews'; //Database Name
###################################################################
 
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");
 
$service = new Google_Service_Oauth2($client);
 
// Nếu kết nối thành công, sau đó xử lý thông tin và lưu vào database
if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    //header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
    $user = $service->userinfo->get(); //get user info 
 
        // echo 'User Information:<br>';
        // echo 'ID: '.$user->id.'<br>';
        // echo 'Name: '.$user->name.'<br>';
        // echo 'Email: '.$user->email.'<br>';
        // echo 'Google Link: '.$user->link.'<br>';
        // echo 'Google Picture Link: '.$user->picture.'<br>';

    // connect to database
    $mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
 
    //Kiểm tra xem nếu user này đã tồn tại, sau đó nên login tự động
    $result = $mysqli->query("SELECT COUNT(*) as usercount FROM tbladmin WHERE AdminUserName = '". $user->name ."' AND AdminEmailId = '". $user->email ."'");
    $user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist
 
    // //show user picture
    // echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
 
    if($user_count) // Nếu user tồn tại thì show thông tin hiện có
    {
        // echo 'Welcome back '.$user->name.'! [<a href="http://localhost/VietNamNews/admin/">Log Out</a>]';
        
        // $_SESSION['login']="admin";
        // echo "<script type='text/javascript'> document.location = 'dashboard2.php'; </script>";

        include('./dashboard2.php');
    }
    else //Ngược lại tạo mới 1 user vào database
    { 
        // echo 'Hi '.$user->name.', Thanks for Registering! [<a href="http://localhost/VietNamNews/admin/">Log Out</a>]';
        $isActive = 1;
        $statement = $mysqli->prepare("INSERT INTO tbladmin (AdminUserName, AdminEmailId, Is_Active, google_link, google_picture_link) VALUES (?,?,?,?,?)");
        $statement->bind_param('sssss',  $user->name, $user->email, $isActive, $user->link, $user->picture);
        $statement->execute();

        echo $mysqli->error;
        
        // $_SESSION['login']="admin";
        // echo "<script type='text/javascript'> document.location = 'dashboard2.php'; </script>";
        
        include('./dashboard2.php');
    }
    exit;
}
 
//Nếu sẵn sàng kết nối, sau đó lưu session với tên access_token
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else { // Ngược lại tạo 1 link để login
    $authUrl = $client->createAuthUrl();
}
 
//Hiển thị button để login
echo '<div style="margin: 30px 0 10px 30px;padding-top: 12px;">';
if (isset($authUrl)){ 
    //show login url
    echo '<a class="login" style="color:white" href="' . $authUrl . '">Đăng nhập với google</a>';
     
} 
echo '</div>';

?>