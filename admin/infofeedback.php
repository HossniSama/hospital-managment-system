	
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital SYSTEM</title>
	<link rel="icon" href="1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuA.php'; ?>       
	   </div>
	   <br>


<?php 
echo'<style>
body {
    font-family: "Open Sans", sans-serif;
    font-weight: 300;
    line-height:1em;
    color:#A7A1AE;
    background-color:white;
    text-align:center;
  }
  
  h1 {
    font-size:3em; 
    font-weight: 300;
    line-height:1em;
    text-align: center;
    color: #4DC3FA;
  }
  
  h2 {
    font-size:3em; 
    font-weight: 300;
    text-align: center;
    line-height:1em;
    display: block;
    padding-bottom: 2em;
    color: black;
  }
  
  h2 a {
    font-weight: 700;
    text-transform: uppercase;
    color: #FB667A;
    text-decoration: none;
  }
  
  .blue { color: #185875; }
  .yellow { color: #FFF842; }
  
  .container th h1 {
        font-weight: bold;
        font-size: 1em;
    text-align: left;
    color: #185875;
  }
  
  .container td {
        font-weight: normal;
        font-size: 1em;
    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
         -moz-box-shadow: 0 2px 2px -2px #0E1119;
              box-shadow: 0 2px 2px -2px #0E1119;
  }
  
  .container {
        text-align: left;
        overflow: hidden;
        width: 80%;
        margin: 0 auto;
    display: table;
    padding: 0 0 8em 0;
  }
  
  .container td, .container th {
        padding-bottom: 2%;
        padding-top: 2%;
    padding-left:2%;  
  }
  
  /* Background-color of the odd rows */
  .container tr:nth-child(odd) {
        background-color: #323C50;
  }
  
  /* Background-color of the even rows */
  .container tr:nth-child(even) {
        background-color: #2C3446;
  }
  
  .container th {
        background-color: #1F2739;
  }
  
  .container td:first-child { color:black ; }
  
  
  .container tr:hover {
     background-color: #464A52;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
         -moz-box-shadow: 0 6px 6px -6px #0E1119;
              box-shadow: 0 6px 6px -6px #0E1119;
  }
  
  .container td:hover {
    background-color: #FFF842;
    color: #403E10;
    font-weight: bold;
    
    box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
    transform: translate3d(6px, -6px, 0);
    
    transition-delay: 0s;
        transition-duration: 0.4s;
        transition-property: all;
    transition-timing-function: line;
  }
  
  @media (max-width: 800px) {
  .container td:nth-child(4),
  .container th:nth-child(4) { display: none; }
  }

</style>';
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hospital';
    //echo "hi";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }
   /* echo "Connected successfully hi"; */
    //print_r($_POST);
    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql);
       echo '<h2>FEEDBACKS</h2>';

    if ($result->num_rows > 0) {
        echo'<table class="container">';
        echo'<tr>';
        echo'<td>FeedBack ID:</td>';
        echo'<td>Experience:</td>';
        echo'<td>Comment:</td>';

        echo'</tr>';
        while ($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td>'.$row['id_feed'].'</td>';
            echo'<td>'.$row['text2'].'</td>';
            echo'<td>'.$row['text1'].'</td>';

            echo'</tr>';
        }
        echo'</table>';
    } else {
        echo'<table class="container">';
        echo'<tr>';
        echo'<td>FeedBack ID:</td>';
        echo'<td>Text:</td>';
        echo'<td>Text1:</td>';
        echo'</table>';
    }

    $conn->close();

        ?>
 

</body>
</html>