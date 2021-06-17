<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- 
        Contact Form

        Name
        Email
        Phone
        Subject
        Message
     -->
    
     <div class="container">
         <div class="row">
             <?php
             session_start();
                if( isset($_SESSION['error']) ){
                    ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php
                }
             ?>
         </div>
         <div class="row">
             <div class="col-12">
                <form action="process.php" method="post" class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="number" name="phone" id="phone" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select name="subject" id="subject" class="form-control">
                            <option value="enquiry">Enquiry</option>
                            <option value="complain">Complain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="msg">Message:</label>
                        <textarea name="msg" id="msg" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="submit">
                    </div>
                </form>
             </div>
         </div>
     </div>


</body>
</html>