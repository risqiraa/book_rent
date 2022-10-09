<!doctype html>
<html lang="en">

<head>
  <title>Rental Buku | Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
    .main{
    height: 100vh;
    border: solid;
    box-sizing: border-box;
    }

    .login-box{
        width: 500px;
        border: 1px solid;
        padding: 20px;
    }

    form div{
        margin-bottom: 15px;
    }
</style>
<body>

<div>
    {{-- membuat box untuk area login --}}
    {{-- main = style .main
         d-flex = untuk mengaktifkan flexbox botstrap
         flex-column = mengatur arah vertikal
         justify-content-center = membuat rata tengah konten sumbu y
         align-items-center = membuat rataan item sumbu x
    --}}
    <div class="main d-flex flex-column justify-content-center align-items-center">

        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif

        {{-- membuat div untuk membungkus login box --}}
        <div class="login-box">
            {{-- membuat form method post --}}
            <form action="" method="post">
                {{-- intinya csrf tuh keamanan web --}}
                @csrf
                <div>
                    {{-- membuat label username --}}
                    <label for="username" class="form-label">Username</label>
                    {{-- membuat textfield username  --}}
                    <input type="text" name="username" id="username" class="form-control" required>
                    {{-- class from-control digunakan botstrap untuk melebarkan form sesuai blok --}}
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                    {{-- class btn = untuk mengaktifkan fitur bootstrap button
                        btw-primary = digunakan untuk memberi warna biru
                        form-control = untuk melebarkan sesuai inline blok
                         --}}
                </div>

                {{-- text-center digunakan untuk membuat rata tengah text --}}
                <div class="text-center">
                    {{-- membuat link yang dapat di klik --}}
                    <a href="register" >Sign up</a>
                </div>
            </form>
        </div>
    </div>
</div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
