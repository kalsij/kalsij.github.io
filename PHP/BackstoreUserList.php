<!DOCTYPE html>
<html lang="en">

<head>
    <title>User List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!----bootstrap--->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type = "text/javascript" src="Javascript/script.js"></script>
    <!----Style--->
    <link rel="stylesheet" type="text/css" href="../Styles/BackstoreStyle.css"/>


</head>
<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="background-color: blue; position:fixed;">
            <h1 style="margin-top:0mm;color:white; font-size:50px;font-style:italic; font-weight:bold; margin-right:1cm;">
                GSO</h1>
    </nav>
     
    
    <div class="container-fluid text-center">    
        <div class="row content">

            <!-- Side Bar -->
 <div class="col-sm-2 sidenav">
            <br/>
            <p><a href="GroceryStore-1.html">Grocery Store</a></p>
            <p><a href="BackstoreProductList.html">Product List</a></p>
            <p><a href="BackstoreOrderList.html">Order List</a></p>
            <p> <a href="BackstoreUserList.html">User List</a></p>
            <p style="font-weight:bold;"><a href="GroceryStore-1.html">Log Out</a></p>
            </div>


            <div class="col-sm-8 text-left">       
                <div class="right">
                    <h2 style="font-style: italic;">User List</h2>
                    
                    <!-- Add User button -->
                    <a href="BackstoreAddUser.php" class="btn btn-primary" style="float: right;margin-bottom: 5px;">Add User</a>

                    <!-- User  List -->
                    <form>

                        <table class="table" id="UserTable">
                            <thead id="UserHead">
                                <tr>
                                    
                                    <th><p class="tab">First Name</p></th>
                                    <th><p> Last Name</p></th>
                                    <th><p> Gender</p></th>
                                    <th><p>Postal Code</p></th>
                                    <th><p>Email</p></th>
                                    <th><p>Password</p></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>          
                             <tr>
                          
                                
                                <td>Michael </td>
                                <td>Scott</td>
                                <td>Male</td>
                                <td>H1J 1J9</td>
                                <td>Michael54@gmail.com</td>
                                <td>password101</td>
                                <td></td>
                                <td><input type = "button" value = "Delete" class="btn btn-primary" onclick="deleteUser(this)" style="float:right;"/></td>
                                <td><a href="BackstoreEditOrderProfile.html" class="btn btn-primary" style="float: right"> Edit</a> </td>
                    
                            </tr>    
                            <tr>
                            <td>Michael </td>
                                <td>Scott</td>
                                <td>Male</td>
                                <td>H1J 1J9</td>
                                <td>Michael54@gmail.com</td>
                                <td>password101</td>
                                <td></td>
                                <td><input type = "button" value = "Delete" class="btn btn-primary" onclick="deleteUser(this)" style="float:right;"/></td>
                                <td><a href="BackstoreEditOrderProfile.html" class="btn btn-primary" style="float: right"> Edit</a> </td>
                    
                          </tr>
                          <tr>
                          <td>Michael </td>
                                <td>Scott</td>
                                <td>Male</td>
                                <td>H1J 1J9</td>
                                <td>Michael54@gmail.com</td>
                                <td>password101</td>
                                <td></td>
                                <td><input type = "button" value = "Delete" class="btn btn-primary" onclick="deleteUser(this)" style="float:right;"/></td>
                                <td><a href="BackstoreEditOrderProfile.html" class="btn btn-primary" style="float: right"> Edit</a> </td>
                    
                        </tr>
                        </table>
                        
                
                    </form>  
        </div>
    </div>

<br/><br/><br/><br/>
<!-- Footer -->

<footer class="container py-4" >
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2021-2022 </br> </small>
      </div>
      <div class="col-6 col-md">
        <h5>Team</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted">Fatema Akther</a></li>
          <li><a class="text-muted">Julie Trinh</a></li>
          <li><a class="text-muted">Jasmit Kalsi</a></li>
          <li><a class="text-muted">Dzmitry Fiodarau</a></li>
          <li><a class="text-muted">Alice Chen</a></li>
          <li><a class="text-muted">Georgia Pitic</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Promotions</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted">Newsletter</a></li>
          <li><a class="text-muted">Gift cards</a></li>
          <li><a class="text-muted">Contests</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted">Contact us</a></li>
          <li><a class="text-muted">Our story</a></li>
          <li><a class="text-muted">FAQ</a></li>
        </ul>
      </div>
    </div>
  </footer>
</html>