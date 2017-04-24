<html>
<head>
	<title>Printing Online</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap.min.css">
	<style type="text/css">
		body{
			background: url(<?= base_url()?>/image/imageLogin.jpg) fixed;
			-webkit-background-size:cover;
			-moz-background-size: cover;
			-o-background-size: cover;
		}

		.panel-default {
            opacity: 0.9;
            }
            .form-group.last { margin-bottom:0px; }
            .vcenter {
                vertical-align: middle;
                float: none;
                margin-top:40px;
            }
	</style>
</head>
<body>
<div class="container">
    <div class="row vcenter">
        <div class="col-md-4 col-md-offset-4">
        <div id="alert" class="alert alert-danger text-center" role="alert" style="opacity: 0.8;display: none;"><strong>Username</strong> atau<strong> Password</strong> Salah</div>
            <div class="panel panel-default" id="panel-login">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Printing Online</div>
                <div class="panel-body">
                    <form action="<?php base_url(); ?>prosesLogin" class="form-horizontal" role="form" method="post" id="login">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                </div>
        </div>
    </div>
</div>
</body>
</html>