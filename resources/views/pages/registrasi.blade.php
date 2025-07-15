
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Voler Admin</title>
    <link rel="stylesheet" href="{{asset ('assets')}}/css/bootstrap.css">

    <link rel="shortcut icon" href="{{asset ('assets')}}/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset ('assets')}}/css/app.css">
</head>

<body>
    <div id="auth">

<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{asset ('assets')}}/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Registrasi</h3>
                    </div>
                    <form method="POST" action="/simpanRegister">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" placeholder="Nama" name="name" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nik') is-invalid @enderror"  placeholder="NIK" id="nik" name="nik" required>
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group" style="padding-bottom: 20px">
                            <a href="/">BACK TO LOGIN</a>
                         </div>

                      <div class="col-sm-12 col-md-8 mx-auto">
                        <button type="submit" class="btn btn-primary btn-lg btn-block center-block">
                          Register
                        </button>
                      </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{asset ('assets')}}/js/feather-icons/feather.min.js"></script>
    <script src="{{asset ('assets')}}/js/app.js"></script>

    <script src="{{asset ('assets')}}/js/main.js"></script>
</body>

</html>
