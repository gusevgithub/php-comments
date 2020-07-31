<?php
require_once('./config.php');

/**
 * PHP version 7.1
 */
abstract class DataBase
{

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    public static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
            $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }
}


class DB extends DataBase
{


    public function __construct() {}

    // Для добавления данных в БД 
		public static function setCommentsData($username, $comment)
    {
       try {
            
          $db = DataBase::getDB();
          
          $query = "INSERT INTO `comments` (`username`, `comment`) values (?, ?)";
          $reg = $db->prepare($query);
          return $reg->execute([$username, $comment]);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Обработка запроса
    public function setCommentPost() {
      if(isset($_POST['submit'])) {

         $username = htmlspecialchars($_POST['username']);
        $usercomment = htmlspecialchars($_POST['usercomment']);

        if($username !== '' && $usercomment !== '' &&
           $username !== false && $usercomment !== false) {
            self::setCommentsData($username, $usercomment);
            header("Location: ".$_SERVER["HTTP_REFERER"]);
            exit;
           } else {
            $message = 'Введите имя или комментарии!';
            return $message;
           }
           
      }
    }
    
    
    // Для вывода всех данных из БД 
    public function getDataAll()
    {
    
        try {
                
          $db = DataBase::getDB();
                
                $stmt = $db->prepare("SELECT * FROM `comments` ORDER BY `id` DESC");
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $results;
                
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
	}

 
		
}

$obj = new DB();
$set = $obj->setCommentPost();
$result = $obj->getDataAll();
