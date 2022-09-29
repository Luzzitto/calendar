<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fullcalendar/lib/main.min.css">
</head>

<body>

    <div id="calendar"></div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/fullcalendar/lib/main.min.css"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let calendarEl = document.getElementById("calendar");
            let calendar = FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            })
            calendar.render();
        })
    </script>

</body>

</html>