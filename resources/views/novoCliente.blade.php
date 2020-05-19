<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <main>
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text" class="form-control  {{ $errors->has('nome') ? 'is-invalid' : '' }}"  {{-- Se houver erro, aplica ao campo nome a classe de erro 'is-invalid'--}}
                                       id="nome" name="nome" placeholder="Nome do cliente">

                                @if($errors->has('nome')) {{-- Se houver erro, mostra o erro --}} 
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome')}}  {{-- Pega o 1º erro associado ao campo 'nome' --}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}"
                                       id="idade" name="idade" placeholder="Idade do cliente">

                                @if($errors->has('idade')) {{-- Se houver erro, mostra o erro --}} 
                                    <div class="invalid-feedback">
                                        {{ $errors->first('idade')}} 
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" 
                                       id="endereco" name="endereco" placeholder="Endereço do cliente">

                                @if($errors->has('endereco')) {{-- Se houver erro, mostra o erro --}} 
                                    <div class="invalid-feedback">
                                        {{ $errors->first('endereco')}} 
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email do Cliente</label>
                                <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                       id="email" name="email" placeholder="Endereço do cliente">

                                @if($errors->has('email')) {{-- Se houver erro, mostra o erro --}} 
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset ('js/app.js') }}"></script>
</body>
</html>