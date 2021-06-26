<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Mix</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }

        .modal-login {
            color: #636363;
            width: 350px;
        }

        .modal-login .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }

        .modal-login .modal-header {
            border-bottom: none;
            position: relative;
            justify-content: center;
        }

        .modal-login h4 {
            text-align: center;
            font-size: 26px;
        }

        .modal-login .form-group {
            position: relative;
        }

        .modal-login i {
            position: absolute;
            left: 13px;
            top: 11px;
            font-size: 18px;
        }

        .modal-login .form-control {
            padding-left: 40px;
        }

        .modal-login .form-control:focus {
            border-color: #00ce81;
        }

        .modal-login .form-control,
        .modal-login .btn {
            min-height: 40px;
            border-radius: 3px;
        }

        .modal-login .hint-text {
            text-align: center;
            padding-top: 10px;
        }

        .modal-login .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }

        .modal-login .btn,
        .modal-login .btn:active {
            border: none;
            background: #00ce81 !important;
            line-height: normal;
        }

        .modal-login .btn:hover,
        .modal-login .btn:focus {
            background: #00bf78 !important;
        }

        .modal-login .modal-footer {
            background: #ecf0f1;
            border-color: #dee4e7;
            text-align: center;
            margin: 0 -20px -20px;
            border-radius: 5px;
            font-size: 13px;
            justify-content: center;
        }

        .modal-login .modal-footer a {
            color: #999;
        }

        .trigger-btn {
            display: inline-block;
            margin: auto;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="text-center" style="margin-top: 100px; text-align: center">
        <div>
            @if ($errors->any())
                <div>
                    <ul  class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <!-- Button HTML (to Trigger Modal) -->
        <a href="#myModal" class="trigger-btn" data-toggle="modal">Clique e faça seu login,Admin!</a>

    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="{{ route('page.login') }}">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Admin Login</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-user"></i>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-lock"></i>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Conectar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>