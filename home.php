




<html>
<head>
<title> HOME </title>
</head>
<body><?php
$db = mysqli_connect('localhost', 'phpmyadmin', 'java@123', 'hr_dev');


   

   $query="select * from user_profile";
 
   $run = mysqli_query($db,$query);

   if($run==true)
   {
      ?>
      <h1><a href="logout.php">Logout</a></h1>
      <?php
      echo"$creation_timestamp";
      ?>
      <table border="1" align="center">
      <tr bgcolor="red">
      <td>name</td>
      <td>jobtitle</td>
      <td>gender</td>
      <td>city</td>
      </tr>
      <?php
      while($data=mysqli_fetch_assoc($run)){
         ?>
         <tr>
         <td><?php echo $data['name']; ?></td>
         <td><?php echo $data['jobtitle']; ?></td>
         <td><?php echo $data['gender']; ?></td>
         <td><?php echo $data['city']; ?></td>
         </tr>
         <?php
      }
      ?>
      </table>
      <?php
   }
   else{

         echo"error";


      }

      
   


?>


</body>
</html>
