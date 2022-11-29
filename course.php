<body><a href="logout.php">logout</a><br>
    <font size="4"><b>Add a course</b></font>
    <form name="input" action="insert_course.php" method="post" required="required">
        Course ID: <input type="text" name="course_id"  required="required"> (ex: CPS1231)
        <br>Course Name: <input type="text" name="course_name" required="required">
        
        <br> Enrollment: <input type="text" name="enrollment" required="required">(# of registered students)
        <br>Select a faculty: <select name="faculty">
            <option value=""></option> 
            <option value="health"> Health Sciences</option>
            <option value="art"> Arts</option>
            <option value="engineering"> Engineering</option>
            <option value="IT"> Information Technology</option>
            <option value="business"> Business</option>
            <option value="hospitality"> Hospitality</option>
            <option value="education"> Education</option>
        </select>
        <br>Room: <select name="room">
            <option value=""></option>
             <option value="9001"> GLAB404 </option>
            <option value="9002"> GLAB405 </option>
            <option value="9003"> GLAB407 </option>
            <option value="9004"> GLAB308 </option>
            <option value="9005"> NAAB208 </option>
            <option value="9006"> NAAB109 </option>
            <option value="9007"> MSC111 </option>
        </select>
        <input type="submit" value="Submit">

    </form>
</body>
