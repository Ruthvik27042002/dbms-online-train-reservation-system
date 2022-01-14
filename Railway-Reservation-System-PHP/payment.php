<script src="pay.js"></script>
<style>
body {
  margin:0;
  padding: 0;
  background-image:url(img/creditcard.jpg);
  overflow:hidden;
  height:100vh;
  background-size:cover;
  font-family: 'Times New Roman', Times, serif;
  


}

* {
  box-sizing: border-box;

}

.row {
 
  display: flex;
  
}

.col{
    margin-left: 20px;
}

 

.container {
  background-color:  #dde6e9c2;
  padding: 20px 20px 20px 20px;
  margin: 30px 20px 10px 230px;
  border: 1px solid lightgrey;
  border-radius: 15px;
  color:  #0a232b;
  margin-top:120px;
  margin-left:450px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #ecbf2bc4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 2px;
  cursor: pointer;
  font-size: 17px;
  font-family: 'Times New Roman', Times, serif;
  letter-spacing: 1px;
  font-size: large;
}

.btn:hover {
  background-color:#ecd60ed5 ;
}


hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

 

</style>

</head>

<body>

 
<div class="row">
  <div class="col">
    <div class="container">
     <form method="POST" name="myform" onsubmit="return vaildate()" action="thankyou.php">
  <div class="row">
          <div class="col">
            <h3>Billing Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name1" name="fname" placeholder="Name">
             <label for="fname"><i class="fa fa-phone"></i>Phone No</label>
            <input type="text" id="pp" name="phoneno" placeholder="Phone No">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr1" name="addresss" placeholder="14 N.W. Street">

            <div class="row">
              <div class="col">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="TN"     >
              </div>
              <div class="col">
                <label for="zip">Pincode</label>
                <input type="text" id="zip" name="zip" placeholder="100001"   >
              </div>
            </div>
          </div>

          <div class="col">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="Card Name"    >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111 2222 3333 4444"   >
            <div class="row">
              <div class="col">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Year">
              </div>
              <div class="col">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="000">
                <div class="col">
                  <h1 for="fee">FARE</h1>
                <h1>₹ 1500</h1>
        </div>
        </div>
        </div>
          </div>
  </div>
         <input type="submit" name="submit" value="Continue to checkout"  class="btn"  >
    </form>
      
      
       
    </div>
  </div>
  
</div>

</body>
</html>