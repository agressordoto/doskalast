<?include("path.php");?>

<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
            
                <h1><a href="<?php echo base_url?>"><img src="/images/logo.png"  width="100" height="100">Doska</a></h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li ><a href="/"><i class="fa-solid fa-house" ></i>Главная</a></li>
                    
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="#"><i class="fa-brands fa-forumbee"></i><?php echo $_SESSION['login']; ?></a>
                        <ul>
                        <?php if ($_SESSION['admin']): ?>
                            <li><a href="#">Админ панель</a></li>
                            <?php endif; ?>
                            <li><a  href="<?php echo base_url . "logout.php"?>" >Выход</a></li>
                        </ul>
                    </li>
                    
                    <?php else: ?>
                        <a href="<?php echo base_url . "log.php"; ?>"><i class="fa-brands fa-forumbee"></i>
                        Войти
                        </a>
                        <ul>
                            <li><a  href="<?php echo base_url . "reg.php"?>">Регистрация</a></li>
                        </ul>
                            <?php endif; ?>
                            <li><a href="single.php"><i class="fa-solid fa-comment"></i>О нас</a></li>
                    <li><a href="#"><i class="fa-solid fa-address-card"></i>Услуги</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>