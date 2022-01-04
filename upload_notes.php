<div class="form-popup" id="myForm4">
    <form action="" method="post" class="form-container">

        <h3><b>Share your notes here :)</b></h3><br>

        <label for="coursecode"><b>Course Code(in CAPS)</b></label><br>
        <input type="text" placeholder="Ex: CSE2004, HUM1042, MAT1014..." name="coursecode" required>
        <br><br>

        <label for="tl"><b>Theory or Lab&emsp;</b></label>
        <select name="tl" size="1" style="color: black; font-size: 20px">
            <option value="Theroy">Theory</option>
            <option value="Lab">Lab</option>
        </select>
        <br><br>

        <label for="module"><b>Module number&emsp;</b></label>
        <select name="module" size="1" style="color: black; font-size: 20px">
            <option value="Module 1">Module 1</option>
            <option value="Module 2">Module 2</option>
            <option value="Module 3">Module 3</option>
            <option value="Module 4">Module 4</option>
            <option value="Module 5">Module 5</option>
            <option value="Module 6">Module 6</option>
            <option value="Module 7">Module 7</option>
            <option value="Module 8">Module 8</option>
            <option value="Syllabus">Syllabus</option>
            <option value="Other">Other</option>
        </select>
        <br><br>

        <label for="cmts"><b>TOPIC</b></label><br>
        <input type="text" placeholder="Enter the topic " name="cmts" required>
        <br><br>
        <p>NOTE: What ever modules you are uploading kindly give appropriate topic of the material. If youtube videos or any specific topic's ppt is uploaded then select 'other' in module section and give appropriate topic for it</p>
        <br>

        <label for="link"><b>Google drive link</b></label><br>
        <input type="text" placeholder="Ex: https://drive.google.com/drive/folders/147H" name="link" required>
        <br><br><br>

        <button type="submit" class="btn" name="upload" style="color: white; background-color: green; opacity: 0.8;">Upload</button>
        <button type="button" class="btn cancel" onclick="closeForm('myForm4', 'myForm4')" style="color: white; background-color: red; opacity: 0.8;">Close</button>
        <br><br>
    </form>
</div>

<?php
    if(isset($_POST['upload']))
    {
        $coursecode = strtoupper($_POST['coursecode']);
        $sql2 = mysqli_query($db, "INSERT INTO `notes_hd` VALUES ('$coursecode', '$_POST[tl]', '$_POST[module]', '$_POST[link]', '$_POST[cmts]');");
        $sql3 = mysqli_query($db, "SELECT * FROM `courses_hd` WHERE `coursecode` = '$coursecode';");
        $any = mysqli_num_rows($sql3);
        if($any == 0){
            $sql4 = mysqli_query($db, "INSERT INTO `courses_hd` VALUES ('$coursecode', ' ');");
        }
        ?>
        <script type="text/javascript">
            alert("Successfully Uploaded :)");
        </script>
        <?php
    }
?>