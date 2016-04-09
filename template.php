<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guestbook</title>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body background="img/backgr2.jpg">

<header class = "page-header text-center"><h1>GUESTBOOK</h1></header>
<div class ="container">
    <form action = '#' method="post">
        <div class="form-group col-md-6">
            <label for="name">Name <span>*</span></label>
            <div class="input-group">
                <div class="input-group-addon"><span class = "glyphicon glyphicon-user"></span></div>
                <input type="text" class="form-control" name ="name" id="name" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email address</label>
            <div class="input-group">
                <div class="input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></div>
                <input type="email" class="form-control" name = "email" id="email" placeholder="example@email.com">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="message-text" class="control-label"> Massage <span>*</span></label>
            <textarea class="form-control" rows="5" id="message-text" name = "massage" placeholder="Your massage" required></textarea>
        </div>
        <div class = "submit">
            &nbsp;&nbsp;&nbsp; <button type="submit" name = "submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

    <div class = "data">

    </div>
    <div class = "data">

    </div>

    <div class="tab-content">
        <div class="tab-pane" id="<?php ?>"></div>
    </div>

    <nav>
        &nbsp;&nbsp;&nbsp;&nbsp;<ul class = "pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class = "active"><a href="#0">1</a></li>
            <li><a href="#1">2</a></li>
            <li><a href="#2">3</a></li>
            <li><a href="#3">4</a></li>
            <li><a href="#4">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>


</div>
</body>
</html>