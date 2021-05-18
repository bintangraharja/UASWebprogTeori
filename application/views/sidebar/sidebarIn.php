<body>
	<nav class="main-menu">
        <ul>
            <li>
                <div class="fa">
                    <img src="<?php echo base_url().'assets/LogoPotrait.png'?>" width="60" height="60">
                </div>
                <span class="nav-text">
                <img src="<?php echo base_url().'assets/LogoLandscape.png'?>" width="150" height="60">
                </span>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-search fa-2x"></i>
                    <span class="nav-text">
                        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                    </span>
                </a> 
            </li>
            <li>
                <a href="HomePage.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>
            </li>
            <li>
                <a href="#myModal" data-toggle="#myModal" data-target="#myModal" id="cartModal">
                    <i class="fa fa-shopping-cart fa-2x"></i>
                    <span class="nav-text">
                        My Cart
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-list-alt fa-2x"></i>
                    <span class="nav-text">
                        Order List
                    </span>
                </a>
            </li>
        </ul>
        <ul class="logout">
            <li>
                <i class="fa fa-user fa-2x"></i>
                <span class="nav-text">
                    Welcome, <?php echo $this->session->userdata('name');?>
                </span>
            </li>
            <li>
               <a href="<?php echo site_url('Login/logout');?>">
                    <i class="fa fa-sign-out fa-2x"></i>
                    <span class="nav-text">
                        LogOut
                    </span>
                </a>
            </li>  
        </ul>
    </nav>
</body>

<div class="container">
    <div id="theModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-resize-small"></span></button>
                    <h4><?php echo $this->session->userdata('name');?>'s Cart</h4>
                </div>
                <div class="modal-body">
                    <table id="tables" class="table table-striped table-border dataTable" style="width: 100%">
                        <thead class="cartHead">
                            <tr>
                                <th> Image </th>
                                <th> Console </th>
                                <th> Duration </th>
                                <th> Price </th>
                                <th> </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="modal-body modalCart">
                    <div class="form-inline durationCart" style="text-align: center;">
                        <label>Add Duration </label>
                        <!-- Add + - input -->
                    </div>
                </div>
                <div class="modal-body modalCart">
                    <p>Subtotal    : </p>                
                </div>
                <button class="btn btn-block btnBook">BOOK ORDER</button>
            </div>
        </div>
    </div>
</div>

<script>
	function myFunction() {
		var input, filter, ul, li, a, i;
		input = document.getElementById("mySearch");
		filter = input.value.toUpperCase();
		ul = document.getElementById("myMenu");
		li = ul.getElementsByTagName("li");
		for (i = 0; i < li.length; i++) {
			a = li[i].getElementsByTagName("a")[0];
			if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
			  li[i].style.display = "";
			} else {
			  li[i].style.display = "none";
			}
		}
	}

    $(document).ready(function() {
        $('#theModal').modal({
            keyboard: false,
            show: false,
            backdrop: 'static'
        });

        $('#cartModal').click(function() {
            $('#theModal').modal('show');
        })
    });
</script>
