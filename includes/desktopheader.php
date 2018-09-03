  <!-- HEADER DESKTOP-->

  
<style>
  .header__navbar .header3-sub-list li a:hover {
    color: #4272d7;
    background: #008398;
}

</style>
<?php
    if (isset($_GET['tab'])) {
        $tab = $_GET['tab'];
    }
?>
        <header class="header-desktop3 d-none d-lg-block" style="background-color: #008398;">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="images/logo.png" alt="CoolAdmin" style="width: 30%" />
                        </a>
                    </div>
                   
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                             <?php if ($_SESSION['ROLE'] == 'Grader1' || $_SESSION['ROLE'] == 'Grader2' || $_SESSION['ROLE'] == 'Adjudicator') : ?>
                            <li class="<?= $tab == 'cfp_oct_subject' ? 'active' : ''; ?>">
                                <a href="index.php?tab=cfp_oct_subject" style="color:white;">
                                   
                                    <span class="bot-line"></span>CFP & OCT SUBJECTS</a>
                            </li>
                        <?php endif; ?>
                             <li class="<?= $tab == 'cfp' ? 'active' : ''; ?>">
                                <a href="list_cfp.php?tab=cfp" style="color:white;">
                                   
                                    <span class="bot-line"></span>LIST CFP </a>
                            </li>

                            <li>
                                <!-- <a href="index.php" style="color:white;">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Grading Form</a> -->
                            </li>

                             <li class="<?= $tab == 'oct' ? 'active' : ''; ?>">
                                <a href="list_oct.php?tab=oct" style="color:white;">
                                    
                                    <span class="bot-line"></span>LIST OCT </a>
                            </li>
                        </ul>
                            

                            
                            
                    </div>
               

                    <div class="header__tool">
                       
                        
                        <div class="account-wrap">
                            <div class="log">
                                
                            <a href="logout.php" style="color:white;">
                                   <i class="fas fa-sign-out-alt"></i> Logout</a>
                           
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->