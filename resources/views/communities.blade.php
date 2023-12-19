
@extends('layouts.layout')

@section('title')
Communities
@endsection
@section('content')

<x-app-layout>

  <div class="container-fluid" style=" background-image: url('{{asset('/pics/bg.jpg')}}');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="overlay d-flex justify-content-center align-items-center flex-column">
      <h1 class="text-warning display-1">Connecting Innovators</h1>
      <h4 class="h">Collaborate, Learn, and Grow in our AI Community</h4>
      <form action="#" class="form-group mt-4">
        <input class="form-control w-100" type="search" name="search" placeholder="Search communities">
      </form>
    </div>
  </div>

  <!----- Communities cards ---->
  <div class="container  my-2">
    <h1 class="my-5">Explore Communities</h1>
    <div class="row">

      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"> <img class="card-img-top" src="./pics/slef-awarness.jpg" alt="Self aware AI robot"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Self Aware AI</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>

      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"><img class="card-img-top" src="pics/ml.jpg" alt="Machine Learning"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Machine Learning</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>

      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"> <img class="card-img-top" src="pics/nn.jpg" alt="Neural Networks"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Neural Networks</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>


      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"> <img class="card-img-top"  src="pics/dl.jpg" alt="Deep Learning"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Deep Learning</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>

      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"><img class="card-img-top"  src="pics/theory of mind.jpg" alt="theory of mind"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Theory of mind</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>

      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"> <img class="card-img-top" src="pics/ds.jpg" alt="Data Science"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Data Science</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>

      <!---block -->
      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"> <img class="card-img-top" src="pics/iot.jpg" alt="Internet of Things"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Internet of Things</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3  my-2">
        <div class="card image border border-dark">
          <a href="#"> <img class="card-img-top" src="pics/dice.jpg" alt="Internet of Things"></a>

          <div class="card-body">
            <h5 class="card-title mx-0 px-0">Internet of Things</h5>
          </div>
          <div class="card-footer">
            <a href="#">Learn More...</a>
          </div>
        </div>
      </div>


    </div>
  </div>
</x-app-layout>
  @endsection
