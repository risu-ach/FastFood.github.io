<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* navigation bar */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed; /* Fixed position to stay at the top */
            width: 100%; /* Full width */
            top: 0; /* Position at the top */
        }

        li.navitem {
            float: left;
        }

        li.navitem a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li.navitem a:hover {
            background-color: #ddd;
            color: black;
        }
        
        /*  fixed navigation bar */
        body {
            font-family: Arial, sans-serif;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        input[type="submit"],
        .button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
        }

        .clear-button {
            background-color: #f44336;
        }

        .button:hover, .clear-button:hover {
            background-color: #45a049;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            text-decoration: none;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<!-- Navigation bar with three buttons -->
<ul class="navbar">
    <li class="navitem"><a href="../Admin_App.php">Back</a></li>
    <li class="navitem"><a href="../program.php">Program</a></li>
    <li class="navitem"><a href="intern.php">Intern</a></li>
    <li class="navitem"><a href="certificate.php">Certificate</a></li>
    <li class="navitem"><a href="classes.php">Classes</a></li>
    <li class="navitem"><a href="admin_applications.php">Program Application</a></li>
    <li class="navitem"><a href="intern_app.php">Intern Application</a></li>
    <li class="navitem"><a href="cert_enrollment.php">Certificate Application</a></li>
    <li class="navitem"><a href="class_enrollment.php">Classes Application</a></li>
    <li class="navitem"><a href="cc_event.php">Events</a></li>
    <li class="navitem"><a href="eventtrack.php">Event Tracking</a></li>
    <li class="navitem"><a href="../admin_page.php">Account Info</a></li>
    <li class="navitem"><a href="../logout.php">Logout</a></li>
    

</ul>

</body>
</html>
