<!DOCTYPE html>
<html>

    <head>
        <title>User Manager</title>
    </head>

    <body>
        <form action="addusers.php" method = "post">
            First name:<input type="text" name="forename"><br>
            Last name:<input type="text" name="surname"><br>
            Password:<input type="password" name="passwd"><br>
            House:<input type="text" name="house"><br>
            Year:<input types="text" name="year"><br>
            Gender:<select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select><br>
            <input type="radio" name="role" value="Pupil" checked> Pupil<br>
            <input type="radio" name="role" value="Teacher" checked> Teacher<br>
            <input type="radio" name="role" value="Admin" checked> Admin<br>
            <input type ="submit" value="Add User">
        </form>

    </body>


</html>