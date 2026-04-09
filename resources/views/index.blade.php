<div>
<center>
<h1>Contacts:</h1></center>
@foreach ($contacts as $contact)
<p>Id:{{$contact->id}}</p>
<p>Nom:{{$contact->nom_du_contact}}</p>
<p>Email:{{$contact->email}}</p>
<p>Num:{{$contact->telephone}}</p>
<Hr/>

<form action={{ route('contacts.edit',$contact->id) }} method="get"  >
<button type="submit">Update</button>
</form> 
@endforeach


</div>

{{-- contacts. c le nom de la route --}}