<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<nav class="navbar navbar-fixed-top navbar-light bg-faded">
            <!--Collapse button-->
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="fa fa-bars black-text"></i></a>

                <!--Content for large and medium screens-->
                <div class="navbar-desktop">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="" /></a>
                    <!--Links-->
                    <ul class="nav navbar-nav pull-right hidden-md-down text-uppercase">
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/login'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="#!"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                    </ul>
                    
                </div>

                <!-- Content for mobile devices-->
                <div class="navbar-mobile">

                    <ul class="side-nav" id="mobile-menu">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/login'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>