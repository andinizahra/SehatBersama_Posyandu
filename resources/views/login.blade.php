<html>
    <head>
        @vite(['resources/sass/app.scss','resources/js/app.js'])
        <style>
            body {
                background-color: #f8f9fa;
            }
    
            .card {
                border: 1px solid #ccc;
                border-radius: 10px;
            }
    
            .card-body {
                padding: 2rem;
            }
    
            .form-label {
                font-weight: bold;
            }
    
            .btn-primary {
                background-color: #6FB3B8;
                color: #fff;
            }
    
            .btn-primary:hover {
                background-color: #3F75C3;
            }
        </style>
    </head>
    <body>
    <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <img src="logo_posyandu.png" style="width: 300px; height:150px; margin-bottom: -80px; margin-left:-50px">
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">LOGIN HERE! </h3>

            <div class="form-outline mb-4">
              <input type="username" id="username" class="form-control form-control-lg" />
              <label class="form-label" for="username">NIK/NIP/NO.KK</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control form-control-lg" />
              <label class="form-label" for="password">Tanggal Lahir</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>
          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0">
        <img src="modal_1.png" style="width: 630px; height:555px;">
      </div>
    </div>
  </div>
</section>
  <script type="module">
    $('form').submit(async function (e) {
        e.preventDefault();
        let username = $('#username').val();
        let password = $('#password').val();
        var _tok = "{{csrf_token()}}";

        await axios({
            method: 'post',
            url: "{{url('/login')}}",
            data: {
                username : username,
                password : password,
                _token : _tok
            }
        }).then(async () => {
            await swal.fire({
                title: 'Login berhasil!',
                text: 'Redirecting to dashboard...',
                icon: 'success',
                timer: 1000,
                showConfirmButton: false
            })
            window.location = '/dashboard_admin'
            console.log('success')
        }).catch(({response}) => {
            if (!$('.err-message').text()) {
                $('.err-message').append(document.createTextNode(response.data.errors.message))
            }
        })

    })
</script>
</body>
</html>
  