<!DOCTYPE html>
<html lang = "en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="img/bk_logo1.png">
        <link rel="stylesheet" href="html_layout.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title> BK Company </title>
    </head>
    <body>
       
    </div>
         

            <table class = "table">
            <thead>
      <tr>
        <th>Friend</th>
       
      </tr>
    </thead>
    <?php include ('friendquery.php');
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tbody>
    <tr>
        <td> <?php echo $row['clientname'];?> </td>
        <td> <?php echo $row['address'];?> </td>
        
        <?php } ?>
    </tbody>
    </table>

         </div>
         </div>
         

         <table class = "table">
         <thead>
   <tr>
     <th>Username</th>
    
   </tr>
 </thead>
 <?php include ('alluserquery.php');
 while($row = mysqli_fetch_assoc($result)) {
 ?>
 <tbody>
 <tr>
     <td> <?php echo $row['username'];?> </td>
     
     <?php } ?>
 </tbody>
 </table>

      </div>
    </body>
</html>