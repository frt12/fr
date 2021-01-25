@if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">

    <strong>Success! </strong>{{ session('success') }}
    <button class="close" type="button" ata-dismiss="alert" aria-label="Close"><span aria-hdden="true">&times;</span></button>
  </div>

@endif