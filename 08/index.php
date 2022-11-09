<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
        <textarea id="codeElement" name="code"></textarea>
        <button id="run">RUN</button>

        <h2>Result:</h2>
        <h4 id="result" style="color: #ff0000;"></h4>
<script>
        // JQUERY CODE
        $("#run").on("click", function(){
            
            
        $.ajax({
            type: 'POST',
            url: "http://php-lesson.loc/08/code.php",
            data: {
                code : $("#codeElement").val(),
            },
            success: function(resultData) { 
                $("#result").text(resultData)
            },
        });


        });


    </script>
</body>
</html>