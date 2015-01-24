<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jquery Image Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


    <style>
        .sized{
            width: 100px;
            float: left;
        }
    </style>



</head>
<body>
    <section class="container">

        <br><br>

        <img class="img-thumbnail sized" src="image/1.jpg">
        <img class="img-thumbnail sized" src="image/2.jpg">
        <img class="img-thumbnail sized" src="image/3.jpg">
        <img class="img-thumbnail sized" src="image/4.jpg">
        <img class="img-thumbnail sized" src="image/5.jpg">
        <img class="img-thumbnail sized" src="image/6.jpg">
        <img class="img-thumbnail sized" src="image/7.jpg">
        <img class="img-thumbnail sized" src="image/8.jpg">
        <img class="img-thumbnail sized" src="image/9.jpg">
        <img class="img-thumbnail sized" src="image/10.jpg">

        <button id="button">Start</button>
    </section>
    <section class="container">
        <hr>

        <img id="frameImg" class="img-thumbnail" src="image/1.jpg">


        <script type="text/javascript">

            $(document).ready(function(){
                var i = 1;
                $('.sized').click(function(){
                    var url = $(this).attr('src');
                    //alert('url');
                    $('#frameImg').attr('src', url);
                })
            });

        </script>



    </section>
</body>
</html>