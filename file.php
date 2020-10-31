<!DOCTYPE html>
<html>
<head>
	<title>Transcations Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" href = "scripting.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">






</head>
<body>
	

 
<div class="mytable">
<div class="heading1">
   <p><strong>Transactions Details</strong></p>
</div>

   <div class="table-responsive">
    <table class="table table-striped" >
        <thead>
            <tr>
                <th class="col">Id</th>
                <th class="col">Sender</th>
                <th class="col">Receiver</th>
                <th class="col">Amount Transferred</th>
                <th class="col">Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transactions";

            $query =mysqli_query($conn,$sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <div class="myid"><td class="dbcol"><?php echo $rows['id']; ?></td></div>
            <td class="dbcol"><?php echo $rows['sender']; ?></td>
            <td class="dbcol"><?php echo $rows['receiver']; ?></td>
            <td class="dbcol"><?php echo $rows['credits']; ?> </td>
            <td class="dbcol"><span><?php echo $rows['time']; ?></span></td>

        <?php
            }

        ?>
        </tbody>
    </table>
</div>
<br>
<br>

<a href="customers.php"><button class="btn btn-info">View Customers</button></a>



    </div>






<footer>
	
	<div class="sociallinks">
      	     <a href="https://www.facebook.com/akash.moury.9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/akash-maurya-b152831a2/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/akash_._maurya/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

      </div>
      <div class= "copyright">
        © 2020 Akash Maurya All Rights Reserved 
  </div>
     
</footer>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>
