<?php

require_once ('classes/SelectEvent.php');


if(ISSET($_POST['filter'])){
    
    $category=$_POST['category'];
    
    $result = getEventsForCategory($category);
    
}else{
    
    $result = getAllScheduledEventsFromDB();
}

if ($result->num_rows > 0) {
    
    
   // printing table rows
    while ($row = mysqli_fetch_row($result)) {
        
        //cho"<tr><td>".$fetch['name']."</td><td>".$fetch['category']."</td></tr>";
        echo "<tbody>";
        echo "<tr>";
        echo "</thead>";
        
        // $row is array... foreach( .. ) puts every element
        // of $row to $cell variable
        foreach ($row as $cell)
            echo "<td>$cell</td>";
            
            echo "</tr>";
            echo "</tbody>";
    }
    
} else {
    echo 'Get events failed.<br />';
}

?>
