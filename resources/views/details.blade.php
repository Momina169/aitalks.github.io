@extends('layouts.layout')

@section('title')
Questions
@endsection

@section('content')

<!-- Ask a question section -->
<div class="container-fluid bg-light">
    <div class="row py-2">
        <div class="col-sm-4 d-flex justify-content-lg-end justify-content-md-end ">
            
            <div class="dropdown">
                <button type="button" class="btn btn-danger b-ask my-1" data-bs-toggle="modal" data-bs-target="#myModal" onclick="displayAsk()">Ask Question</button>
            </div>

        </div>
    <!-- Search Form -->
        <div class="col-sm-8">
            <form class="d-flex form-group " method="get">
                
                <input class="form-control w-75" type="search" value="{{$q}}" name="search" placeholder="Search" aria-label="Search">
                <label class="btn btn-danger" for="submit" ><i class="fa-solid fa-magnifying-glass"></i></label>
                <input class="form-control" type="submit" name="submit-seacrh" id="submit" style="display:none;">
                
            </form>
        </div>
    </div>
</div>

<!-- Question modal -->
<div id="myModal" class="modal fade modal-expand-lg">
    <div class="modal-dialog modal-dialog-centered  modal-lg p-2">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn bg-light rounded-5 close off float-right" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">
                <div class="row border-bottom mb-4">
                    <div class="col-sm-12">
                        <a href="#ask" onclick="displayAsk()">
                            <h6 class="text-center menu-ask">Add Question</h6>
                        </a>
                    </div>
                   
                </div>

                <div id="ask">
                <div class="help bg-light text-info">
                        <h5>Tips on getting Answers quickly</h5>
                        <ul>
                            <li>Make sure your question has not been asked already</li>
                            <li>Keep your question short and to the point</li>
                        </ul>
                    </div>

                    <form class="search mb-5" action="{{ route('store') }}">
                        <input class="w-100 p-2 mb-5 search-field" name="title" placeholder="Title">

                        <input type="file" id="imageInput" accept="image/*" style="display: none;">
                        <label for="imageInput" class="btn btn-outline-dark cursor-pointer"><i
                                class="fa-regular fa-image"></i></label>
                        <button for="textFormat" class="btn btn-outline-dark cursor-pointer"><i
                                class="fa-solid fa-a"></i></button>


                        <textarea name="post_content" class="w-100 border border-none mt-1" cols="30" rows="5"
                            placeholder="Write Details here..."></textarea>


                        <div class="modal-footer mt-5">
                            <input type="submit" class="btn btn-success" value="Talk">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

@foreach ($ai_posts as $post)
        
        <div class="card post mb-2 ">

            <div class="card-body ">
                <div class="row">
                    <div class="col-sm-10">

                        <div class="row w-50">
                            <div class="col-2 px-0 ">
                                <img src="pics/profile.jpg" alt="" width="75%" class="roundedmx-0">
                            </div>
                            <div class="col-10 px-0">
                                <h6 class="d-inline">John doe</h6>

                                <p class="text-secondary mx-25">Lorem ipsum dolor sit.</p>
                            </div>
                        </div>

                    </div>


                    {{-- side menu --}}
                    <div class="col-sm-2 d-flex justify-content-end">
                        <div class="dropdown">
                            <button class="btn" type="button" data-bs-toggle="dropdown"> <i
                                    class="fa-solid fa-ellipsis"></i></button>

                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="{{ url('deletePost/' . $post->id) }}"><i
                                            class="fa-regular fa-circle-xmark  float-right fs-5"
                                            style="color: #595454;"></i> &nbsp;Delete</a>
                                </li>
                                <li class="dropdown-item"> <a href="{{ url('editPost/' . $post->id) }}"><i
                                            class="fa-regular fa-pen-to-square float-right" style="color: #595454;"></i>
                                        &nbsp;Edit</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- end side menu --}}

                </div>
                <a ><h5 class="card-title">{{ $post->title }}</h5></a>   
                <p class="card-text pcontent" data-post-content="{{$post->post_content}}">{{ $post->post_content }}</p>
               
                <div class=" pb-2">
                    <a href="#" class="likee"><i style="font-size: 1.5em;" class="text-warning  fas fa-star"></i></a>
                    <a href="#" class="likee"><i style="font-size: 1.5em;"
                            class="text-info ml-2 fa-regular fa-paper-plane"></i></a>
                </div>

            </div>

        </div>
        @endforeach
@endsection