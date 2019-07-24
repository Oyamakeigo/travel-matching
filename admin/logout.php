<?

session_start();

session_destroy();

$users = new User;
$result = $user->logout($username,$password);

?>