<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .registration-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="password"],
    .form-group input[type="email"],
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group select {
      height: 32px;
    }

    .form-group input[type="radio"] {
      margin-right: 5px;
    }

    .submit-btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="registration-form">
    <h2>Registration Form</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" value="Kamal">
      </div>

      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="Perera">
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="Perera.k">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
      </div>

      <div class="form-group">
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" checked> Male
        <input type="radio" name="gender" value="Female"> Female
      </div>

      <div class="form-group">
        <label for="academic_year">Academic Year:</label>
        <select name="academic_year" id="academic_year">
          <option value="1st Year">1st Year</option>
          <option value="2nd Year">2nd Year</option>
          <option value="3rd Year">3rd Year</option>
          <option value="4th Year">4th Year</option>
        </select>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="test@gmail.com">
      </div>

      <div class="form-group">
        <label for="phone_no">Phone No:</label>
        <input type="text" name="phone_no" id="phone_no" value="077123456">
      </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      echo "<h2>Submitted Values:</h2>";
      echo "<p><strong>First Name:</strong> " . $_POST["first_name"] . "</p>";
      echo "<p><strong>Last Name:</strong> " . $_POST["last_name"] . "</p>";
      echo "<p><strong>Username:</strong> " . $_POST["username"] . "</p>";
      echo "<p><strong>Password:</strong> " . $_POST["password"] . "</p>";
      echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
      echo "<p><strong>Academic Year:</strong> " . $_POST["academic_year"] . "</p>";
      echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
      echo "<p><strong>Phone No:</strong> " . $_POST["phone_no"] . "</p>";
    }
  ?>
</body>
</html>