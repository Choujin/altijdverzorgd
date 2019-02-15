@extends('member.layouts.app')

<style type="text/css">
.profile-image{
  width: 150px;
  margin-top: 20px;
}


.card {
  background-color: green;
}
.ster{
  width: 30px;
}

</style>

@section('content')


<div class="container">
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-3">
          <img data-src="/images/avatar/default.jpg" alt="your profile image" class="profile-image rounded-circle p-1">
        </div>
        <div class="col-5 align-self-end">
          <h3>Cristepher</h3>
          <h6>ceadamus@outlook.com</h6>

          <hr class="bg-green">
          <div class="col card border-success mb-3">
            <B><p>
              Werk-locatie: Enschede <br>
              Specialicatie: Massage

            </p></B>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
<hr class="bg-green">

<div class="row">
  <div class="col">
    <h5>Comments<h5>
      </div>
      <div class="col">
<img data-src="/images/avatar/ster.png" class="ster justify-content-between">
</div>

</div>


@endsection
