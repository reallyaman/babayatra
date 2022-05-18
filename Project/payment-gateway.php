<!-- INSERT into payment(name,card,expdate,cvv) VALUES("Afro","1234 5678 9012 3456","11/22","234"); -->

<?php 
// include("db.php");
// if(isset($_POST['submit'])){
//         $name =$_POST['name'];
//         $tel=$_POST['tel'];
//         $expdate=$_POST['expdate'];
//         $cvv=$_POST['cvv'];

//         $sql = "INSERT into payment(name,card,expdate,cvv) VALUES('$name','$card','$expdate','$cvv')";
        

//         mysqli_query($conn,$sql);

        // if(mysqli_query($conn,$sql)){
        //     header("ooo.php");
        //     echo"";
        // }
        // else{
        //     echo"error";
        // }

//     }

// ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PAYMENT</title>
</head>
<body>


    <form>
        <link rel="stylesheet" href="payment-gateway.css">
        <div class="wrapper">
             <div class="payment">
              <div class="payment-logo">
              <p>p</p>
            </div>
        <h2>Payment Gateway</h2>
    <div class="form">
      <div class="card space icon-relative">
        <label class="label">Card holder's name:</label>
        <input type="text" class="input" name="name" placeholder="Enter card holder name" required>
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="tel" class="input" name="tel" data-mask="0000 0000 0000 0000" placeholder="0000 0000 0000 0000" required>
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="text" name="expdate" class="input"  placeholder="00 / 00" required>
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVV:</label>
          <input type="text" class="input" name="cvv" data-mask="000" placeholder="000" required>
          <i class="fas fa-lock"></i>
        </div>
      </div>
        
      <a class="btn"  href="payment-done.html"> PAY </a>
      
    </div>
  </div>
</div>
</form>
</body>
</html>