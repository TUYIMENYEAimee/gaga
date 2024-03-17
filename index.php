<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
</head>
<body>

<h2>User Registration Form</h2>

<form action="/submit_registration" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" required><br>
  
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" required><br>
  
  <label for="phone">Phone Number:</label><br>
  <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
  <small>Format: 123-456-7890</small><br>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>
