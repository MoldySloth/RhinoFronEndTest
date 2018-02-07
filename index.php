<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=11; IE=Edge; chrome=1">
        <title>Front-end Test</title>
        <!--        link to font-->
        <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
        <!--        link css-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="container">
        <!--        current content on page-->
        <a href="https://www.rhinoafrica.com/en?_ptp=1"><img class="logo" src="resources/RhinoAfricacom_RGB.png"></a>
        <h1>Wildlife gallery</h1>
        <p>Welcome to RhinoAfrica</p>
    </div>
    <!--        where photo's and stuff go-->
    <div class="gallery">
        <!--            photo div-->
        <div class="myPhoto">
            <img class="photo" id="photoRound" src="resources/pexels-photo-416202.jpeg" alt="A really pretty owl" onclick="modal(this);">
            <div class="text"><p></p></div>
        </div>
        <div class="myPhoto">
            <img class="photo" id="photoRectangle" src="resources/pexels-photo-631292.jpeg" alt="Our precious rhinos" onclick="modal(this);">
            <div class="text"><p></p></div>
        </div>
        <div class="myPhoto">
            <img class="photo" id="photoSquare" src="resources/pexels-photo-187842.jpeg" alt="An eagle of some kind" onclick="modal(this);">
            <div class="text"><p></p></div>
        </div>
        <div class="myPhoto">
            <img class="photo" id="photoTriangle" src="resources/pexels-photo-247376.jpeg" alt="Hello little mamma let me whisper in your ear" onclick="modal(this);">
            <div class="text"><p></p></div>
        </div>
    </div>
    <!--    Modal box-->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="imgModal">
        <div id="caption"></div>
    </div>
    <!--    link js-->
    <script src="js/photo.js"></script>
    </body>
</html>
