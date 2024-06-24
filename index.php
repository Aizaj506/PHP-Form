
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Welcome To Mumbai & Navi Mumbai Trip.</h1>
    <p>Enter your details and submit the form to confirm your participation in the trip.</p>
    
    <form action="index.php" method="post">

        <input type="text" id="name" name="name" placeholder="Enter Your Name">

        <input type="text" id="age" name="age" placeholder="Enter Your Age">

        <input type="text" id="gender" name="gender" placeholder="Enter Your Gender">

        <input type="email" id="email" name="email" placeholder="Enter Your Email">

        
        <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone">

        
        <input type="text" id="address" name="address" placeholder="Enter Your Address">

        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your Queries..."></textarea>

        
        <button type="submit" value="Submit">Submit</button>
    </form>

    </div>
</body>
</html>