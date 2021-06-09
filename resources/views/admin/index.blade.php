<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แอดมิน</title>
</head>
<body>
้   

<!--สร้างตัวแปร แล้วให้แสดงด้วย blade syntax-->
    <?php

    $name = "kitsana";

    $arr = array ("Home", "Member", "About");

    ?>

    
<!--การใช้ if else blade syntax-->

    @if ($name == "kitsana")
        <h1>ยินดีต้อนรับแอดมิน {{$name}}</h1>
        <h1>ท่านเป็นแอดมิน</h1>

    @else

    <h1>ท่านไม่ได้เป็นแอดมิน</h1>

    @endif
    
    <!--การใช้ foreach-->

    @foreach ($arr as $menu)

        <a href="">{{$menu}}</a>

    @endforeach


</body>
</html>