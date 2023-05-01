 <?php
// include("connection.php");


// //Query to get data from the database
// $sql = "SELECT * FROM users";

// //Execute the query
// $result = mysqli_query($conn, $sql);

// //Create a new CSV file
// $fp = fopen('data.csv', 'w');

// //Write headers to the CSV file
// fputcsv($fp, array('id', 'fname', 'lname', 'email','password','gender'));

// //Loop through the data and write each row to the CSV file
// while ($row = mysqli_fetch_assoc($result)) {
//     fputcsv($fp, $row);
// }

// //Close the CSV file
// fclose($fp);

// //Open the CSV file
// $fp = fopen('data.csv', 'r');

// //Loop through the CSV file and display each row of data
// while ($row = fgetcsv($fp)) {
//     echo "id: " . $row[0] . "<br>";
//     echo "fname: " . $row[1] . "<br>";
//     echo "lname: " . $row[2] . "<br>";
//       echo "email: " . $row[3] . "<br>";
//     echo "password: " . $row[4] . "<br>";
//     echo "gender: " . $row[5] . "<br><br>";
// }
// header('Content-Type: text/csv');
//     header('Content-Disposition: attachment; filename="' . $data.csv . '"');
//     readfile($data.csv);
// //Close the CSV file
// fclose($fp);




include("connection.php");

// Query to get data from the database
$sql = "SELECT * FROM users";

// Execute the query
$result = mysqli_query($conn, $sql);

// Create a new CSV file
$fp = fopen('data.csv', 'w');

// Write headers to the CSV file
fputcsv($fp, array('id', 'fname', 'lname', 'email','password','gender'));

// Loop through the data and write each row to the CSV file
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($fp, $row);
}

// Close the CSV file
fclose($fp);

// Send CSV file to the browser for download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');
readfile('data.csv');
exit();
?> 
