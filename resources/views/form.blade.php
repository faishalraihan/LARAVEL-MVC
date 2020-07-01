<html>

<head>
        <title>Latihan HTML</title>
</head>

<body>
        <h1>Buat Accoount Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method="POST">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <label for="fname">First name:</label><br><br>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Last name:</label><br><br>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="lname">Gender:</label><br><br>
                <input type="radio" name="gender" id="Male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" id="Female">
                <label for="Female">Female</label><br>
                <input type="radio" name="gender" id="Other">
                <label for="Other">Other</label><br><br>
                <label for="Nationality">Nationality:</label><br><br>
                <select name="Nationality" id="Nationality">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Singapur">Singapura</option>
                </select>
                <br><br>
                <label for="Language Spoken">Language Spoken:</label><br><br>
                <input type="checkbox" name="Bahasa1" value="Bahasa Indonesia">
                <label for="Bahasa1"> Bahasa Indonesia</label><br>
                <input type="checkbox" name="Bahasa2" value="English">
                <label for="Bahasa2">English</label><br>
                <input type="checkbox" name="Bahasa3" value="Other">
                <label for="Bahasa3">Other</label><br><br>
                <label for="Bio">Bio:</label><br><br>
                <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
                <input type="submit" value="Sign Up">

        </form>
</body>

</html>