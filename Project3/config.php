
<?php
$servername = "localhost";
    $username = "hyedlapalli1";
    $password = "hyedlapalli1";
    $dbname = "hyedlapalli1";
 
    $mysqli = new mysqli($servername, $username, 
                 $password, $dbname);
   
    if ($mysqli->connect_error) {
         die('Connect Error (' . 
        $mysqli->connect_errno . ') '. 
        $mysqli->connect_error);
}

//Creating all the tables.
//User
$query = "CREATE TABLE user (
    id int(11) AUTO_INCREMENT,
    user_name varchar(255) NOT NULL,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    register_date varchar(255) NOT NULL,
    PERMISSION_LEVEL int,
    APPLICATION_COMPLETED int,
    APPLICATION_IN_PROGRESS int,
    PRIMARY KEY  (ID)
    )";
$result = mysqli_query($mysqli, $query);

//Admin
$query1 = "CREATE TABLE Admin (
    id int(11) AUTO_INCREMENT,
    user_name varchar(255) NOT NULL,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PERMISSION_LEVEL int,
    APPLICATION_COMPLETED int,
    APPLICATION_IN_PROGRESS int,
    PRIMARY KEY  (ID)
    )";
$result = mysqli_query($mysqli, $query1);
$queryL    = "INSERT into `user` (user_name, first_name, last_name, email, password)
VALUES ('hansika', 'hansika', 'yedlapalli', 'hansika@gmail.com', '" . md5('welcome') . "')";
$result = mysqli_query($mysqli, $queryL) ;


//Add new Restaurant
//RestaurantName, Cuisine, Average_Cost, Has_table_booking, Has_online_booking, Rating, open_timings, zipcode)
$query2 = "CREATE TABLE Restaurants (
    id int(11) NOT NULL,
    RestaurantName varchar(255) NOT NULL,
    Cuisine varchar(255) NOT NULL,
    Average_Cost varchar(255) NOT NULL,
    Has_table_booking varchar(255) NOT NULL,
    Has_online_booking varchar(255) NOT NULL,
    Rating int NOT NULL,
    open_timings varchar(255) NOT NULL,
    zipcode int NOT NULL,
    PERMISSION_LEVEL int,
    APPLICATION_COMPLETED int,
    APPLICATION_IN_PROGRESS int,
    PRIMARY KEY  (ID)
    )";
$result = mysqli_query($mysqli, $query2);

//Feedbacks(FeedbackUserName, Email, sugg_feedback, Rating) 

$query3 = "CREATE TABLE Feedbacks (
    id int(11) NOT NULL,
    FeedbackUserName varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    sugg_feedback varchar(255) NOT NULL,
    Rating int NOT NULL,
    PERMISSION_LEVEL int,
    APPLICATION_COMPLETED int,
    APPLICATION_IN_PROGRESS int,
    PRIMARY KEY  (ID)
    )";
$result = mysqli_query($mysqli, $query3);

?>