<!DOCTYPE html>
<html>
<head>
  <title>Form Validation</title>
  <style> 
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .card {
    width: 300px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  
  h2 {
    color: #007BFF;
    margin-bottom: 20px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    text-align: left;
    margin-bottom: 5px;
  }
  
  input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  
  button {
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .switch {
    margin-top: 15px;
    font-size: 14px;
  }
  
  .switch a {
    color: #007BFF;
    text-decoration: none;
  }
  </style>
</head>
<body>

  <div class="container">
  <div class="card">
  <form id="myForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" >
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone">
    <br>
    <input type="submit" value="Submit">
  </form>
</div></div>
  <script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
      var nameInput = document.getElementById("name");
      var emailInput = document.getElementById("email");
      var phoneInput = document.getElementById("phone");
      
      // Validate name (only alphabetic characters)
      var namePattern = /^[A-Za-z]+$/;
      if (!namePattern.test(nameInput.value)) {
        alert("Name can only contain alphabetic characters.");
        event.preventDefault();
        return;
      }

      // Validate email
      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (!emailPattern.test(emailInput.value)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
        return;
      }

      // Validate phone
      var phonePattern = /^\d{10}$/; // Change this pattern according to your needs
      if (!phonePattern.test(phoneInput.value)) {
        alert("Please enter a valid 10-digit phone number.");
        event.preventDefault();
        return;
      }

      // Form is valid, continue submitting
      alert("Form submitted successfully!");
    });
  </script>
</body>
</html>
