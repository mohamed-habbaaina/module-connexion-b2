<?PHP
session_start();
if($_SESSION['autoris'] !== 'ok' || $_SESSION['login'] !== 'admiN1337$')
{
    header("HTTP/1.1 403 Acces refused to the database");
    die();
}

require_once('../Model/ModelAdmin.php');

$modelAdmin = new Model\ModeAdmin\ModelAdmin();

$data = $modelAdmin->getAllUsers();

echo json_encode($data);
?>