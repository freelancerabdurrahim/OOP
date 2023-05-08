<!DOCTYPE html>
<html>
<head>
	<title>BMI Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            box-sizing: border-box;
            }

            body {
            margin: 0;
            padding: 0;
            background-image: url('https://picsum.photos/seed/picsum/200/300');
            background-size: cover;
            background-position: center;
            font-family: 'Open Sans', sans-serif;
            }

            .container {
            max-width: 500px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            }

            h1 {
            text-align: center;
            }

            form {
            display: flex;
            flex-direction: column;
            }

            label {
            font-weight: bold;
            }

            input {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }

            button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #009688;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            }

            button:hover {
            background-color: #008080;
            }

            #result {
            margin-top: 20px;
            font-weight: bold;
            }

    </style>
</head>
<body>
	<div class="container">
		<h1>BMI Calculator</h1>
		<form>
			<label for="weightInput">Weight (kg):</label>
			<input type="number" id="weightInput" placeholder="Enter weight in kg" required>
			<label for="heightInput">Height (cm):</label>
			<input type="number" id="heightInput" placeholder="Enter height in cm" required>
			<button type="button" id="calculateBtn">Calculate</button>
		</form>
		<div id="result"></div>
	</div>
	<script src="script.js"></script>
    <script>
        const calculateBMI = () => {
            const weight = document.getElementById("weightInput").value;
            const height = document.getElementById("heightInput").value / 100; // Convert cm to m
            const bmi = weight / (height * height);
            document.getElementById("result").innerHTML = `Your BMI is: ${bmi.toFixed(2)}`;
            };

            document.getElementById("calculateBtn").addEventListener("click", calculateBMI);

    </script>
</body>
</html>
