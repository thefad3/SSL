<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:02 AM
 */
?>


<div class="row">
    <div class="large-12 medium-12 columns" id="formStyle">
<form action="/index.php?action=registerAction" method="POST">
    <label>First Name</label>
    <input type="text" name="firstname"><br>
    <label>Last Name</label>
    <input type="text" name="lastname"><br>
    <label>Address</label>
    <input type="text" name="address"><br>
    <label>City</label>
    <input type="text" name="city"><br>
    <label>State</label>
    <select name="state">
        <option value="na">None</option>
        <option value="ri">Rhode Island</option>
        <option value="ga">Georgia</option>
        <option value="ma">Massachusetts</option>
        <option value="nj">New Jersey</option>
        <option value="pa">Penn</option>
        <option value="ny">New York</option>
        <option value="fl">Florida</option>
    </select>
    <br>
    <label>Zip</label>
    <input type="text" name="zip"><br>
    <label>E-Mail</label>
    <input type="email" name="email"><br>
    <label>Phone</label>
    <input type="text" name="phone"><br>
    <label>Website</label>
    <input type="text" name="website"><br>

    <button type="submit" >Submit</button>
</form>
</div>
    </div>

</body>
</html>