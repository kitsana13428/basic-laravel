<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>
</head>
<body>
้   <h1>เกี่ยวกับผู้พัฒนาเว็บ</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eligendi soluta optio rem magnam, sit vel qui earum doloremque in.</p>
    <p>ที่อยู่ : {{$adress}}</p>
    <p>เบอร์ติดต่อ : {{$tel}}</p>
    <p>อีเมล์ : {{$email}}</p>
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('ad')}}">Admin</a> <!--ย่อพาทยาวๆจากหน้า web ให้เป็นคำสั้นๆ ง่ายต่อการเขียนใช้งาน-->
    <a href="{{url('/member')}}">Member</a> <!--ทำให้โชว์ url-->
    <a href="{{url('/about')}}">About</a>
    
</body>
</html>