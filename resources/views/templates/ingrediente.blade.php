{{ csrf_field() }}
	@foreach($ingredientes as $ingrediente)
	<tr>
	    <td> {{$ingrediente->nombreIngrediente}} </td>
	    <td> {{$ingrediente->cantidad}} </td>
	    <td width="150"><input type='text' name='cantidad' id='cantidad'> </td>
	<tr>
@endforeach