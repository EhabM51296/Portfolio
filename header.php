<?php 
    $headerlinks = array( "Home", "Skills","Portfolio","Contact");
    ?>
<header class="fixed w100 bgDarkBlack">
    <div class="wrapper90 auto">
         <div class="hamburger"></div>
    </div>
            <nav id="navigator">
                <ul class='textCenter' id="navigatorLinks">
                    <?php 
                        for($i=0;$i<count($headerlinks);$i++)
                        {
                            echo "<li class='inlineBlock pd2018'><a class='text specialText white' id='scroll_".$headerlinks[$i]."'>".$headerlinks[$i]."</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </header>