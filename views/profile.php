<?php $title = "Profile"; ?>
<?php
if (isset($_SESSION['user'])) {
    require_once('navbarUser.php');
} else {
    header('location:index.php?action=login');
}
?>
<?=
ob_start();
require_once('navbarUser.php');
?>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-3">
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6></h6>
                <input type="file" class="text-center center-block file-upload">
            </div>
            </hr><br>
            <div class="panel panel-default">
            </div>

        </div><!--/col-3-->
        <div class="col-sm-9">
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="first_name">
                            <h4>First name</h4>
                        </label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="last_name">
                            <h4>Last name</h4>
                        </label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile">
                            <h4>Mobile</h4>
                        </label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Email</h4>
                        </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="email">
                            <h4>City</h4>
                        </label>
                        <input type="email" class="form-control" id="location" placeholder="your city" title="enter a location" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="password">
                            <h4>Password</h4>
                        </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Old password" title="enter your password." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="password2">
                            <h4>Verify password</h4>
                        </label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="New password" title="enter your password2." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<br>
<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php');
