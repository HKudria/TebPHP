<?php
$data = require_once 'data.php';
$aboutData = $data['about'];
$educationData = $data['education'];
$languages = $data['languages'];
$interest = $data['interest'];
$aboutCareer = $data['aboutCareer'];
$careers = $data['career'];
$projects = $data['project'];
$skills = $data['skills'];
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
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.jpg" alt="" width="150" height="auto"/>
                <h1 class="name"><?php echo $aboutData['name'] ?></h1>
                <h3 class="tagline"><?php echo $aboutData['post'] ?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?php echo $aboutData['email'] ?>"><?php echo $aboutData['email'] ?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?php echo $aboutData['phone'] ?>"><?php echo $aboutData['phone'] ?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="<?php echo $aboutData['site'] ?>" target="_blank"><?php echo $aboutData['site'] ?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?php echo $aboutData['linkedIn'] ?>" target="_blank">Herman Kudria</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="<?php echo $aboutData['github'] ?>" target="_blank"><?php echo $aboutData['github'] ?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
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
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    foreach ($languages as $language => $description){
                    echo <<<LANGUAGES
                       <li>$language <span class="lang-desc">$description</span></li>
                    LANGUAGES;
                    }
                    ?>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    foreach ($interest as $interes){
                        echo <<<INTEREST
                       <li>$interes</li>
                    INTEREST;
                    }
                    ?>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p><?php echo $aboutCareer; ?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>

                <?php
                foreach ($careers as $career){
                    echo <<<CAREERS
                        <div class="item">
                            <div class="meta">
                                <div class="upper-row">
                                    <h3 class="job-title">$career[post]</h3>
                                    <div class="time">$career[years]</div>
                                </div><!--//upper-row-->
                                <div class="company">$career[place]</div>
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
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>At this moment I don't have any commercial project</p>
                </div><!--//intro-->


                <?php
                foreach ($projects as $project){
                    echo <<<PROJECT
                      <div class="item">
                         <span class="project-title"><a href="$project[link]">$project[name]</a></span> - <span class="project-tagline">$project[description]</span>
                      </div><!--//item-->
                    PROJECT;
                }
                ?>


            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">        
                    <?php
                        foreach ($skills as $skill => $level){
                            echo <<<SKILLS
                              <div class="item">
                                 <h3 class="level-title">$skill</h3>
                                <div class="level-bar">
                                 <div class="level-bar-inner" data-level="$level">
                                </div>                                      
                                </div><!--//level-bar-->                                 
                             </div><!--//item-->
                        
                        SKILLS;
                        }
                    ?>

                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

