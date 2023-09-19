<?php
namespace Model\ModelUser;
use Model\DbConnection\DbConnection;
require_once ('DbConnection.php');
class ModelUser {
    public function __construct()
    {

    }

    // Cross-site scripting (XSS)
    public function isValid(string $input): string
    {
        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = strip_tags($input);

        return $input;
    }

    // Check if login exists in the database
    public function check_DB(string $login): array|bool
    {
        $requestCheck = "SELECT * FROM `user` WHERE `login`=:login";
        $data = DbConnection::getDb()->prepare($requestCheck);
        $data->bindParam(':login', $login);
        $data->execute();
        return $data->fetch(\PDO::FETCH_ASSOC) ?? false;
    }

    /**
     * Register the user in the database.
     */
    public function register(string $login, string $firstname, string $lastname, string $password): void
    {
            $requestInsert = "INSERT INTO `user` (`login`, `firstname`, `lastname`, `password`) 
                                VALUE (:login, :firstname, :lastname, :password)";
            $request = DbConnection::getDb()->prepare($requestInsert);
            $request->bindParam(':login', $login);
            $request->bindParam(':firstname', $firstname);
            $request->bindParam(':lastname', $lastname);
            $request->bindParam(':password', $password);
            $request->execute();
    }

    //
    public function connection($login, $password): bool
    {

        $data = $this->check_DB($login);

        if(!empty($data)):

            $password_db = $data['password']; // il faux faire un vardump
            
                // verifier le password Haché.
                if (password_verify($password, $password_db)):
                  
                    return true;
                else:
                     return false;
                endif;
            else:
                return false;
        endif;
    }

    // ** GETTERS: ID & Role


    public function getId($username): int
    {
        $data = $this->check_DB($username);

        return $data[0]['id'];
    }


    public function getRole($username): string
    {
        $data = $this->check_DB($username);

        return $data[0]['role'];
    }

    public function isConnected(): bool
    {
        if(isset($_SESSION['role'])):
            return true;
        else:
            return false;
        endif;
    }

    /**
     * Destroy all variables of the current session, and Destroy the current session
     */
    public function deconnect(): void
    {
        $_SESSION = array(); 
        session_unset();
        session_destroy();
    }

    /**
     * check if user is in database
     * can be used to test if logged user still exists in database
     * @param int $id representing user id
     * @return boolean, depending if the query find the user
     */
    public function isInDb(int $id): bool {
        $sql = 'SELECT COUNT(id) FROM users WHERE id = :id';

        $select = DbConnection::getDb()->prepare($sql);

        $select->bindParam(':id', $id, \PDO::PARAM_INT);

        $select->execute();

        return $select->fetchColumn() > 0;
    }



}