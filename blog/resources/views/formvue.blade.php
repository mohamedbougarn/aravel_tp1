<form action='/ajouter' method='post' >
{{ csrf_field() }}
nom : <input type='text' name='nom'><br>
prenom : <input type='text' name='prenom'><br>
age : <input type='number' name='age'><br>
<input type='submit' value='ajouter'>
</form>
