<?php 
while($row = $query->fetch()) {
	echo '<p id="' . $row['Item'] . '"><b>' . $row['Item'] . '</b> ' . $row['Definition'] . '&nbsp' . $row['History'] 
	. '&nbsp' . ' <a href="' . $row['Link1'] . '">' . $row['Link1DN'] . '</a>' 
	. '&nbsp' . ' <a href="' . $row['Link2'] . '">' . $row['Link2DN'] .  '</a>' 
	. '&nbsp' . ' <a href="' . $row['Link3'] . '">' . $row['Link3DN'] .  '</a>'
	. '&nbsp' . ' <a href="' . $row['Link4'] . '">' . $row['Link4DN'] .  '</a>'
	. '&nbsp' . ' <a href="' . $row['Link5'] . '">' . $row['Link5DN'] .  '</a>' 
	. '&nbsp' . ' <a href="' . $row['Link6'] . '">' . $row['Link6DN'] .  '</a>' 	
	. '</p>';
}
?>