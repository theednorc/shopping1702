  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Shopping Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <?php
                        session_start();
                    if(!isset($_SESSION['login'])){
                            header("location:login.php");
                    }

            ?>
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>Product</a>
                    </li>      
                      <li>
                        <a href="category.php"><i class="fa fa-fw fa-dashboard"></i>Category</a>
                    </li>   
                      <li>
                        <a href="order.php"><i class="fa fa-fw fa-dashboard"></i>Order</a>
                    </li>   
                          
                      <li>
                        <a href="user.php"><i class="fa fa-fw fa-dashboard"></i>User</a>
                    </li>      
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>