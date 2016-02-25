<html class="pattern1">
<head>
  <link rel='stylesheet' href="styles.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="registrationStyles.css">
<style>
.pattern1 {
  background: white no-repeat; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* For Firefox 3.6 to 15 */
  background: linear-gradient(#1E90FF, #00BFFF, white) no-repeat; /* Standard syntax (must be last) */
  height: 100%;
  width: 100%;
}
</style>
  <script type="text/javascript">
    function validateForm()
    {
	  var a=document.forms["reg"]["newfname"].value;
      var b=document.forms["reg"]["newlname"].value;
      var c=document.forms["reg"]["newpassword"].value;
      var d=document.forms["reg"]["newphone"].value;
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

<body class="pattern1">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo Welcome . " " . $_SESSION['email'];?></a>
      </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="http://php-tysonggraham.rhcloud.com/">Home</a></li>
        <li class="active"><a href="http://php-tysonggraham.rhcloud.com/assignments.html">Assignments</a></li>
        <li><a href="https://www.spiritanimal.info/spirit-animal-quiz/">Guess My Spirit Animal</a></li>
        <li><a href='./listUsers.php'>View All Users</a></li>
        <li><a href='./compatibility_survey/survey.php'>Compatibility Survey</a></li>
        <li><a href='./editProfile.php'>Edit Profile</a></li>
        <li><a href='/logout.php'>Log Out</a></li>
    </ul>
  </div>
</nav>
  <form name="reg" action="edit_profile_exec.php" onsubmit="return validateForm()" method="post">
    <table width="374" border="0" align="center" cellpadding="2" cellspacing="0">
    <col width="230">
    <col width="144">
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
        <td width="95"><div align="right"><strong>First Name:</div></td>
        <td width="171"><input type="text" name="newfname" /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Last Name:</div></td>
        <td><input type="text" name="newlname" /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Password:</div></td>
        <td><input type="password" name="newpassword" /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Phone:</div></td>
        <td><input type="text" name="newphone" /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Job Name:</div></td>
        <td><input type="text" name="newjob_name" /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>is Human:</div></td>
        <td><input type="text" name="newis_human" /></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Vote Count:</div></td>
        <td><input type="text" name="newvote_cnt" /></td>
      </tr>            
      <tr>
        <td><div align="right"><strong>Address:</div></td>
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