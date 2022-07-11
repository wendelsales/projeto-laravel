<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
   <style>
    .container1{
        text-align:center;
    }
    .container{
      
       
    }.quadrado{
        padding:20px;
        margin:30px;
        display: inline-block;
        width: 20%;
        height:400px;
        box-shadow: inset 0 0 1em black, 0 0 1em red;
    }

   </style>
</head>
<body>
    <div class="container1">
        <div class="container">
            <div class="quadrado">
                <img src=" {{$pessoas[2]["image"]}}"style="width:70%; "> 
                <h1>nome:{{$pessoas[0]["nome"]}}</h1>
                <h3>Data de Nascimento:{{$pessoas[0]["birth"]}}</h3>
                <h2>Idade :{{$pessoas[0]["idade"]}}</h2>
            </div>
            <div class="quadrado">
                <img src=" {{$pessoas[1]["image"]}}"style="width:70%; "> 
                <h1>nome:{{$pessoas[1]["nome"]}}</h1>
                <h3>Data de Nascimento:{{$pessoas[0]["birth"]}}</h3>
                <h2>Idade:{{$pessoas[0]["idade"]}}</h2>
            </div>
            <div class="quadrado">
                <img src=" {{$pessoas[0]["image"]}}"style="width:70%; "> 
                <h1>nome:{{$pessoas[2]["nome"]}}</h1>
                <h3>Data de Nascimento:{{$pessoas[0]["birth"]}}</h3>
                <h2>Idade:{{$pessoas[0]["idade"]}}</h2>
            </div>
        </div>
    </div>
</body>
</html>

