<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Lista de Clientes
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="tableclientes">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Endereço</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>                                
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->id }}</td>
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->idade }}</td>
                                        <td>{{ $cliente->endereco }}</td>
                                        <td>{{ $cliente->email }}</td>
                                    </tr>
                                @endforeach                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

   
    
    <script src="{{ asset ('js/app.js') }}"></script>
</body>
</html>