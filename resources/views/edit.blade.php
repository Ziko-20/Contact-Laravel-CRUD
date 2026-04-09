<div>

<form   action="{{ route('contacts.update',$data->id) }}" method="POST" >
@method('PUT')
@csrf
   <center> <h1>Update CONTACT:</h1></center>


<h3><label for="">Nom</label></h3>
    <input type="text"
    placeholder="Name"
    value="{{ $data->nom_du_contact }}"
    name="nom_du_contact"/>


<h3><label for="">Email</label></h3>
    <input type="email"
    placeholder="Email@gmail.com"
    value="{{ $data->email }}"
    name="email"/>


<h3><label for="">Number</label></h3>
    <input type="text"
    placeholder="06__ __ __ __"
    value="{{ $data->telephone }}"
    name="telephone"/>
    
    <button type="submit">Edit</button>

</form>

</div>