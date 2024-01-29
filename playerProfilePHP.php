<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        .profile-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-details {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .detail {
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>Player Profile</h1>
        <img src="path/to/player-photo.jpg" alt="Player Photo" class="profile-photo">
        <div class="profile-details">
            <div class="detail">
                <strong>Height:</strong>
                <select name="height">
                    <?php
                    // PHP loop to generate options for height
                    for ($feet = 4; $feet <= 8; $feet++) {
                        for ($inch = 0; $inch < 12; $inch++) {
                            echo "<option value=\"$feet-$inch\">$feet feet $inch inches</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="detail">
                <strong>Weight:</strong>
                <select name="weight">
                    <?php
                    // PHP loop to generate options for weight
                    for ($pounds = 40; $pounds <= 500; $pounds += 10) {
                        echo "<option value=\"$pounds\">$pounds pounds</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="detail">
                <strong>Age:</strong>
                <select name="age">
                    <?php
                    // PHP loop to generate options for age
                    for ($age = 1; $age <= 25; $age++) {
                        echo "<option value=\"$age\">$age years</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="detail">
                <strong>Position:</strong>
                <select name="position">
                    <option value="first-base">First Base</option>
                    <option value="second-base">Second Base</option>
                    <option value="shortstop">Shortstop</option>
                    <option value="third-base">Third Base</option>
                    <option value="catcher">Catcher</option>
                    <option value="outfielder">Outfielder</option>
                    <option value="left-handed-pitcher">Left-Handed Pitcher</option>
                    <option value="right-handed-pitcher">Right-Handed Pitcher</option>
                    <!-- Add more positions as needed -->
                </select>
            </div>
            <div class="detail">
                <strong>Recruiting Class Year:</strong>
                <select name="recruiting-class">
                    <?php
                    // PHP loop to generate options for recruiting class year
                    for ($year = 2023; $year <= 2048; $year++) {
                        echo "<option value=\"$year\">$year</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
</body>
</html>
