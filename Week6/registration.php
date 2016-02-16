<html>
<head>
  <script type="text/javascript">
    function validateForm()
    {
      var a=document.forms["reg"]["fname"].value;
      var b=document.forms["reg"]["lname"].value;
      var c=document.forms["reg"]["password"].value;
      var d=document.forms["reg"]["phone"].value;
      var f=document.forms["reg"]["email"].value;
      var g=document.forms["reg"]["job_name"].value;
      var h=document.forms["reg"]["is_human"].value;
      var i=document.forms["reg"]["vote_cnt"].value;
      var j=document.forms["reg"]["address"].value;
      // var h=document.forms["reg"]["pic"].value;

      if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
      {
        alert("All Field must be filled out");
        return false;
      }
      if (a==null || a=="")
      {
        alert("First name must be filled out");
        return false;
      }
      if (b==null || b=="")
      {
        alert("Last name must be filled out");
        return false;
      }
      if (c==null || c=="")
      {
        alert("phone must be filled out");
        return false;
      }
      if (d==null || d=="")
      {
        alert("address must be filled out");
        return false;
      }
      if (f==null || f=="")
      {
        alert("email must be filled out");
        return false;
      }
      if (g==null || g=="")
      {
        alert("job name must be filled out");
        return false;
      }
      if (h==null || h=="")
      {
        alert("is human must be filled out");
        return false;
      }
      if (i==null || i=="")
      {
        alert("vote count must be filled out");
        return false;
      }
      if (j==null || j=="")
      {
        alert("Address must be filled out");
        return false;
      }
    }
  </script>
</head>

<body>
  <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2">
        <div align="center">
          <?php 
        if (!isset($_GET['remarks'])) {$remarks=""; }
        else {$remarks=$_GET['remarks']; }
        if ($remarks==null and $remarks=="")
        {
        echo 'Register Here';
        }
        if ($remarks=='success')
        {
        echo 'Registration Success';
        }
        ?>  
          </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">First Name:</div></td>
        <td width="171"><input type="text" name="fname" /></td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div></td>
        <td><input type="text" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="text" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right">Phone:</div></td>
        <td><input type="text" name="phone" /></td>
      </tr>
      <tr>
        <td><div align="right">email:</div></td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td><div align="right">Job Name:</div></td>
        <td><input type="text" name="job_name" /></td>
      </tr>
      <tr>
        <td><div align="right">is Human:</div></td>
        <td><input type="text" name="is_human" /></td>
      </tr>
      <tr>
        <td><div align="right">Vote Count:</div></td>
        <td><input type="text" name="vote_cnt" /></td>
      </tr>            
      <tr>
        <td><div align="right">Address:</div></td>
        <td><input type="text" name="address" /></td>
      </tr>
<!--       <tr>
        <td><div align="right">Picture:</div></td>
        <td><input type="text" name="pic" /></td>
      </tr> -->
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</body>
</html>