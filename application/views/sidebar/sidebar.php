<?php
    echo $style;
?>
<body>
	<!-- <div class="area"></div> -->
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
                        <form method="post" action="<?php echo site_url('home/search');?>">
                            <input type="text" name="searchKey" placeholder="Search.." title="Type in a category">
                        </form>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
               <a href="<?php echo site_url('Login');?>">
                    <i class="fa fa-sign-in fa-2x"></i>
                    <span class="nav-text">
                        SignIn / SignUp
                    </span>
                </a>
            </li>  
        </ul>
    </nav>
</body>

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
</script>
