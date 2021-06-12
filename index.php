<?php
    use Portfolio\models\{Database,Project, Skill};
    require_once './library/Functions.php';
    require_once './vendor/autoload.php';

    $db = Database::getDB();
    $project = new Project($db);
    $p = $project->getAllProjects();

    $skill = new Skill($db);
    $s = $skill->getAllSkills();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed Sakr - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="library/script.js" defer></script>
    <script src="https://kit.fontawesome.com/ba57f7a475.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="pageContainer">
        <aside class="sidebar">
            <span class="logo">M.S</span>
            <!-- <a class="logo-expand" href="#">MoeaSakr</a> -->
            <a class="logoExpand" href="index.php"><img src="./images/logo.png" alt=""></a>
            <h3 style="margin:0;" id="something">Full Stack Developer</h3>
            <div class="sidebarContainer">
                <div class="sidebarTitle">Navigation</div>
                <div class="sidebarMenu">
                    <a class="sidebarLink home is-active" href="#">
                        <span class="fas fa-home"></span>
                        Home
                    </a>
                    <a class="sidebarLink about" href="#">
                        <span class="fas fa-address-card"></span>
                        About
                    </a>
                    <a class="sidebarLink projects" href="#">
                        <span class="fas fa-project-diagram"></span>
                        Projects
                    </a>
                </div>
            </div>
        </aside>
        <div class="mainWrapper">
            <header class="header">
                <!-- Kept as a placeholder until I find a use for it -->
            </header>

            <main class="mainContainer">
                <div class="pageTitle anim" style="--delay: 0s"></div>
                
                <!-- Home area -->
                <div class="homeContainer">
                    <h1 id="myName">Mohamed Sakr</h1>
                    <h2 id="myPosition">Full Stack Web Developer</h2>
                    <div class="contactHomeArea">
                        <span>Please feel free to contact me for further information.</span>
                        <span>Email: Moeasakr@gmail.com</span>
                        <span>Phone number: (647) 904 - 0191</span>
                        <div class="contactHomeAreaLinksContainer">
                            <a href='https://github.com/Moeasakr' target='_blank'><span class='contactLinks links fab fa-github-square'></span></a>
                            <a href='https://www.linkedin.com/in/moeasakr/' target='_blank'><span class='contactLinks links fab fa-linkedin'></span></a>
                            <a href='mailto:moeasakr@gmail.com' title="Moeasakr@gmail.com"><span class='emailLink contactLinks links fas fa-envelope'></span></a>
                        </div>
                    </div>
                </div>
                <!-- End of home area -->

                <!-- About area -->
                <div class="aboutContainer">
                    <div class="skillCardsContainer">
                        <h2>Skills:</h2>
                        <?php 
                        $result = "";
                            foreach ($s as $skilly) {
                                $result .= "<div class='skillCard'>";
                                $result .= "<div class='skillInfo anim'>";
                                $result .= "<span class='skillTitle'>$skilly->name</span>";
                                $result .= "<div>";
                                for ($i=0; $i < $skilly->proficiency; $i++) { 
                                    $result .= "<div class='dot'></div>";
                                }
                                $count = 5 - $skilly->proficiency;
                                for ($i=0; $i < $count; $i++) { 
                                    $result .= "<div class='dot dotEmpty'></div>";
                                }
                                $result .= "</div></div></div>";
                            }
                            echo $result;
                        ?>
                    </div>
                </div>
                <!-- End of about area -->
                
                <!-- Project Area -->
                <div class="projectCardsContainer">
                    <?php echo generateProjectCards($p)?>
                </div>
                <!-- End of project area -->
            </main>
        </div>
    </div>
</body>

</html>