<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="form.css">
    <script src="./form.js" defer></script>
</head>
<body>
    <div class="container">
        <form action="./insert.php" method="POST">
            <h2>Register User</h2>
            <label for="psw">Password</label>
    <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
    title="Must contain at least one number and one uppercase and lowercase letter, and at 
    least 8 or more characters" required>
            <label for="file">Select a file:</label>
            <input type="file" id="file" name="file">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Please enter your email!">
                <label for="gender">Gender</label><br><br>
            <div class="boxes">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="Male">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="Female">
            </div>
            <label for="region">Region</label>
            <input type="text" name="region" id="region" placeholder="Please enter your region!">
                <label for="language">Language</label><br><br>
            <div class="boxes">
                <label for="english">English</label>
                <input type="checkbox" name="language" id="language" value="English">
                <label for="language">French</label>
                <input type="checkbox" name="language" id="language" value="French">
                <label for="others">Others</label>
                <input type="checkbox" name="language" id="language" value="Others">
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>      
    </div>
    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
</body>
</html>