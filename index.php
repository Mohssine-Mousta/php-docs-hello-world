<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            background-color: #8b00ff; /* Mauve color */
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .curved-corner {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: #fff; /* White color for curved corners */
            border-radius: 50%;
        }

        .top-left {
            top: 0;
            left: 0;
        }

        .top-right {
            top: 0;
            right: 0;
        }

        .bottom-left {
            bottom: 0;
            left: 0;
        }

        .bottom-right {
            bottom: 0;
            right: 0;
        }

        .welcome-text {
            color: #fff; /* White color for text */
            font-size: 24px;
            text-align: center;
            text-shadow: 2px 2px 4px #000; /* Black shadow for text */
        }

        .heart {
            font-size: 40px;
            color: #ff0000; /* Red color for hearts */
        }
    </style>
</head>
<body>
    <div class="curved-corner top-left"></div>
    <div class="curved-corner top-right"></div>
    <div class="curved-corner bottom-left"></div>
    <div class="curved-corner bottom-right"></div>

    <div class="welcome-text">
        <p>WELCOME TO THE GAME</p>
    </div>

    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
</body>
</html>
