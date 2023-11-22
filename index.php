<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>

    <script>
        function setTimestamp() {
            // Get the current date and time
            var currentTime = new Date();

            // Format the date and time as a string
            var timestamp = currentTime.toISOString();

            // Set the value of the hidden input field
            document.getElementById("timestamp").value = timestamp;
        }
    </script>

   <style>
        body {
            text-align: left; /* Center-align the content in the body */
        }

        #header-container {
            margin: 0 auto; /* Center the container horizontally */
            text-align: center; /* Center-align the content within the container */
        }

        h1, h2 {
            margin: 0; /* Remove default margin for headers */
        }

        img {
            display: block; /* Make the image a block element to center it */
            margin: 0 auto; /* Center the image horizontally */
        }
    </style>


</head>
<body>

   <div id="header-container">

        <h1 style="color: blue;">WELCOME TO NPRA, PLEASE HELP US WITH YOUR DETAILS </h1>
        <br>
        
        <h2 style="color: Green;">Visitor's Information Form</h2>
        <br>

        <img src="https://www.npra.gov.gh/_resources/themes/npra/img/npra-logo.png?m=1588187907" alt="logo of NPRA" style="width:200px;height:200px;">
    </div>

    <form action="process_form.php" method="post" onsubmit="setTimestamp()">
    <!-- ... (your form fields) ... -->
</form><br>

        <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

        <br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

        <br>

        <label for="visitPurpose">Select Purpose:</label>
        <select id="visitPurpose" name="visitPurpose" required>
            <option value="enquiries">Enquiries</option>
            <option value="gentrust">Gentrust</option>
            <option value="visit">Visit</option>
            <option value="misclassification">Misclassification</option>
            <option value="dateOfBirth">Date of Birth</option>
        </select><br>
        <br>

        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" required><br>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@example.com"><br>

        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>



