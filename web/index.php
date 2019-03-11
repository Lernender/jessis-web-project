<html>
<head>
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="styles.css"
</head>

<body>

    <div class="form-title"></div>

    <div class="contact-form">
         <form id="contact-form" method="post" action="/contact.php">

             <input name="first_name" type="text" class="form-control" placeholder="Vorname" required> <br>

             <input name="name" type="text" class="form-control" placeholder="Nachname" required> <br>

             <input name="email" type="text" class="form-control" placeholder="E-Mail" required> <br>

             <input type="submit" class="form-control form-submit" placeholder="anmelden">
         </form>
    </div>
</body>
</html>