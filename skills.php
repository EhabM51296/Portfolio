<?php 
    $skills = array(
        ["name" => "HTML",
       "percentage" => "100%",
       "class" => "orange",
        ],
        ["name" => "CSS",
        "percentage" => "100%",
        "class" => "blue",
         ],
         ["name" => "Javascript",
       "percentage" => "100%",
       "class" => "yellow",
        ],
        ["name" => "Jquery",
       "percentage" => "100%",
       "class" => "yellow",
        ],
        ["name" => "React",
        "percentage" => "100%",
        "class" => "blue",
        ],
        // ["name" => "Angular",
        // "percentage" => "100%",
        // "class" => "red",
        // ],
        // ["name" => "Vue",
        // "percentage" => "100%",
        // "class" => "green",
        // ],
        ["name" => "PHP",
        "percentage" => "100%",
        "class" => "red",
        ],
        ["name" => "Laravel",
        "percentage" => "100%",
        "class" => "red",
        ],
        ["name" => "Flutter",
        "percentage" => "100%",
        "class" => "blue",
        ],
    //     ["name" => "Android Studio",
    //     "percentage" => "100%",
    //     "class" => "green",    
    // ],
    ["name" => "MySQL",
    "percentage" => "100%",
    "class" => "green",    
],
        );
?>
<div id="Skills" class="section">
        <div id="skillsSectionRow" class="flexEven">
            <div id="skillsLeftSide" class="flexChildEqual">
                    <div id="experienceBox">
                        <h1 class="yellow xlgTitle">02</h1>
                        <p class="text white">Years Of Experience</p>
                        <div id="clientBox" class="invisible">
                            <div class="green sectionTitle ">100%</div>
                            <div>
                                <p class="text white">Clients</p>
                                <p class="text white">Satisfaction</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="skillsRightSide" class="flexChildEqual">
                <div id="skillsTitle">
                    <h1 class="white sectionTitle">My Skills</h1>
                    <p class="white text">
                    Have a look on my magic boxes
                    </p>
                </div>
                <div class="grid3 mgT30 w70">
                    <?php 
                        for($i=0;$i<count($skills);$i++)
                        {
                            echo'
                            <div>
                            <div class="skillBox invisible '.$skills[$i]['class'].'">
                                <div class="skillimg"><img src="assets/images/'.$skills[$i]['name'].'.png" /></div>
                                <p class="label '.$skills[$i]['class'].' mgTN10">'.$skills[$i]["name"].'</p>
                            </div>
                            </div>';
                        }
                    ?>
                </div>           
            </div>
        </div>
</div>