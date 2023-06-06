document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;

    // Here, you can perform any necessary validation or processing before displaying the confirmation message
    // For simplicity, let's assume the form is valid and the order is placed successfully

    // Display confirmation message
    document.getElementById('orderForm').classList.add('hidden');
    document.getElementById('confirmationMsg').classList.remove('hidden');
});
    