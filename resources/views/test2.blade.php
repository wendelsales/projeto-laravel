<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <div style="
    display:flex;
    flex-direction:row;
    ">
    <!--percorre pessoas e chama cada pessoa de P -->
    @foreach($pessoas as $p)
            <!--chamou a pasta de componentes-->
            @component('components.quadrado')
                @slot('image')
                    {{$p['image']}}
                @endslot
                @slot('nome')
                    {{$p['nome']}}
                @endslot
                @slot('birth')
                    {{$p['birth']}}
                @endslot
                @slot('idade')
                    {{$p['idade']}}
                @endslot
            @endcomponent
    @endforeach
    </div>
</body>
</html>