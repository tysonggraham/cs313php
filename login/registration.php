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
      var a=document.forms["reg"]["fname"].value;
      console.log(a);
      var b=document.forms["reg"]["lname"].value;
      console.log(b);
      var c=document.forms["reg"]["password"].value;
      console.log(c);
      var d=document.forms["reg"]["phone"].value;
      console.log(d);
      var f=document.forms["reg"]["email"].value;
      console.log(f);
      var g=document.forms["reg"]["job_name"].value;
      console.log(g);
      var h=document.forms["reg"]["is_human"].value;
      console.log(h);
      var i=document.forms["reg"]["vote_cnt"].value;
      console.log(i);
      var j=document.forms["reg"]["address"].value;
      console.log(j);
      // var k=document.forms["reg"]["pic"].value;

      if ((a=="") && (b=="") && (c=="") && (d=="") && (e=="") && (f==""))
      {
        alert("All Fields must be filled out");
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
        alert("is_human name must be filled out");
        $('#is_human').attr("placeholder", "Please enter 0 for animal, 1 for human");
        $('#is_human').css("color","red");
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
    //     document.getElementById("uploadFile").value = this.value;
    //     document.getElementById("uploadFile").html = this.value;
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
  <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table class="container" width="400" border="0" align="center" cellpadding="2" cellspacing="0">
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
        <td width="171"><input id="fname" type="text" name="fname" /></td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div></td>
        <td><input id="lname" type="text" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right">Password:</div></td>
        <td><input id="password" type="password" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right">Phone:</div></td>
        <td><input id="phone" type="text" name="phone" /></td>
      </tr>
      <tr>
        <td><div align="right">email:</div></td>
        <td><input id="email" type="text" name="email" /></td>
      </tr>
      <tr>
        <td><div align="right">Job Name:</div></td>
        <td><input id="job_name" type="text" name="job_name" /></td>
      </tr>
      <tr>
        <td><div align="right">is Human:</div></td>
        <td><input id="is_human" type="text" name="is_human" /></td>
      </tr>
      <tr>
        <td><div align="right">Vote Count:</div></td>
        <td><input id="vote_cnt" type="text" name="vote_cnt" /></td>
      </tr>            
      <tr>
        <td><div align="right">Address:</div></td>
        <td><input type="text" id="address" name="address" /></td>
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