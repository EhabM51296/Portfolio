<?php 
    $contactDetails = array(
        [
          "title" => "Saida, Lebanon",
          "icon" => "address.png",
          "label" => "Address Location"
        ],
        [
            "title" => "Ehabmaatouk@outlook.com",
            "icon" => "mail.png",
            "label" => "Email Address"
        ],
          [
            "title" => "+96176090294",
            "icon" => "phone.png",
            "label" => "Mobile Number"
          ],
        );
?>
<div id="Contact" class="section bgDarkBlack">
    <div class="w90 auto">
        <div id="contactTitle" class="textCenter white">
            <h1 class="sectionTitle">Let's Talk</h1>
            <p class="text auto pdT20">
            Get your space suit ready and tell me your ideas to develop your dream application.
            </p>
        </div>
        <div id="contactBoxes" class="flexEven pdT40">
            <div id="contactLeftSide">
                <div class="box">
                    <h1 class="textCenter boxTitle">Get In Touch</h1>
                    <form class="formStyle">
                        <div class="flexBetween row">
                            <div class="w45">
                                <input type="text" placeholder="Name" class="text" required/>
                            </div>
                            <div class="w45">
                                    <input type="email" placeholder="Email" class="text" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <input type="text" placeholder="Phone" class="text" required />
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <textarea placeholder="Message" class="text" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="row textCenter">
                            <div>
                                <button class="btnPrimary text">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="contactRightSide">
                <?php
                    for($i=0;$i<count($contactDetails);$i++)
                    {
                        echo '
                        <div class="box mgT30">
                            <h1 class="boxTitle">'.$contactDetails[$i]["title"].'</h1>
                            <div class="boxDetails flexEven pdT20">
                                <div class="iconContainer">
                                    <div class="circle">
                                        <img src="./assets/images/'.$contactDetails[$i]["icon"].'"/>
                                    </div>
                                </div>
                                <div class="flexChildEqual">
                                    <span class="lightText">'.$contactDetails[$i]["label"].'</span>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>