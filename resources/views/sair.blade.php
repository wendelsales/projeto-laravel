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
   flex-direction: row;
   flex-wrap:wrap;
   justify-content:space-between;
    ">
    <!-- de $i e igual a 0, enquanto $i for menor q 50 , ele soma +1 ate chegar em 50 ae para -->
    @for($i=0; $i<50;$i++)
        <div style="
        width:150px;
        height:150px;
        "><!-- a variavel $i é a do for-->
            <!-- se eu usasse so $url repetiria a mesma imgem -->
            <img src="{{$url}}{{$i}}">
        </div>
    @endfor
   </div>


</body>
</html>