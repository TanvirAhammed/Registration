<!DOCTYPE html>
<html>
<body>

<form action="loginaction/result.php" method='post'>

<h1>Registration</h1>

<table style="width:50%">

<tr>

    <td><label for="fname">Name:</label></td>
    <td><input type="text" id="textbox1"></td>


</tr>

<tr>

    <td><label for="fname">Email:</label></td>
    <td><input type="text" id="textbox2"></td>


</tr>

<tr>

    <td><label for="fname">User name:</label></td>
    <td><input type="text" id="textbox3"></td>


</tr>
<tr>

    <td><label for="fname">Password:</label></td>
    <td><input type="text" id="textbox4"></td>


</tr>
<tr>

    <td><label for="fname">Confirm Password:</label></td>
    <td><input type="text" id="textbox5"></td>


</tr>

</table>
<br>



    <label for="fname">Gender:</label><br>

    <br>

  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

  <br>
  <br>
  <br>
  <label for="fname">Date of Birth:</label><br>

  
<input type="date" id="birthday" name="birthday"><br>

<br>


<input type="submit" value="Submit">

<input type="reset">


</form>

</body>

</html>