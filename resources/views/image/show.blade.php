
<!-- <h1>Images</h1>
@component('btn_del')
@endcomponent
<table>
    <tr>
        <td>ID</td>
        <td>{{ $img->id }}</td>
    </tr>
    <tr>
        <td>Filename</td>
        <td>{{ $img->filename }}</td>
    </tr>
    <tr>
        <td><img src="{{ $img->url }}" alt="" style='width: 30% ; height:30%;' ></td>
    </tr>
</table> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/ImgShow.css">
    <title>Document</title>
</head>
<body>
    
<h1><a href="/image-manager"> <img src="/image/arr_left.png" alt="" class='arr'> Go back</a></h1>
@component('btn_del')
@endcomponent
<table>
    <tr>
        <td>ID</td>
        <td>{{ $img->id }}</td>
    </tr>
    <tr>
        <td>Filename</td>
        <td>{{ $img->filename }}</td>
    </tr>
    <tr>
        <td><img src="{{ $img->url }}" alt="" style='width: 30% ; height:30%;' ></td>
    </tr>
</table>        

</body>
</html>