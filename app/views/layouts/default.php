<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= $title; ?></title>
</head>
<body style="background: #f1e9ef40;">
<header>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">DNA task</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Главная</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if( isset( $_COOKIE['auth'] ) && $_COOKIE['auth'] ) {
                            ?>
                            <li><a href="/exit" class="btn btn-default active" role="button" aria-disabled="true" style=" padding: 5px 15px; margin-top: 8px;"><?= $data[0]; ?></a></li>
                            <?php
                        } else {
                            ?>
                            <li><a href="/auth" class="btn btn-default active" role="button" aria-disabled="true" style="    padding: 5px 15px; margin-top: 8px;"><strong>войти</a></li>
                            <?php
                        }

                        ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div><!-- /.container -->
</header>

<?= $content; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="../../assets/js/main.js"></script>
</body>
</html>