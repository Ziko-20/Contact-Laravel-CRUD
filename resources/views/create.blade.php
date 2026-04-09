<div>
<form action="{{ route('contacts.store') }}" method="POST">
@csrf
       <h1>ADD CONTACT:</h1>
<h3><label for="">Nom</label></h3>
    <input type="text"
    placeholder="nom_du_contact"
    name="nom_du_contact"/>
<h3><label for="">Email</label></h3>
    <input type="email"
    placeholder="Email@gmail.com"
    name="email"/>
<h3><label for="">Number</label></h3>
    <input type="text"
    placeholder="06__ __ __ __"
    name="telephone"/>
    
    <button type="submit">Add</button>

</form>

</div>