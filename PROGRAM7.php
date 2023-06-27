<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style type="text/css">
        #clock {
            font-size: 48px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="clock">
        <?php
            echo date("H:i:s");
        ?>
    </div>
    <script>
        function updateClock() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();
            var clockDiv = document.getElementById('clock');

            // Add leading zeros to minutes and seconds
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;

            // Set the text inside the clock div
            clockDiv.textContent = hours + ":" + minutes + ":" + seconds;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
