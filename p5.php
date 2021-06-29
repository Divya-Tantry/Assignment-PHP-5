<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    
    <div class="w3-container w3-half w3-margin-top">
        <form class="w3-container w3-card-4" method="POST">
            <center><h2>BANK DETAILS</h2></center>
            <br>
            <label>User Name:</label>
            <input class="w3-input" type="text" name="name" placeholder="Enter User Name" required>
            <br>
            <br>
            <label>Account Number:</label>
            <input class="w3-input" type="text" name="accno" placeholder="Enter Account Number" required>
            <br>
            <label>Amount</label>
            <input class="w3-input" type="text" name="amount" placeholder="Enter Amount" >
            <br>
           
            <!-- <button  name="display" value="DISPLAY" href="Display.php" width=""></button> -->
            
             <button name="create">Create</button>
            <button name="withdraw">Withdraw</button>
             <button name="deposit">Deposit</button>
             <button name="enquire">Enquire-Balance</button>
            

           
            
            <br>
            <br>
        </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank1";
    
    $mysql = new mysqli($servername, $username, $password, $dbname);
    If(!$mysql) die(“error”);
    if(isset($_POST['create'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
        if($amount<=500){
            echo "Minimum Balance is More then 500 is required";
        }
        else{
        $sql="insert into account (name,accno,amount) values ('$name','$accno','$amount')";
if($mysql->query($sql)===TRUE)
    {
        header("Location:a55a.php");
    
    }
    else
    {

    echo "User Already Exists";
    }}


    }
   
    if(isset($_POST['withdraw'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
       
        $query="SELECT * from account where accno='".$_POST["accno"]."'";
        $result = mysqli_query($mysql, $query);
        if($row = mysqli_fetch_array($result)){
              if ($row["amount"]<500){
                  echo 'No Sufficent Balance';
              }
              else{
                  $bal=$row['amount']-$amount;
                  if($bal<500){
                      echo "Your Blance After Withdraw is " .$bal. " please Maintain your Minimum balance 500!! Re-enter the Witdraw Amount!!";

                  }
                  else{

                    $sql="update account set amount = '$bal' where accno='".$_POST["accno"]."'";
                    if($mysql->query($sql)===TRUE)
                        {
                            echo "Record Updated";
                            header("Location:a55a.php");
                        
                        }

                  }

              }
              }  


    }

    if(isset($_POST['deposit'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
        $query="SELECT * from account where accno='".$_POST["accno"]."'";
        $result = mysqli_query($mysql, $query);
        if($row = mysqli_fetch_array($result)){
        $bal=$row['amount']+$amount;
        $sql="update account set amount = '$bal' where accno='".$_POST["accno"]."'";
if($mysql->query($sql)===TRUE)
    {
        header("Location:a55a.php");
    
        
    }}
    }


    if(isset($_POST['enquire'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
        $query="SELECT * from account where accno='".$_POST["accno"]."'";
        $result = mysqli_query($mysql, $query);
        if($row = mysqli_fetch_array($result)){
        echo "<br> Your Balance is " .$row['amount']." Thank You For Enquiring!!!";
        }
    }


    
    ?>
</body>
</html>