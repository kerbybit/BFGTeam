<?php
function printStaff($staff,$disc1,$disc2) {
	if ($staff=="ecolsson") {
		$name =    array("eackleashon", "eclotion", "elcossion", "eacolsion", "eckson", "ecolson", "eckloson", "eclection", "ecloson", "ekeloson", "ekelson", "ecelson");
		$disc1="formerly known as ".$name[rand(0,11)];
	}
	echo'
            <div class="col-md-6 staff-box" onclick="window.open('."'http://plancke.nl/hypixel/stats.php?player=".$staff."')".'">
                <div class="staff-box-in">
                    <img src="http://www.plancke.nl/mcface.php?player='.$staff.'">
                    <div class="staff-text">
                        <div class="staff-ign"><strong>'.$staff.'</strong></div>
                        <div class="staff-desc">'.$disc1.'<br>'.$disc2.'</div>
                    </div>
                </div>
            </div>';
}

?>