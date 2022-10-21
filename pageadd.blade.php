<html>

<head>
    <title>
     Control pannel 
    </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" >

</head>

<body>
<!----------------------------------->
<div class="container1">
    <div class="subcontainer1">
        <img src="logo.png" /> 
        <button>Logout</button>
    </div>
</div> 
<!----------------------------------->
<div class="container2">
    <div class="subcontainer2">
    <?php
       echo date('d-m-Y');
       ?>
    </div>   
</div>
<!----------------------------------->
<div class="maincontainer">
    <div class="innerconatiner">

        <div class="left-section">
            <div class="left">
                <br/>
                <div class="content1">
                    <h3><a href="pagesummary.blade.php">Page Summary</a></h3><hr/>
                    <p><a href="addpage.blade.php">Add Page</a></p><hr/>
                    <h3>Event Summary</h3><hr/>
                    <p>Page Summary</p><hr/>
                    <h3>Change Password</h3><hr/>
                    <h3>Module Summary</h3><hr/>
                    <p>Login Information</p>
                    <p>Username : admin</p>
                 </div> 
            </div>
        </div> 

        <div class="right-section">
            <div class="right">
                    <div class="heading">
                    <h2>Page Manager</h2>
                    </div>
            <div class="addpage">
                <p>Add Page</p>
           
                <form method="post" action="{{url('/add-page')}}" > 
                {{csrf_field()}}
                    <table>
                        <tr>
                            <td class="t1">Name*</td>
                            <td><input type="text" name="name" value="{{isset($findrec[0]->name) ? $findrec[0]->name:""}}"></td>
                        </tr>
                        <tr>
                            <td class="t1">Title</td>
                            <td><input type="text" name="title" value="{{isset($findrec[0]->title) ? $findrec[0]->title:""}}"></td>
                        </tr>
                
                        <tr>
                            <td class="t1"> Content</td>
                            <td ><textarea name="content" rows="15" cols="55" value="{{isset($findrec[0]->content) ? $findrec[0]->content:""}}"></textarea></td>
                        </tr>

                        <tr>
                            <td class="t1">Status</td>
                            <td><input type="checkbox" name="status" value="{{isset($findrec[0]->status) ? $findrec[0]->status:""}}"></td>
                        </tr>
        
                    </table>

                    <div class="btns" >
                         <input type="submit" name="save" value="Save" />
                         <input type="button" name="cancel" value="Cancel" />  
                    </div>

               </form>  
            </div>
        </div>
    </div>
</div>

</div>
<div class="container4"></div>
</body>
</html>