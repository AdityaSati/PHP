        <?php
            $name=$_POST['name'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $city=$_POST['city'];
            $course=$_POST['course'];
            $interests=$_POST['interests'];
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Form</title>
        </head>
        <body>
            <form method="post" action="form.php">
                <div>
            <label for="name">First Name:</label>
            <input id="name" type="text" name="name" placeholder="John" required/>
           </div>
           <div>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" placeholder="abc@xyz.com" required/>
        </div>
        <div>
            <label for="contact">Contact:</label>
            <input type="text" name="contact" placeholder="1234567890" pattern="[0-9]{10}" required title="should be 10 digits">
        </div>
        <div>
            <label for="city">City:</label>
            <input id="city" type="text" name="city" placeholder="Dehradun" required/>
        </div>
        <div>
            <label for="course">Course:</label>
            <input id="course" type="text" name="course" placeholder="BTech" required/>
        </div>
        <div>
            <label for="interests">Interests:</label>
            <input id="interests" type="text" name="interests" placeholder="Coding,Editing,Reading" required/>
        </div>
        <div>
            <input type="submit" name="submit">
        </div>
            </form>
            <table border="1" style="border-collapse: collapse; margin-top: 50px ;margin-left: auto; margin-right: auto; width: 200px; height: 100px">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>Course</th>
                    <th>Interests</th>
                </tr>
                <tr>
                    <th> <?php echo "$name" ?> </th>
                    <th> <?php echo "$email" ?> </th>
                    <th> <?php echo "$contact" ?> </th>
                    <th> <?php echo "$city" ?> </th>
                    <th> <?php echo "$course" ?> </th>
                    <th> <?php echo "$interests" ?> </th>
                </tr>
            </table>
        </body>
        </html>