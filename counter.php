<?php
  $conn = mysqli_connect('localhost','root','','portalberita');
    $find_count = mysqli_query($conn, "select * from counter");
    while($row = mysqli_fetch_aasoc($find_counts)){
    $current_count = $row['count'];
    $new_count = current_count + 1;
    $update_count = mysqli_query($conn, "update portalberita set counter = ''".$new_count."'");
    echo Anda pengunjung ke $new_count;
    }
?>
