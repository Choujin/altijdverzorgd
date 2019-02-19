@extends('member.layouts.app')

<style type="text/css">
@media screen and (max-width: 1200px)
{

}
.container{
  width: 100%;
  max-width: 1200px;
}

.profile-image{
  width: 150px;
  margin-top: 20px;
}


.card {
  background-color: green;
}
.ster{
  width: 20px;
}

</style>

@section('content')


<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 text-center">
          <img data-src="/images/avatar/default.jpg" alt="your profile image" class="profile-image rounded-circle p-1">
        </div>
        <div class="col-sm-6 align-self-end">
          <h3>Cristepher</h3>
          <h6>ceadamus@outlook.com</h6>

          <hr class="bg-green">
          <div class="col-sm-6 card border-success ">
            <B><p>
              Werk-locatie: Enschede <br>
              Specialicatie: Massage

            </p></B>
          </div>

        </div>
      </div>


<hr class="bg-green">

<div class="row">
  <div class="col-sm-4">
    <h5>Agenda<h5>


      </div>

<div class="col-sm-4 text-center">
<img data-src="/images/avatar/ster.png" class="ster"><B>10</B>
</div>

<div class="col-sm-4 text-right">
  <h5>Comments<h5>

</div>
</div>
<div class="row justify-content-between">
  <div class="col-sm-5">
    <img data-src="/images/avatar/agenda.jpeg" alt="">
  </div>
  <div class="col-sm-5 ">
  <hr>
  <p>lorem ipusum</p>
  <hr>
</div>
</div>
</div>

@endsection
