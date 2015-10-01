<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>User registration</title>
</head>

<body>

  <form method="get" action="regprocess.php" >
  <table width="300 border="0">
    <tr>
      <td>Username:</td>
      <td><input type="text" name="username" /></td>
    </tr>

    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" /></td>
    </tr>

    <tr>
      <td>Your first and last name:</td>
      <td><input type="text" name="name" /></td>
    </tr>

    <tr>
      <td>Password:</td>
      <td><input type="password" name="password" /></td>
    </tr>

    <tr>
      <td>I am here to:</td>
      <td><input type="checkbox" name="purpose" value="learn" />learn.</td>
      <td><input type="checkbox" name="purpose" value="teach" />teach. </td> 
    </tr>

    <tr>
      <td>My skills, experience:</td>
      <td><input type="text" name="skills" placeholder="Message to your tutor or message to your students about yourself." /></td>
    </tr>

    <tr>
    <td>&nbsp</td>
    <td><input type="submit" name:"submit" value:"Sign up" /></td>
    </tr>
  </table>
  </form>


</body>

</html>


