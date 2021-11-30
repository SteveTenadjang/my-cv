<?php
    include("./connexionDB.php");
    $req = "SELECT * FROM profilerskills";
    $res = $BD -> query($req) or die($BD);

?>    
<section id="skills">
    <?php while($ligne = $res->fetch()) {?>
        <div class="skill_item">
            <img src="https://img.icons8.com/office/48/000000/checked-2--v1.png"/>
            <div class="item_content">
                <div class="item_top">
                    <h2><?php echo $ligne["title"] ?></h2>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="24" height="24"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><defs>
                            <linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317" gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1"><stop offset="0" stop-color="#972f01"></stop><stop offset="1" stop-color="#972f01"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_8ggStxqyboK5_gr1)"><path d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z"></path></g></g>
                    </svg>
                </div>
                <p><?php echo $ligne["skillDesc"] ?></p>    
                <div class="skill-bar">
                    <div id="backend" class="skill-fill" style="width: <?php echo $ligne["level"] ?>%;">
                    </div>
                    <div class="endball"></div>
                </div>            
            </div>
        </div>
    <?php } ?>

</section>
