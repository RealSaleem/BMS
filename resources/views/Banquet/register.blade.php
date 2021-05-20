
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="col-md-8 " style="    margin-top: 60px;">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">


                  <form method="POST" action="{{ route('banquet.store') }}">
              @csrf
              <div class="row">
                <div class="col-md-4">
                  <label>Banquet Name :</label>
                  <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col-md-8">
                  <label>Banquet Address :</label>
                  <input type="text" name="address"  value="{{old('address')}}" class="form-control">
                     @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>

                  <div class="row mt-4">
                <div class="col-md-6">
                  <label>Contact Number :</label>
                  <input type="number" name="number"  value="{{old('number')}}" class="form-control">
                     @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="col-md-6">
                  <label>Capicity :</label>
                  <input type="number" name="capicity"  value="{{old('capicity')}}" class="form-control">
                     @error('capicity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
            
  <hr>

                <div class="text-right">
                      <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                  <!-- <button type="button" class="btn btn-primary my-4">Sign in</button> -->  
                </div>
              </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

















