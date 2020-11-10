Seccion para crear empresa:
<br/>
<br/>
<form action="{{ url('/empresa')}}" method="post">
{{ csrf_field() }}

<label for="name">{{'Nombre de la empresa'}}</label>
<input type="text" name="name" id="name" value="">
<br/>
<br/>
<label for="email">{{'Email de la empresa'}}</label>
<input type="text" name="email" id="email" value="">
<br/>
<br/>
<input type="submit" value="Agregar">



</form>