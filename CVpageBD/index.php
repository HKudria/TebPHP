<?php
session_start();
if(empty($_SESSION['lang'])){
    $_SESSION['lang'] = 'en';
}

if(!empty($_GET['lang'])){
    if($_GET['lang'] == 'en'){
        $_SESSION['lang'] = 'en';
    }
    if($_GET['lang'] == 'pl'){
        $_SESSION['lang'] = 'pl';
    }
}
$data = require_once 'connect.php';
$aboutData = $db->query("SELECT * FROM about WHERE `lang` = '$_SESSION[lang]'");
$aboutData = $aboutData->fetch();
$educationData = $db->query("SELECT * FROM educations WHERE `lang` = '$_SESSION[lang]'");
$languages = $db->query("SELECT * FROM languages  WHERE `lang` = '$_SESSION[lang]'");
$interest = $db->query("SELECT * FROM interests WHERE `lang` = '$_SESSION[lang]'");
$aboutCareer = $db->query("SELECT * FROM aboutcareer WHERE `lang` = '$_SESSION[lang]' ");
$aboutCareer = $aboutCareer->fetch();
$careers = $db->query("SELECT * FROM careers WHERE `lang` = '$_SESSION[lang]'");
$projects = $db->query("SELECT * FROM projects WHERE `lang` = '$_SESSION[lang]'");
$skills = $db->query("SELECT * FROM skills");
$comments = $db->query("SELECT * FROM comments ORDER BY time_added DESC");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>CV - Herman Kudria</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=">CV - Herman Kudria">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div class="wrapper">

       <div class="warning">
        <?php
        if (isset($_SESSION['message'])){
            foreach ($_SESSION['message'][$_SESSION['lang']] as $mistake){
                echo $mistake . "<br>";
            }
            unset($_SESSION['message']);
        }
        ?>
       </div>

        <div class="sidebar-wrapper">
            <div class="lang">
                <?php
                if($_SESSION['lang'] == 'en'){
                    echo "Chose language: ";
                } else if($_SESSION['lang'] == 'pl'){
                    echo "Wybierz język: ";
                }
                ?>
                <a href="./index.php?lang=en">English</a> | <a href="./index.php?lang=pl">Polski</a>
            </div>
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.jpg" alt="" width="150" height="auto"/>
                <h1 class="name"><?php echo $aboutData['name'] ?></h1>
                <h3 class="tagline"><?php echo $aboutData['post'] ?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?php echo $aboutData['email'] ?>"><?php echo $aboutData['email'] ?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?php echo $aboutData['phone'] ?>"><?php echo $aboutData['phone'] ?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="<?php echo $aboutData['site_url'] ?>" target="_blank"><?php echo $aboutData['site'] ?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?php echo $aboutData['linkedIn'] ?>" target="_blank">Herman Kudria</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="<?php echo $aboutData['git'] ?>" target="_blank"><?php echo $aboutData['git'] ?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title"><?php echo $_SESSION['lang']=='en' ? 'Education' : 'Edukacja'; ?></h2>
                <?php
                foreach ($educationData as $educationDatum){
                    echo <<<EDUCATION
                        <div class="item">
                            <h4 class="degree">$educationDatum[faculty]</h4>
                            <h5 class="meta">$educationDatum[university]</h5>
                             <div class="time">$educationDatum[yearStart] - $educationDatum[yearEnd]</div>
                         </div><!--//item-->
                    EDUCATION;
                }
                ?>
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title"><?php echo $_SESSION['lang']=='en' ? 'Languages' : 'Znajomość języków'; ?></h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    foreach ($languages as $language){
                    echo <<<LANGUAGES
                       <li>$language[language] <span class="lang-desc">$language[level]</span></li>
                    LANGUAGES;
                    }
                    ?>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title"><?php echo $_SESSION['lang']=='en' ? 'Interests' : 'Zainteresowania'; ?></h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    foreach ($interest as $interes){
                        echo <<<INTEREST
                       <li>$interes[ineterest]</li>
                    INTEREST;
                    }
                    ?>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i><?php echo $_SESSION['lang']=='en' ? 'Career Profile' : 'Profil kandydata'; ?></h2>
                <div class="summary">
                    <p><?php echo $aboutCareer['description']; ?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i><?php echo $_SESSION['lang']=='en' ? 'Experiences' : 'Doświadczenie'; ?></h2>

                <?php
                foreach ($careers as $career){
                    echo <<<CAREERS
                        <div class="item">
                            <div class="meta">
                                <div class="upper-row">
                                    <h3 class="job-title">$career[post]</h3>
                                    <div class="time">$career[years]</div>
                                </div><!--//upper-row-->
                                <div class="company">$career[company] | $career[place]</div>
                            </div><!--//meta-->
                            <div class="details">
                                <p>$career[duty]</p>
                            </div><!--//details-->
                        </div><!--//item-->
                    CAREERS;
                }
                ?>

                

                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i><?php echo $_SESSION['lang']=='en' ? 'Projects' : 'Projekty'; ?></h2>
                <div class="intro">
                    <?php
                    if($_SESSION['lang'] == 'en'){
                        echo "<p>At this moment I don't have any commercial project</p>";
                    } else if($_SESSION['lang'] == 'pl'){
                        echo "<p>Na ten moment brak komercyjnych projektów</p>";
                    }
                    ?>

                </div><!--//intro-->


                <?php
                foreach ($projects as $project){
                    echo <<<PROJECT
                      <div class="item">
                         <span class="project-title"><a href="$project[ulr]">$project[name]</a></span> - <span class="project-tagline">$project[descriprion]</span>
                      </div><!--//item-->
                    PROJECT;
                }
                ?>


            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i><?php echo $_SESSION['lang']=='en' ? 'Skills &amp; Proficiency' : 'Umiejętności'; ?></h2>
                <div class="skillset">        
                    <?php
                        foreach ($skills as $skill){
                            echo <<<SKILLS
                              <div class="item">
                                 <h3 class="level-title">$skill[name]</h3>
                                <div class="level-bar">
                                 <div class="level-bar-inner" data-level="$skill[level]%">
                                </div>                                      
                                </div><!--//level-bar-->                                 
                             </div><!--//item-->
                        
                        SKILLS;
                        }
                    ?>

                    
                </div>  
            </section><!--//skills-section-->

            <section class="section experiences-section">
                <h2 class="section-title"><?php echo $_SESSION['lang']=='en' ? 'Comments about me' : 'Opinia o mnie'; ?></h2>
                <?php
                foreach ($comments as $comment){
                    echo <<<CAREERS
                        <div class="item">
                            <div class="meta">
                                <div class="upper-row">
                                    <h3 class="job-title">$comment[company]</h3>
                                    <div class="time">$comment[time_added]</div>
                                </div><!--//upper-row-->
                            <div class="details">
                                <p>$comment[comment]</p><br>
                            </div><!--//details-->
                        </div><!--//item-->
                    CAREERS;
                }
                ?>
            </section><!--//section-->

            <div class="item">
                <h2 class="section-title"><?php echo $_SESSION['lang']=='en' ? 'ADD COMMENT' : 'DODAĆ OPINIE'; ?></h2>
            <form action="comment.php" method="POST">
               <input type="text" name="company" placeholder="Company" value="<?php echo $_SESSION['form']['company'] ?? ''; ?>" required>
               <input type="text" name="email" placeholder="email" value="<?php echo $_SESSION['form']['email'] ?? ''; ?>"required><br>
               <input type="text" name="comment" placeholder="Comment" value="<?php echo $_SESSION['form']['comment'] ?? ''; ?>"required><br>
               <input type="text" name="protect" placeholder="Protection. How much is 1+1" required><br>
               <input type="submit" value="Send comment">
            </form>
            </div>



        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers. Modified by <a href="https://www.linkedin.com/in/herman-kudria-10868b207/" target="_blank">Herman Kudria</a> at 2022</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

