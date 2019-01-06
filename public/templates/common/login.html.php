<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>Admin Dev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <script src="/assets/plugins/head.min.js" data-headjs-load="/assets/js/init.js"></script>
</head>


<body class="error-body no-top lazy" data-original="/assets/img/work.jpg"
      style="background-image: url('/assets/img/work.jpg')">
<div class="container">
    <div class="row login-container animated fadeInUp">
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
            <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                <h2 class="normal">
                    Sign in to webarch
                </h2>
                <p>
                    Use Facebook, Twitter or your email to sign in.
                    <br>
                </p>
                <p class="p-b-20">
                    Sign up Now! for webarch accounts, it's free and always will be..
                </p>
                <div role="tablist">
                    <a href="#tab_login" class="btn btn-primary btn-cons" role="tab" data-toggle="tab">Login</a>
                    or&nbsp;&nbsp;
                    <a href="#tab_register" class="btn btn-info btn-cons" role="tab" data-toggle="tab">Create
                        an account</a>
                </div>
            </div>
            <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab_login">
                    <form class="animated fadeIn validate" id="" name="" method="post" action="{:url('toLogin')}">
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-4 col-sm-4">
                                <input class="form-control" id="login_username" name="login_username"
                                       placeholder="Username" type="email" required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input class="form-control" id="login_pass" name="login_pass" placeholder="Password"
                                       type="password" required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button type="submit" class="btn btn-primary btn-cons">登录</button>
                            </div>
                        </div>
                        <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="control-group col-md-10">
                                <div class="checkbox checkbox check-success">
                                    <a href="login_v2.html#">Trouble login in?</a>&nbsp;&nbsp;
                                    <input id="checkbox1" type="checkbox" value="1">
                                    <label for="checkbox1">Keep me reminded</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab_register">
                    <form class="animated fadeIn validate" id="" name="">
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="reg_username" name="reg_username" placeholder="Username"
                                       type="text" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="reg_pass" name="reg_pass" placeholder="Password"
                                       type="password" required>
                            </div>
                        </div>
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-12">
                                <input class="form-control" id="reg_mail" name="reg_mail" placeholder="Mailing Address"
                                       type="email" required>
                            </div>
                        </div>
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="reg_first_Name" name="reg_first_Name"
                                       placeholder="First Name" type="text" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="reg_first_Name" name="reg_first_Name"
                                       placeholder="Last Name" type="text" required>
                            </div>
                        </div>
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-12">
                                <input class="form-control" id="reg_email" name="reg_email" placeholder="Email"
                                       type="email" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>