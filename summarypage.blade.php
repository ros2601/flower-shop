<html>

<head>
    <title>
     Control pannel 
    </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="summary.css" >
  
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
                       <p>  This section displys the list of Pages</p><hr size="1"/>

                    <div class="link1">
                       <a href="pageadd.blade.php" >Click here</a> to create <a href="pageadd.blade.php">New Page</a><br/>
                    </div>

                    <div class="displaypage">

                       <div class="sea">Search</div>
                           <div class="sea-table">
                           <form method="post" action="{{url('/search-record')}}">
                                {{csrf_field()}}
                                <table width=100%>
                                   <tr>
                                       <td>Search By Page Name </td>
                                       <td><input type="text" name="search-text"><button name="submit" value="Search">Search</button></td>
                                   </tr>
                                 </table>
                            </form>
                           </div>
                       </div>
                       <br/>
                     
                       <div id="table">
                    
                       <table width=100%   border=1px solid black>
                         <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                         </tr> 

                         @foreach($data as $row)
                         <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->content}}</td>
                            <td>{{$row->status}}</td>
                            <td><a href="{{'edit_display/'.$row->id}}" ><img src="edit.png" width=18px height=18px></a></td>
                            <td><a href="{{'delete_data/'.$row->id}}" >Delete</a></td>
                         </tr>
                        @endforeach

                       </table>
                        </div>
                        {{$data->links()}}
</div>
            </div>
        </div>
    </div>
</div>

     
<div class="container4"></div>
</body>

</html>