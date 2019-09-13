<form method="POST" action="/reservation">
    @csrf
    <label>Nombre</label>
    <input type="text" name="name">
    <br>
    <label>Apellidos</label>
    <input type="text" name="surname">
    <br>
    <label>Email</label>
    <input type="email" name="email">
    <br>
    <label>Telefono</label>
    <input type="text" name="telephone">
    <br>
    <label>Codigo Postal</label>
    <input type="text" name="postalCode">
    <br>
    <label>Fecha de entrada</label>
    <input type="date" value="<?php echo date("Y-m-d\TH-i");?>" min="<?php echo date("Y-m-d\TH-i");?>"
        name="checkinDate">
    <br>
    <label>Fecha de salida</label>
    <input type="date" name="checkoutDate">
    <br>
    <label>Numero de habitacion</label>
    <input type="text" name="roomNumber">
    <br>
    <label>Numero de personas</label>
    <input type="text" name="numberPeople">
    <br>
    <label>Numero de mascotas</label>
    <input type="text" name="numberPets">
    <br>
    <label>Desayuno</label>
    <input type="checkbox" name="breakfast" value='1'>
    <br>
    <label>Comida</label>
    <input type="checkbox" name="lunch" value='1'>
    <br>
    <label for="dinner">Cena</label>
    <input type="checkbox" name="dinner" value='1'>
    <br>
    <label for="comments">Comentarios</label>
    <input type="text" name="comments">
    <br>
    <label>Idioma</label>
    <input type="text" name="language">
    <br>
    <label>Aceptar tratamiento de datos personales</label>
    <input type="checkbox" name="dataProtection" value='1'>
    <br>
    <input type="submit">
</form>
