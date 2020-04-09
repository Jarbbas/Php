<?php include "db.php"; ?>
<?php 

/* functions file has all CRUD operations  

! IMPORTANTE !

- One of the goals with PHP is to have most of your backend, being handled by small chunk's of code
    in this case functions and operations in one file.

! NOTES !  

- "mysqli" is the new way to stablish a connection in PHP, 
        frist parameter is the name of the server, 
        then is the user, 
        and password and 
        finaly the data_baseName
*/ 


//function for insert into DataBase
function createRows(){

    if (isset($_POST['submit'])) {
       
global $connection; //Global variable, has to be insied function scope
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    //mysqli_real_escape_string function is a MUST! it will protect your DataBase, from mysql injection
    // Bascicly it will sanitize all you string inputs, so it can receive special characters like ()|\/'",. etc
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);


    /* After the strings are sanitized we need to encrypt the users password,
        and for that we use the crypt() function with some Salt() more infor in https://www.php.net/crypt
        resume:
    */
            $hashFormate = "$2y10$"; //this is the most secure format according php and it will run 10 times 
            $salt = "Loremipsumdolorsitamet"; //random text 
            $hashFormate_and_salt = $hashFormate . $salt; //concatenat both variables

            $password = crypt($password, $hashFormate_and_salt); // and use Crypt() function to apply to the $password variable

    // Proper way of doing one clean MYSQL query, with variables and concatenation
    $query = "INSERT INTO `users` (`username`, `password`) ";
    $query .= "VALUES ('$username', '$password')";
    //mysqli_query will stabilshed an connections and push out mysql query to the server
    $result = mysqli_query($connection, $query); 
       
        if (!$result) {
            die('query FAILED' . mysqli_error());
        } else {
            echo "Thank you, for your registration";
        }
    }
}

//function MYSQL READ Data
function readRows(){

    global $connection;
    $query = "SELECT * FROM `users`";
    $result = mysqli_query($connection, $query); 

        if (!$result) {
            die('query FAILED' . mysqli_error());
        }   
            while ($row = mysqli_fetch_assoc($result)) {                            
                print_r($row);               
            }
}

//function to retrive all the information
function showAllData(){

   global $connection; 
   $query = "SELECT * FROM `users`";
   $result = mysqli_query($connection, $query); 

       if (!$result) {
           die('query FAILED' . mysqli_error());
       }

       // while loop to cycle trought the DataBase, so it can fetch the informations
       while ($row = mysqli_fetch_assoc($result)) {
        //the variable $id will store the $row information
        $id = $row['id'];
        $username = $row['username'];
        //and echo to the screen in the html option dropwdown 
            echo "<option value='$id'>$username</option>";
    }
}

//update MYSQL function 
function updateTable(){

    if(isset($_POST['submit'])){

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE `users` SET ";
        $query .= "`username` = '$username', ";  
        $query .= "`password` = '$password' ";  
        $query .= "WHERE `id` = $id ";
        
        $result = mysqli_query($connection, $query);
        if (!$result) {
        die("QUERY FAILED!" . mysqli_error($connection));
        } else {
            echo "Thank you, for the Update";
        }
    }
}

//delete MYSQL function
function deleteRows(){

    if (isset($_POST['submit'])) {

        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM `users` ";;  
        $query .= "WHERE `id` = $id ";
        
        $result = mysqli_query($connection, $query);
        if (!$result) {
        die("QUERY FAILED!" . mysqli_error($connection));
        } else {
            echo "Oops, look's like a record was deleted";
        }
    }
}

?>
