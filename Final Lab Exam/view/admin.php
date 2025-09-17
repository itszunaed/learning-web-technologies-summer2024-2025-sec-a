

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="../controller/adminFormVal.php">
    Employee Name:<input type="text" name="name"><br><br>
    Company:<input type="text" name="company" ><br><br>
    Contact:<input type="text" name="contact" ><br><br>
    Username:<input type="text" name="username" ><br><br>
    Password:<input type="password" name="password" ><br><br>
    <button type="submit">Register</button>
</form>

<br>

        <table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>Company</td>
                <td>EMAIL</td>
                <td>USERNAME</td>
                <td>PASSWORD</td>
                <td>EMAIL</td>
                <td>ACTION</td>
            </tr>
        <?php foreach($users as $u) { ?>
            <tr>
                <td><?php echo $u['id']; ?></td>
                <td><?=$u['username'] ?></td>
                <td><?=$u['password'] ?></td>
                <td><?=$u['email'] ?></td>
                <td>
                    <a href="editUser.php?id=<?=$u['id']?>"> EDIT </a> |
                    <a href="detailsUser.php"> DETAILS </a> |
                    <a href="deleteUser.php"> DELETE </a> 
                </td>
            </tr>
        <?php } ?>
        </table>



    
</body>
</html>