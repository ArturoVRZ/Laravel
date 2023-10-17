<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Post</h1>
    <form action="{{ route('post.store') }}" method="post"> <!--llamamos a la post.store que es la ruta post que se encarga de meter los datos-->
        @csrf <!-- ayuda a que la peticion sea segura-->
        <label for="">Titulo</label>
        <input type="text" name="title">
        <label for="">Slug</label>
        <input type="text" name="slug" id="">
        <label for="">contenido</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <label for="">Descripción</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <label for="">categoria</label>
        <select name="category_id" id="">
            @foreach ($categories as $c)
                <option value="{{ $c->id }}">{{$c->title}}</option>
            @endforeach
        </select>
        <label for="">Posteado</label>
        <select name="posted" id="">
            <option value="yes">Si</option>
            <option value="not">No</option>
        </select>
        <label for="">Imagen</label>
        <input type="text" name="image" id="">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>