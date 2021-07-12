<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="flex-container">
        <form name="forms">
            <div class="container">
            <h1>CALCULATOR</h1>
            <input type="text" name="answer" class="answer"><br>

            <input type="button" value="1" onclick="forms.answer.value += '1' " class="btn">
            <input type="button" value="2" onclick="forms.answer.value += '2' " class="btn">
            <input type="button" value="3" onclick="forms.answer.value += '3' " class="btn">
            <br>
            <input type="button" value="4" onclick="forms.answer.value += '4' " class="btn">
            <input type="button" value="5" onclick="forms.answer.value += '5' " class="btn">
            <input type="button" value="6" onclick="forms.answer.value += '6' " class="btn">
            <br>

            <input type="button" value="7" onclick="forms.answer.value += '7' " class="btn">
            <input type="button" value="8" onclick="forms.answer.value += '8' " class="btn">
            <input type="button" value="9" onclick="forms.answer.value += '9' " class="btn">
            <br>

            <input type="button" value="+" onclick="forms.answer.value += '+' " class="btn">
            <input type="button" value="-" onclick="forms.answer.value += '-' " class="btn">
            <input type="button" value="*" onclick="forms.answer.value += '*' " class="btn">
            <br>

            <input type="button" value="/" onclick="forms.answer.value += '/' " class="btn">
            <input type="button" value="0" onclick="forms.answer.value += '0' " class="btn">
            <input type="button" value="=" onclick="forms.answer.value = eval(forms.answer.value) " class="btn">
            <br>
            <input type="button" value="Clear all" onclick="forms.answer.value = ''" class="btn">


        </div>
        </form>
    </div>
</body>

</html>