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
                    <h2>Product Manager</h2>
                    </div>
            <div class="addpage">
                <p>Add Product</p>
           
                <form method="post" action="{{url('/add-product')}}" > 
                {{csrf_field()}}
                    <table>
                        <tr>
                            <td></td>
                        <td>
                            <select name="category">
                            <option>Add Category</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Footwear">Footwear</option>
                        </select>
                        </td>
                        </tr
                        <tr>
                            <td class="t1">Name*</td>
                            <td><input type="text" name="name" value="{{isset($findrec[0]->name) ? $findrec[0]->name:""}}"></td>
                        </tr>
                        <tr>
                            <td class="t1">Price</td>
                            <td><input type="text" name="price" value="{{isset($findrec[0]->title) ? $findrec[0]->title:""}}"></td>
                        </tr>
                
                        <tr>
                            <td class="t1"> Description</td>
                            <td ><textarea name="description" rows="5" cols="55" value="{{isset($findrec[0]->content) ? $findrec[0]->content:""}}"></textarea></td>
                        </tr>

                        <tr>
                            <td class="t1">Image</td>
                            <td><input type="file" name="status" value="{{isset($findrec[0]->status) ? $findrec[0]->status:""}}">Choose any picture file</td>
                            
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