<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">Over</a></li>
                <li><a href="#projecten" class="menu-btn">Projecten</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Opleidingen</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start  -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>
                <div class="text-2">Hla Hla Thein</div>
                <div class="text-3">En Ik ben een <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start  -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile4.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Ik ben Hla Hla en Ik ben een <span class="typing-2"></span></div>
                    <p>Ik ben een zeer gemotiveerde en positieve IT-professional die graag nieuwe dingen leert. Ik heb
                        Nederland omarmd als mijn nieuwe thuisland en ik heb de Nederlandse taal op B2-niveau
                        geleerd binnen een jaar. Zoals je in mijn profiel kunt lezen, ben ik opgeleid als
                        IT-professional,
                        maar door omstandigheden kon ik niet aan de slag in mijn thuisland. Ik heb mijn ontwikkeling op
                        het gebied van IT hervat door met MBO Software Ontwikkelaar opleiding. Daarom ben ik op zoek
                        naar een geweldige stageplek om te leren als onderdeel van mijn eerste jaar. Ik heb tot nu toe
                        al
                        mijn examen gehaald. Ik zoek een stageplek als Web Developer. Ik leer snel en werk hard.
                    </p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start  -->
    <section class="services" id="projecten">
        <div class="max-width">
            <h2 class="title">Mijn projecten</h2>
            <div class="serv-content">
                <?php

                    $projecticon = "";
                    $projectnaam = "";
                    $beschrijving = "";

                    $connection = mysqli_connect("localhost","root","","portfolioproject");
                    $select = "SELECT projecticon,projectnaam,beschrijving FROM `projecten`";
                    $result = mysqli_query($connection,$select);
                    
                    while($row = mysqli_fetch_array($result)){
                        $projecticon = $row['projecticon'];
                        $projectnaam = $row['projectnaam'];
                        $beschrijving = $row['beschrijving'];

                        echo "<div class=\"card\">";
                        echo "<div class=\"box\">";
                     
                        echo "<i class=\"$projecticon\">";
                        echo "</i>";
                        echo "<div class=\"text\">";
                        echo $projectnaam;
                        echo "</div>";
                        echo "<p>";
                        echo $beschrijving;
                        echo "</p>";
                        echo "</div>";
                        echo "</div>";
                    }

                ?>
                <!-- <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">PHP EN SQL</div>
                        <p>Voor PHP heb ik registeren pagina, login pagina en het dashboard met SQL database gemaakt. En testen ook.
                            
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">C#</div>
                        <p>Voor C# heb ik gazenboard, Hangman , vier op de rij, tic toc toe, memory matching game, ect .. gemaakt.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">HTML/CSS</div>
                        <p>Ik heb de projecten met html / CSS gedaan zoals portfolio en Haarlem-promotie. 
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- skills section start  -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Mijn skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mijn creatieve vaardigheden en ervaringen</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima doloremque, molestias numquam
                        sequi laudantium modi quam aspernatur hic minus. Voluptatum officiis repellendus, voluptatem
                        molestias cumque nulla vel similique exercitationem velit omnis. Ea temporibus ipsam
                        necessitatibus dolorum, qui maiores at, deserunt, sequi debitis id molestiae quos accusamus
                        voluptatibus doloremque ad corporis. </p>
                        <a href="#">Lees verder</a>
                </div>
                <div class="column right">
                <?php

                    $skillnaam = "";
                    $percentages = 0;

                    $connection = mysqli_connect("localhost","root","","portfolioproject");
                    $select = "SELECT skillnaam, percentages FROM `skills`";
                    $result = mysqli_query($connection,$select);

                    while($row = mysqli_fetch_array($result)){
                        $skillnaam = $row['skillnaam'];
                        $percentages = $row['percentages'];
                        

                        echo "<div class=\"bars\">";
                        echo "<div class=\"info\">";
                    
                        echo "<span>";
                        echo $skillnaam;
                        echo "</span>";
                        echo "<span>";
                        echo $percentages."%";
                        echo "</span>";
                        echo "</div>";
                        echo "<div class=\"line\" style=\"--my--width--var:$percentages%\">";
                        echo "</div>";
                        echo "</div>";
                    }

                    ?>
                    <!-- <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>40%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C#</span>
                            <span>55%</span>
                        </div>
                        <div class="line c"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>25%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python</span>
                            <span>25%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>40%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start  -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Mijn opleidingen</h2>
            <div class="carousel owl-carousel">
            <?php

                $images = "";
                $opleidingnaam = "";
                $plaatsnaam = "";
                $datumn = "";

                $connection = mysqli_connect("localhost","root","","portfolioproject");
                $select = "SELECT images,opleidingnaam,plaatsnaam,datumn FROM `opleidingen`";
                $result = mysqli_query($connection,$select);

                while($row = mysqli_fetch_array($result)){
                    $images = $row['images'];
                    $opleidingnaam = $row['opleidingnaam'];
                    $plaatsnaam = $row['plaatsnaam'];
                    $datumn = $row['datumn'];

                    echo "<div class=\"card\">";
                    echo "<div class=\"box\">";
                
                    echo "<img src=\"$images\" alt=\"\">";
                    echo "<div class=\"text\">";
                    echo $opleidingnaam;
                    echo "</div>";
                    echo "<p>";
                    echo $plaatsnaam;
                    echo "</p>";
                    echo "<p>";
                    echo $datumn;
                    echo "</p>";
                    echo "</div>";
                    echo "</div>";
                }

                ?>
                <!-- <div class="card">
                    <div class="box">
                        <img src="images/NovaColledge.png" alt="">
                        <div class="text">Software Developer</div>
                        <p>Nova College Haarlem</p>
                        <p>2020 Aug - heden</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Azure.png" alt="">
                        <div class="text"> Azure Administrator</div>
                        <p>Microsoft</p>
                        <p>2019 Juli - 2019 Okt</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Ms.net.jpg" alt="">
                        <div class="text">MS.Net Programming</div>
                        <p>IMCEITS, in Myanmar</p>
                        <p>2011 - 2012</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/computer science2.jpg" alt="">
                        <div class="text">Computer Science:Basis</div>
                        <p>Universiteit van Computer Studies UCSY, Yangon, Myanmar</p>
                        <p>2006 - 2009</p>
                    </div>
                </div> 
                <div class="card">
                    <div class="box">
                        <img src="images/computer science1.jpg" alt="">
                        <div class="text">Computer Science:Gevorderd</div>
                        <p>Universiteit van Computer Studies UCSY, Yangon, Myanmar</p>
                        <p>2009 - 2010</p>
                    </div>
                </div>                -->
            </div>
        </div>
    </section>

    <!-- contact section start  -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact mij</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Neem contact op</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima doloremque, molestias numquam
                        sequi laudantium modi quam aspernatur hic minus. Voluptatum officiis repellendus, voluptatem
                        molestias cumque nulla vel?</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Naam</div>
                                    <div class="sub-title">Hla Hla Thein</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">Teylerstraat 22, 2032SR, Haarlem</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">hlahlathein90@outlook.com</div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="index.php" method = "post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name= "naam" placeholder="Naam" required>
                            </div>
                            <div class="field email">
                                <input type="email" name= "email" placeholder="Email" required>
                            </div>                            
                        </div>
                        <div class="field">
                            <input type="text" name="bedrijfsnaam" placeholder="Bedrijfsnaam" required>
                        </div>
                        <div class="field">
                            <input type="text" name= "plaats" placeholder="Vestigingsplaats" required>
                        </div>
                        <div class="fields">
                            <div class="field adres">
                                <input type="text" name="adres" placeholder="Adres" required>
                            </div>
                            <div class="field postcode">
                                <input type="text" name="postcode" placeholder="Postcode" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="telefoonnummer" placeholder="Telefoonnummer" required>
                        </div>
                        <div class="field">
                            <input type="text" name="onderwerp" placeholder="Onderwerp" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="project" placeholder="Beschrijf project.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="Berichtsturen">Bericht versturen</button>
                        </div>
                    </form>
                </div>
                <?php

                        $naam="";
                        $email = "";
                        $bedrijfsnaam="";
                        $plaats = "";
                        $adres = "";
                        $postcode = "";
                        $telefoonnummer = 0;
                        $onderwerp = "";
                        $beschrijfproject = "";
                        $invoerfouten = array();

                        $mysqli  = new mysqli("localhost","root","","portfolioproject");

                        if(isset($_POST['Berichtsturen'])){
                            $naam               = $mysqli -> real_escape_string($_POST['naam']);
                            $email 			    = $mysqli -> real_escape_string($_POST['email']);
                            $bedrijfsnaam       = $mysqli -> real_escape_string($_POST['bedrijfsnaam']);
                            $telefoonnummer  	= $mysqli -> real_escape_string($_POST['telefoonnummer']);
                            $adres 		    	= $mysqli -> real_escape_string($_POST['adres']);
                            $postcode	    	= $mysqli -> real_escape_string($_POST['postcode']);
                            $plaats     	    = $mysqli -> real_escape_string($_POST['plaats']);
                            $onderwerp	    	= $mysqli -> real_escape_string($_POST['onderwerp']);
                            $beschrijfproject	= $mysqli -> real_escape_string($_POST['project']);
                            

                            if (empty($naam)){
                                array_push($invoerfouten,"Een naam is verplicht");
                            }
                            else{
                                if(!ctype_alpha($naam)){
                                    array_push($invoerfouten,"De naam mag alleen bestaan uit letters.");
                                }
                                else{

                                    if(is_numeric($naam)){
                                      array_push($invoerfouten,"De naam mag alleen bestaan uit letters.");
                                    }

                                }
                            }


                            if (empty($email)){
                                array_push($invoerfouten,"Een email is verplicht");
                            }
                            else{

                                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                  array_push($invoerfouten,"Deze email is geen geldig email-adres.");
                                }              
                            }


                            if (empty($bedrijfsnaam)){
                                array_push($invoerfouten,"Een bedrijf naam is verplicht");
                            }
                            else{
                                if(!ctype_alpha($bedrijfsnaam)){
                                    array_push($invoerfouten,"De bedrijf naam mag alleen bestaan uit letters.");
                                }
                                else{

                                    if(is_numeric($bedrijfsnaam)){
                                      array_push($invoerfouten,"De bedrijf naam mag alleen bestaan uit letters.");
                                    }

                                }
                            }

                            if (empty($telefoonnummer)){
                                array_push($invoerfouten,"Een telefoonnummer is verplicht");
                            }
                            else{

                                if(ctype_alpha($telefoonnummer)){
                                  array_push($invoerfouten,"Een telefoon mag alleen bestaan uit numeriek.");
                                }

                                else{
                  
                                  if(is_numeric($telefoonnummer)==false){
                                    array_push($invoerfouten,"Een telefoon mag alleen bestaan uit numeriek.");
                                  }

                                }
                            }

                            if (empty($adres)){
                                array_push($invoerfouten,"Een adres is verplicht");
                            }
                            else{

                                if(is_string($adres)==false){
                                  array_push($invoerfouten,"Een adres mag alleen bestaan uit letters.");
                                }
                                /*else{
                                  if(!ctype_alpha($adres)){
                                    array_push($invoerfouten,"Een adres mag alleen bestaan uit letters.");
                                  }
                                }*/
                            }

                            if (empty($postcode)){
                                array_push($invoerfouten,"Een postcode is verplicht");
                            }
                            else{
                                $masker="/^[1-9][0-9][0-9][0-9][A-Z][A-Z]$/";
                                if(!preg_match($masker,$postcode)){
                                array_push($invoerfouten,"Een postcode is geen geldig.");
                                }
                            }

                            if (empty($plaats)){
                                array_push($invoerfouten,"Een plaats is verplicht");
                            }
                            else{

                                if(is_string($plaats)==false){
                                  array_push($invoerfouten,"Een woonplaats mag alleen bestaan uit letters.");
                                }
                                else{
                  
                                  if(!ctype_alpha($plaats)){
                                    array_push($invoerfouten,"Een woonplaats mag alleen bestaan uit letters.");
                                  }
                                }
                              }

                            if (empty($onderwerp)){
                                array_push($invoerfouten,"Een onderwerp is verplicht");
                            }
                            if (empty($beschrijfproject)){
                                array_push($invoerfouten,"Een beschrijf project is verplicht");
                            }

                            if (count($invoerfouten)== 0){

                                $sql = "INSERT INTO contact (naam,email,bedrijfsnaam,plaats,telefoonnumber,adres,postcode,onderwerp,beschrijving)
                                                    VALUES('$naam','$email', '$bedrijfsnaam','$plaats','$telefoonnummer','$adres','$postcode','$onderwerp','$beschrijfproject')";

                                // if (!$mysqli -> query($sql)){ 
                                // 	var_dump($sql);
                                // 	echo "Foutboodschap";
                                // }

                                //echo $sql;
                                mysqli_query($mysqli, $sql);
                                
                                
                                // header("Location:index.php");
    
                            }
                            else{
                                foreach ($invoerfouten as $invoerfout){
                                    echo "<div style=color:red>".$invoerfout."</div>";
                                }
                            }
                        }
                        
                ?>
            </div>
        </div>
    </section>

    <!-- footer section start  -->
    <footer>
        <span>Gemaakt door <a href="#">CodingHlaHla</a> | <span class="far fa-copyright"></span> 2021 Alle rechten voorbehouden.</span>
    </footer>

    <script src="script.js"></script>

</body>

</html>