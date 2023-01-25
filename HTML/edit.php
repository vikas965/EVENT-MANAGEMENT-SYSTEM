<?php
    $conn  = mysqli_connect('localhost','root','','final') or die("connection error :" . mysqli_connect_error());
    
    echo "<form action='edit.php' method='POST'><input type='search' name='search'>
    <input type='submit' name='submit'></form>";
    echo "<table>";
    echo "<tr>
    <td>name of the event</td>
    <td>date</td>
    <td>mode</td>
    <td><a>edit</a></td></tr>";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $temp =$_POST['search'];
        $temp2 = '%'.$temp.'%';
        $data = mysqli_query($conn,"SELECT * FROM eventdetails WHERE `content` LIKE '$temp2' ");
    }
    else{
        $data = mysqli_query($conn,"SELECT * FROM eventdetails");
    }
    foreach($data as $item)
    {
        $id =$item['sr-no'];
        $content =$item['content'];
    $date = $item['date'];
    $mode = $item['mode'];
        echo "<tr><td>$content</td>
        <td>$date</td>
        <td>$mode</td>
        <td><a href='event.php?term=$id'>edit</a></td>
        <td><a href='delect.php?term=$id'>delete</a></td></tr>";
    }
    echo "</table>";
?>
<table>
    <tr>

    </tr>
</table>