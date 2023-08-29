<?php include("../../path.php");?>

<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
            
                <h1><a href="<?php echo base_url?>"><img src="/images/logo.png"  width="100" height="100">Doska</a></h1>
            </div>
            <nav class="col-8">
                <ul>
                <li><a  href="<?php echo base_url . "logout.php"?>" >Выход</a></li>   
                        <li>
                        
                            <a href="#"><i class="fa-brands fa-forumbee"></i><?php echo $_SESSION['login']; ?>
                        </a>
                    </li>

                                
                </ul>
            </nav>
        </div>
    </div>
</header>