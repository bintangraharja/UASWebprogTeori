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
                <a href="<?php echo site_url('home');?>">
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
                    <!-- <span class="icon-input-btn">
                        <i class="glyphicon glyphicon-resize-small"></i> 
                        <input type="submit" class="close" data-dismiss="modal" value="&#xf043;">
                    </span> -->
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
                            <?php
                                $totalPrice = 0;
                                $duration = 1;
                                foreach($orders as $temp){
                                    $ConsoleId = $temp['ConsoleID'];
                                    $ConsoleName = $temp['ConsoleName'];
                                    $Price = $temp['Price'];
                                    
                            ?>
                            <tr>
                                <td><img style="width: auto; height: 100px;" src="<?php echo site_url('home/showImg/').$ConsoleId ?>"></td>
                                <td><?php echo $ConsoleName; ?> </td>
                                <td> <?php echo $duration; ?> days </td>
                                <td><?php echo $Price; ?> </td>
                                <td>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-minus-sign deleteMenu"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            $totalPrice = $totalPrice + $Price;
                                }
                            ?>
                        </thead>
                    </table>
                </div>
                <div class="modal-body durationCart">
                    <div class="col-sm-5">
                        <h4 style="text-align: right;">Add Duration </h4>
                    </div>
                    <div class="col-sm-7">
                        <div class="input-group input-number-group">
                            <div class="input-group-button">
                                <span class="input-number-decrement">-</span>
                            </div>
                            <input class="input-number" type="number" value="1" min="1" max="30">
                            <div class="input-group-button">
                                <span class="input-number-increment">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body subCart">
                    <p>Subtotal    : <?php echo $totalPrice; ?> </p>                
                </div>
                <input type="submit" class="btn btn-block btnBook" value="BOOK ORDER">
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

    $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
    });
    $('.input-number-decrement').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val - 1);
    })
</script>
