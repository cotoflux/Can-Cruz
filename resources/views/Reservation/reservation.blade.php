<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table>
        <th>Listado de reservas</th>
        <form action="/logout" method="POST">
            @csrf
            <input type="submit" value="logout">
        </form>
        <?php

    foreach ($reservation as $value) {
?>

        <tr>


            <td><?php echo $value->name ?></td>
            <td><?php echo $value->surname ?></td>
            <td><?php echo $value->telephone ?></td>
            <td><?php echo $value->email ?></td>
            <td><?php echo $value->postalCode ?></td>
            <td><?php echo $value->checkinDate ?></td>
            <td><?php echo $value->checkoutDate ?></td>
            <td><?php echo $value->roomNumber ?></td>
            <td><?php echo $value->validated ?></td>
            <td>
                <form method="GET" action="/reservation/{{$value->id}}/edit">
                    @csrf
                    @method('edit')
                    <input type="submit" value="Editar">
                </form>
            </td>
            <td>
                <form method="POST" action="/reservation/{{$value->id}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>

        <?php
    }
?>
    </table>
</body>

</html>
