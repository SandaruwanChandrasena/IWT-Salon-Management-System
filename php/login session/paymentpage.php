

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../styles/payment.css">

</head>
<body style="background-image: url('../../src/payment.png'); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">

<div class="body-main">

<div class="payment-main">
    

    <form>
    
        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Kamal Aberathna" id="inputid" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" id="inputid" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Mihindu Mawatha, Kurunegala" id="inputid" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Kururnegala" id="inputid" required>
                </div>
                
            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../../src/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. Kamal Aberathna" id="inputid" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" id="inputid" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" id="inputid" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" id="inputid" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" id="inputid" required>
                    </div>
                </div>

            </div>
    
        </div>

      <button class="submit-btn" onclick="return confirm('successfully Placed');"><a href="home.php">Checkout</a></button>


    </form>

</div>    
    
</div>

</body>
</html>