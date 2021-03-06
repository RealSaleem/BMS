<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Chat | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-chat.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns  app-page "
    data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">


<div class="container" style="    width: 76%;">
    <div class="card">
        <div class="container" style="width: 86%; padding: 38px 16px;" >
            <h1 style="font-size: 28px;
    margin: -10px -10px;
    text-align: center;
    font-weight: 900;">Register Banquest</h1>
        </div>
    </div>
</div>



<div class="container" style="    width: 76%;">
    <div class="card">
        <div class="container" style="width: 86%; padding: 38px 16px;" >
            <div class="card-body login-card-body">
                <form method="POST" action="{{ route('banquet.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-field col m4 s4 h-100">
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                <label for="From">Banquet Name : </label>

                                @if($errors->has('name'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('name') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-field col s8">
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                <label for="From">Banquet Address : </label>

                                @if($errors->has('address'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('address') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="input-field col s6">
                                <input type="number" name="number" value="{{old('number')}}" class="form-control">
                                <label for="From">Contact Number : </label>

                                @if($errors->has('number'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('number') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field col s6">
                                <input type="number" name="capicity" value="{{old('capicity')}}" class="form-control">
                                <label for="From">Capicity : </label>

                                @if($errors->has('capicity'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('capicity') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s12  " >

                            <button type="submit" class="btn btn-primary" style="float: right">
                                {{ __('Register') }}
                            </button>


                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

</div>


<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="../../../app-assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="../../../app-assets/js/plugins.js"></script>
<script src="../../../app-assets/js/search.js"></script>
<script src="../../../app-assets/js/custom/custom-script.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../../../app-assets/js/scripts/app-chat.js"></script>
<!-- END PAGE LEVEL JS-->
</body>

</html>























