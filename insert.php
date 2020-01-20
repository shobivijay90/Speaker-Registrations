
<?php
// Establishing Connection with Server
$connection = mysqli_connect("localhost:3306", "health4t_regis", "goh4tw2019") ; 
// checking connection
if (!$connection)
  {
  echo "Not connected to server";
  }
  if(!mysqli_select_db($connection, 'health4t_registration')){
      echo 'Database not selected';
  }
// Fetching variables of the form which travels in URL
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$title_department = $_POST['title_department'];
$institution = $_POST['institution'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$specialty = $_POST['specialty'];
$topic = $_POST['topic'];
$audience = $_POST['audience'];
$language = $_POST['language'];
$available_date = $_POST['available_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$preferred_date1 = $_POST['preferred_date1'];
$preferred_date2 = $_POST['preferred_date2'];
$preferred_date3 = $_POST['preferred_date3'];
$docusign = $_POST['docusign'];

//inserting data to php form
$sql="INSERT INTO speaker_registrations (firstname, lastname, title_department, institution, email, phonenumber, specialty, topic, audience, language, available_date, start_time, end_time, preferred_date1, preferred_date2, preferred_date3, docusign)
VALUES
('$firstname', '$lastname', '$title_department', '$institution', '$email', '$phonenumber', '$specialty', '$topic', '$audience', '$language', '$available_date', '$start_time', '$end_time', '$preferred_date1', '$preferred_date2', '$preferred_date3', '$docusign')";

$result=mysqli_query($connection,$sql);

//checking insertion
if($result){

$to = $email;
$subject =  "Health4TheWorld - Session Confirmation";


$message = '<html><body>';
$message .= '<p>Hi '. $firstname .' '. $lastname .',</p>';
$message .= '<p>Thanks for signing up for Health4theworld International GrandRounds. We value your participation in this global education mission.</p>';
$message .= '<p>Please see your session details below:</p>'; 
$message .= '<table rules="all" style="border: 2px solid black;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Speaker Name:</strong> </td><td>". $firstname .' '. $lastname ."</td></tr>";
$message .= "<tr><td><strong>Topic:</strong> </td><td>" . $topic . "</td></tr>";
$message .= "<tr><td><strong>Specialty:</strong> </td><td>". $specialty . "</td></tr>";
$message .= "<tr><td><strong>Session Date:</strong> </td><td>" . $available_date . "</td></tr>";
$message .= "<tr><td><strong>Start Time:</strong> </td><td>" . $start_time . "</td></tr>";
$message .= "<tr><td><strong>End Time:</strong> </td><td>" . $end_time . "</td></tr>";
$message .= "</table>";
$message .= '<p>Thanks,</p>';
$message .= '<p>Health4TheWorld Team.</p>';
$message .= '<p>Please reply to this email, If you want to cancel this session.</p>';
$message .= "</body></html>";

// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$fromName= "Health4TheWorld Academy";
$from= "autoreply@health4theworldacademy.org";
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: shobivijay90@gmail.com,bhavya.rehani@gmail.com,daria.titova@gmail.com' . "\r\n"; 
//$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 

mail($to, $subject, $message, $headers);

$link = "https://health4theworld.org/academy/wp-content/themes/wplms/Thankyou.php";
header("location:$link");  

}
else {
echo "Registration failed! Please try again later.";
}



?>