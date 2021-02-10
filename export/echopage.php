<html>
    <head>
    </head>

    <body>
        <?php 
        include "connect.php";
        ?>

        <div class="container">
        <a href="http://localhost/wordpress/video/debug-amp.mp4" rel="nofollow">Télécharger</a>
        <form method='post' action='download.php'>
            <input type='submit' value='Export' name='Export'>
            
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                <th>ID</th>
                <th>display_name</th>
                <th>user_registered</th>
                <th>Email</th>
                </tr>
                <?php 
                    $query = "SELECT id,display_name,user_registered,user_email FROM wp_users ORDER BY id asc";
                    $result = mysqli_query($con,$query);
                    $user_arr = array();
                    while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $display_name = $row['display_name'];
                    $user_registered = $row['user_registered'];
                    $Email = $row['user_email'];
                    $user_arr[] = array($id,$display_name,$user_registered,$Email);
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $display_name; ?></td>
                    <td><?php echo $user_registered; ?></td>
                    <td><?php echo $Email; ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <?php 
                $serialize_user_arr = serialize($user_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
        </form>
        </div>
    </body>

<html>