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
                    <h3><a href="summarypage.blade.php">Page Summary</a></h3><hr/>
                    <p><a href="addpage.blade.php">Add Page</a></p><hr/>
                    <h3>Event Summary</h3><hr/>
                    <p>Page Summary</p><hr/>
                    <h3>Category Summary </h3><hr/>
                    <p>Add Category</p><hr/>
                    <h3>Product Summary</h3><hr/>
                    <p>Product Summary</p>
                    <p>Username : admin</p>
                 </div> 
            </div>
        </div> 

        <div class="right-section">
            <div class="right">

            <div class="heading">
                <h2>Category Manager</h2>
            </div>
            <div class="addpage">
                <p>Add Category</p>
           
                <form method="post" action="{{url('/add-category')}}" > 
                {{csrf_field()}}
                    <table>
                        <tr>
                            <td class="t1">Name*</td>
                            <td><input type="text" name="name" value="{{isset($findrec[0]->name) ? $findrec[0]->name:""}}"></td>
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