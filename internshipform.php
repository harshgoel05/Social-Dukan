      <?php

$hostname="localhost";
$userid="u516047739_socialdukan";
$password="social123";
$database="u516047739_socialdukan";
$con=mysqli_connect($hostname,$userid,$password,$database);

        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $contactNum = $_POST["ContactNumber"];
        $whatsappNum = $_POST["WhatsappNumber"];
        $city = $_POST["CityName"];
        $department = $_POST["DepartmentName"];
        $college = $_POST["CollegeName"];

        $mailBody="
            Name: $name\n
            Email: $email\n
            Contact Number: $contactNum\n
            Whatsapp Number: $whatsappNum\n
            city: $city\n
            college: $college\n
            department: $department\n";

            
        $query = "INSERT into 1mginternship(Name,Email,ContactNum,WhatsappNum,City,College,Department )
   values('$name','$email','$contactNum','$whatsappNum','$city','$department','$college')";
        $res = mysqli_query($con, $query);

        mail("socialdukan@gmail.com","Form sumbission at Internship at 1mg", $mailBody, "From: $name <email>");
        
        die();
?>