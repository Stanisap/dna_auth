<div class="container">
    <?php
    if (isset($_SESSION['seconds'])) {
        ?>
        <div class="alert alert-danger">
            Попробуйте еще раз через <?= $_SESSION['seconds']; ?> секунд
        </div>
        <?php
    }

    if (isset($data['message'])) {
        ?>
        <div class="alert <?php
        if (isset($data['class'])) :
        echo $data['class'];
        else :
            echo 'alert-danger';
        endif
        ?>">
        <?= $data['message'] ?>
        </div>
        <?php
    }
    ?>

    <!-- Форма для регистрации -->
    <form role="form" class="form-horizontal" method="POST" action="/auth">
        <!-- block for name -->
        <div class="form-group has-feedback">
            <label for="first-name" class="control-label col-xs-3">Имя:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" required="required" name="name" pattern="[A-Za-z]{3,}">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div> <!-- /.name-->
        <!-- block for password -->
        <div class="form-group has-feedback">
            <label for="last-name" class="control-label col-xs-3">Пароль:</label>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" required="required" name="password" pattern="[\w]{4,}">
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div> <!-- /.password-->

        <!-- block for button submit form -->
        <div class="form-group has-feedback">
            <div class="col-xs-5"></div>
            <div class="col-xs-2">
                <div class="input-group">
                    <button id="save" type="submit" class="btn btn-default active center-block">Авторизация</button>
                </div>
                <span class="glyphicon form-control-feedback"></span>
            </div>
        </div> <!-- /.button submit form -->
    </form>

</div>