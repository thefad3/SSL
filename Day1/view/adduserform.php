<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:02 AM
 */
?>


<div class="row">
    <div class="large-12 medium-12 columns">

    <form enctype="multipart/form-data" action="index.php?action=addUserAction" method="POST">
        <label>Username</label>
        <input type="text" name="username" value="<? $_SESSION['username']; ?>"><br>
        <label>Password</label>
        <input type="password" name="password" value="<? echo $password ?>"><br>
        <button type="submit" value="Send File">Login</button>
    </form>
</div>
    </div>

</body>
</html>