<html>
<head>
  <link rel='stylesheet' href="styles.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="registrationStyles.css">

  <script type="text/javascript">
    function validateForm()
    {
	  var a=document.forms["reg"]["newfname"].value;
      var b=document.forms["reg"]["newlname"].value;
      var c=document.forms["reg"]["newpassword"].value;
      var d=document.forms["reg"]["newphone"].value;
      var f=document.forms["reg"]["newemail"].value;
      var g=document.forms["reg"]["newjob_name"].value;
      var h=document.forms["reg"]["newis_human"].value;
      var i=document.forms["reg"]["newvote_cnt"].value;
      var j=document.forms["reg"]["newaddress"].value;
      // var k=document.forms["reg"]["newpic"].value;

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
      // if (k ==null || k =="")
      // {
      //   alert("Image must be filled out");
      //   return false;
      // }
    }
    // document.getElementById("uploadBtn").on('change', function () {
        // document.getElementById("uploadFile").value = this.value;
        // document.getElementById("uploadFile").html = this.value;
    // });

  </script>
</head>

<body>
  <form name="reg" action="edit_profile_exec.php" onsubmit="return validateForm()" method="post">
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
        <td width="171"><input type="text" name="newfname" /></td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div></td>
        <td><input type="text" name="newlname" /></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="text" name="newpassword" /></td>
      </tr>
      <tr>
        <td><div align="right">Phone:</div></td>
        <td><input type="text" name="newphone" /></td>
      </tr>
      <tr>
        <td><div align="right">email:</div></td>
        <td><input type="text" name="newemail" /></td>
      </tr>
      <tr>
        <td><div align="right">Job Name:</div></td>
        <td><input type="text" name="newjob_name" /></td>
      </tr>
      <tr>
        <td><div align="right">is Human:</div></td>
        <td><input type="text" name="newis_human" /></td>
      </tr>
      <tr>
        <td><div align="right">Vote Count:</div></td>
        <td><input type="text" name="newvote_cnt" /></td>
      </tr>            
      <tr>
        <td><div align="right">Address:</div></td>
        <td><input type="text" name="newaddress" /></td>
      </tr>
<!--       <tr>

        <td><div align="right">Picture:</div></td>
        <td><input id="uploadFile" placeholder="Choose File" disabled="disabled" /><div class="fileUpload btn btn-primary"><span>Upload</span>
            <input id="uploadBtn" type="file" class="upload" name="pic" /></div>
        </td>
      </tr> -->
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</body>
</html>