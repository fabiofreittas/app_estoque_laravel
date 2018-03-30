<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Listagem de Produtos</h1>

    <form action="/produtos/listar" method="post">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao">
        <input type="submit">

    </form>

    @if(count($produtos)==0)
        <div>Nenhum Produto Encontrado</div>

    @else

    <table>
        <tr>
            <td>ID</td>
            <td>Descrição</td>
            <td>Quantidade</td>
            <td>Valor</td>
            <td>Data de Vencimento</td>
        </tr>

        @foreach($produtos as $produto)
        <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->valor}}</td>
            <td>{{$produto->data_vencimento}}</td>
        </tr>
        @endforeach
    </table>

    @endif

</body>
</html>