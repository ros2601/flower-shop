<html>
<head>
    <title>
     Login page
    </title>
    <link rel="stylesheet"  href="login1.css">
</head>

<body>
<!----------------------------------->
<div class="container1">
    <div class="subcontainer1">
        <img src="logo.png" /> 
    </div>
</div> 
<!----------------------------------->
<div class="container2">
    <div class="subcontainer2">
        Friday, 10 July 2001
    </div>   
</div>
<!----------------------------------->
<div class="container3">
    <div class="subcontainer3">
    <form method="post" action="{{url('register-form')}}" > 
    {{csrf_field()}}
    <table>
        <tr>
          <h2 class="login-heading">Registeration form</h2>
        </tr>
            <tr>
                <td> <label>Username</label></td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td><label> Password</label></td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="register" value="Register" class="login_btn" />
                </td>
            </tr>
    </table>
    </form>
    </div>
</div>
<!----------------------------------->

<div class="container4"></div>
</body>
</html>