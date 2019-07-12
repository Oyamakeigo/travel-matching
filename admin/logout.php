<?

session_start();

$users = new User;
$result = $user->logout($username,$password);

?>