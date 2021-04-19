<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #00001a ;
}
.main_div
{
    width:100%;
    height:100vh;
 
}
*{
    margin:0;
    padding:0;
   box-sizing:border-box;
}
.display_table
{
    width:90vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
}
.center_div
{
    width:90vw;
    height:90vh;
    
    padding:10px 0 0 0;
    box-shadow:0 70px 20px 0 rgba(0,0,0,0.03);
    border-radius:10px;
    margin-left:30px;
}
h1
{
    font-size:20px;
    color:  #00131a;
    text-align:center;
    margin-top:-20px;
    margin-bottom:20px;
}
table
{
    border-collapse:collapse;
    background-color:black;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 5px;
    border-collapse:collapse;
    table-layout:fixed;
    opacity:0.9;
    color: #00ace6;
    font-weight:bold;
    margin:auto;
}
th,td
{
  border:1px solid  #00ace6;
   padding:2px 15px;
  text-align:center;
  opacity:0.9;
  color: #00ace6 ; 
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:15px;
}
body {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
</head>
<body background="images/15.png"; >
<div class="main_div">
     <div class="navbar navbar-expand-md">
     <img src="images/logo.png" class="logo" width="65" height="55"; style="padding-right: 10px;">
      <a href="#" class="navbar-brand font-weight-bold text-white text-center"; style= "font-size: 35px;">SJ BANK</a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>
     
       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link text-white">ABOUT</a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link text-white">CUSTOMERS</a></li>
             <li class="nav-item">
                 <a href="viewtransactions.php" class="nav-link text-white ">TRANSACTION</a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link text-white"></a></li>
              <li class="nav-item">
                  <a href="#" class="nav-link text-white">CONTACT</a></li>    
               </ul>
        </div>
     </div>

      
   
          <div class="display_table">
          
                 <br><h1><b><u>TRANSACTIONS DETAILS</u><b></h1>
                 <div class="center_div">
               <div class="table-responsive">
                    <table>
                    
                    <thead>
                     <tr>
                     <th>Sender</th>
                      <th>Recipient</th>
                      <th>Amount</th>
                       <th>Time</th>
                    
                      
                    </tr>
                    </thead>
                    
                   <tbody>
                  </div>
          <?php
          include 'connection.php';
          $selectquery = "select * from transferdetails";
          $query = mysqli_query($con,$selectquery);
          $numofrows = mysqli_num_rows($query);

           while($res = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td><?php  echo $res['Sender']; ?></td>
               <td><?php echo $res['Receipient']; ?></td>
               <td><?php echo $res['Amount']; ?></td>
               <td><?php echo $res['Time']; ?></td>
             
               </tr>
             <?php
          }
           ?>


</tbody>
</table>
</div>

</div>

</div>
 </div>

</body>
</html>


    



















