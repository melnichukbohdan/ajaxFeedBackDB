<!DOCTYPE HTML>
<html land="EN">
    <head>
        <meta charset="UTF-8">
        <title>Feedback form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <h1>Feedback form</h1>

                <!-- feedback form-->
                <input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
                <input type="text" id="name" name="name" placeholder="Enter you name" class="form-control"><br>
                <input type="phone" id="phone" name="phone" placeholder="Phone" class="form-control"><br>
                <textarea name="message" id="message" placeholder="Feedback" class="form-control"></textarea><br>
                <button type="submit" id="sendMail" class="btn btn-success">Send!</button>

            <div id="errorMess"></div>
        </div>
        <div>
            <span id="user">1</span>
            <p id="feedback">1</p>


        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/formMail.js"></script>
    </body>

</html>