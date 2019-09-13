<form method="POST" action="/reservation/{{$reservation->id}}">
    @csrf
    @method('patch')
    <label>Nombre</label>
    <input type="text" name="name" value="{{$reservation->name}}">
    <br>
    <label>Apellidos</label>
    <input type="text" name="surname" value="{{$reservation->surname}}">
    <br>
    <label>Email</label>
    <input type="email" name="email" value="{{$reservation->email}}">
    <br>
    <label>Telefono</label>
    <input type="text" name="telephone" value="{{$reservation->telephone}}">
    <br>
    <label>Codigo Postal</label>
    <input type="text" name="postalCode" value="{{$reservation->postalCode}}">
    <br>
    <label>Fecha de entrada</label>
    <input type="date" name="checkinDate" value="{{$reservation->checkinDate}}">
    <br>
    <label>Fecha de salida</label>
    <input type="date" name="checkoutDate" value="{{$reservation->checkoutDate}}">
    <br>
    <label>Numero de habitacion</label>
    <input type="text" name="roomNumber" value="{{$reservation->roomNumber}}">
    <br>
    <label>Numero de personas</label>
    <input type="text" name="numberPeople" value="{{$reservation->numberPeople}}">
    <br>
    <label>Numero de mascotas</label>
    <input type="text" name="numberPets" value="{{$reservation->numberPets}}">
    <br>
    <label>Desayuno</label>
    <input type="checkbox" name="breakfast" value="1" <?php
if ($reservation->breakfast) {
  echo "checked";
}

?>>
    <br>
    <label>Comida</label>
    <input type="checkbox" name="lunch" value="1" <?php
if ($reservation->lunch) {
  echo "checked";
}

?>>
    
    <br>
    <label for="dinner">Cena</label>
    <input type="checkbox" name="dinner" value='1'
    
    <?php
if ($reservation->dinner) {
  echo "checked";
}

?>>
    <br>
    <label for="comments">Comentarios</label>
    <input type="text" name="comments" value="{{$reservation->comments}}">
    <br>
    <label>Idioma</label>
    <input type="text" name="language" value="{{$reservation->language}}">
    <br>
    <label for="validated">Validado</label>
    <input type="checkbox" name="validated" value="1"
    <?php
if ($reservation->validated) {
  echo "checked";
}

?>>
    <br>
    <input type="submit">
</form>
