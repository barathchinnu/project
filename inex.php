<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="/submit_form" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <label for="fatherName">Father's Name:</label><br>
        <input type="text" id="fatherName" name="fatherName" required><br><br>

        <label for="marks">Marks:</label><br>
        <input type="number" id="marks" name="marks" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

