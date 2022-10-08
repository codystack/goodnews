const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_a057bfb00c4aa81dd4af274b8c5e895ef7faff85', // Replace with your public key
    email: document.getElementById('email-address').value,
    firstname: document.getElementById('first-name').value,
    lastname: document.getElementById('last-name').value,
    amount: document.getElementById('amount').value * 100,
    currency: 'NGN',
    ref: 'REF_'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/gdisagent/verify_transaction?reference=" + response.reference;
    }
  });
  handler.openIframe();
}