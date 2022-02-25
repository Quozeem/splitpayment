
<!doctype html>
<html>
<head>
<script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="first-name">first Name</label>
    <input type="text" id="first-name" required/>
  </div>
  <div class="form-group">
    <label for="last-name">Password</label>
    <input type="password" id="last-name" required/>
  </div>
  <div class="form-group">
    <label for="last-name">Amount</label>
    <input type="text" id="amount" required/>
  </div>
<div class="form-group">
    <label for="last-name">lastname</label>
    <input type="text" required/>
  </div>
  <div class="form-group">
    <label for="last-name">Phone Number</label>
    <input type="tel" id="phone" required />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_357e8fe5fdd410da1e46285bd987238e2b8d1429', // Replace with your public key
    email: document.getElementById("email-address").value,
   amount: document.getElementById("amount").value * 100,
   // amount: 1500 * 100,
    phone: document.getElementById("phone").value,
    firstname: document.getElementById("first-name").value,
    lastname: document.getElementById("last-name").value,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Transaction failed');
      window.location = "index.php?transaction failed";
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "verify_transaction.php?reference=" + response.reference;
    }
  });
  handler.openIframe();
}
</script>
</body>
</html>