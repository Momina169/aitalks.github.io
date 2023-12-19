@extends('layouts.layout')

@section('title')
Questions
@endsection

@section('content')
<x-app-layout>

    <script>
    $(document).ready(function() {

        //show modal
        $("#question").click(function() {
            $("#myModal").modal('show');
        });

        // Show More
        if ($('.post').length > 5) {
            $('.post:gt(4)').hide();
            $('.show-more').show();
        }
        //Show Less
        if ($('.post').length > 10) {
            $('.post:lt(5)').show();
            $('.show-less').hide();
        }

        $('.show-more').on('click', function() {
            $('.post:gt(4)').toggle();
            $(this).text() === "Show more..." ? $(this).text('Show less') : $(this).text(
                'Show more...');
        });
    });
    </script>
    <!-- Ask a question section -->
    <div class="container-fluid bg-light">
        <div class="row py-2">
            <div class="col-sm-4 d-flex justify-content-lg-end justify-content-md-end ">

                <div class="dropdown">
                    <button type="button" class="btn btn-outline-danger b-ask my-1" data-bs-toggle="modal"
                        data-bs-target="#myModal" onclick="displayAsk()">Ask Question</button>
                </div>

            </div>
            <!-- Search Form -->
            <div class="col-sm-8">
                <form class="d-flex form-group " method="get">

                    <input class="form-control w-75" type="search" value="{{$q}}" name="search" placeholder="Search"
                        aria-label="Search">
                    <label class="btn btn-danger" for="submit"><i class="fa-solid fa-magnifying-glass"></i></label>
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
                                <h6 class="text-center menu-ask my-2">Add Question</h6>
                            </a>
                        </div>
                        <!-- <div class="col-lg-6 ">
                        <a href="#create-post" onclick="displayPost()">
                            <h6 class="text-center menu-post">Create a post</h6>
                        </a>
                    </div> -->
                    </div>


                    <!-- ask -->
                    <!-- <div id="">
                    
                    <form class="search mb-5">
                        <input class="w-100 p-2 mb-5 search-field" name="discuss_search" placeholder="How to...">
                    </form>

                    <div class="modal-footer mt-5">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success">Ask</button>
                    </div>
                </div> -->

                    <!-- ask -->

                    <div id="ask">
                        <div class="help my-2 bg-light text-info">
                            <h5 class="fs-5">Tips on getting Answers quickly</h5>
                            <ul>
                                <li>Make sure your question has not been asked already</li>
                                <li>Keep your question short and to the point</li>
                            </ul>
                        </div>

                        <form class="search mb-5 " action="{{ route('store') }}">
                            <input class="w-100 p-2 mb-5 search-field" name="title" placeholder="Title">

                            <input type="file" id="imageInput" accept="image/*" style="display: none;">
                            <label for="imageInput" class="btn btn-outline-dark cursor-pointer"><i
                                    class="fa-regular fa-image"></i></label>        
                            <button for="textFormat" class="btn btn-outline-dark cursor-pointer"><i
                                    class="fa-solid fa-a"></i></button>

                            <select class="form-control" id="type" name="type">
                                @foreach($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <textarea name="post_content" class="w-100 border border-none my-2" cols="30" rows="5"
                                placeholder="Write Details here..."></textarea>


                            <div class="modal-footer mt-5">
                                <input type="submit" class="btn btn-outline-success" value="Talk">
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!--------------------Side Panel---------------------->
    <div class=" row mt-5 container-fluid">
        <div class="col-lg-3 col-md-3 ">
            <button type="button" class="bg-white text-dark mb-4 d-xl-none d-lg-none d-md-none"
                data-bs-toggle="collapse" data-bs-target="#lists">
                <svg fill="#000000" width="25px" height="25px" class="p-0" viewBox="0 -2 28 28"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m2.61 0h22.431c1.441 0 2.61 1.168 2.61 2.61s-1.168 2.61-2.61 2.61h-22.431c-1.441 0-2.61-1.168-2.61-2.61s1.168-2.61 2.61-2.61z" />
                    <path
                        d="m2.61 9.39h22.431c1.441 0 2.61 1.168 2.61 2.61s-1.168 2.61-2.61 2.61h-22.431c-1.441 0-2.61-1.168-2.61-2.61s1.168-2.61 2.61-2.61z" />
                    <path
                        d="m2.61 18.781h22.431c1.441 0 2.61 1.168 2.61 2.61s-1.168 2.61-2.61 2.61h-22.431c-1.441 0-2.61-1.168-2.61-2.61s1.168-2.61 2.61-2.61z" />
                </svg>
            </button>

            <ul class=" d-lg-block d-md-block collapse list-group-collapse mt-5" id="lists">
                <input type="button" onclick='selects()' value="Select All" />
                <input type="button" onclick='deSelect()' value="Deselect All" /> <br><br>

                <li class="list-group-item " name="chk">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="secondCheckbox">
                    <label class="form-check-label" for="secondCheckbox">Artificial Intelligence</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="thirdCheckbox">
                    <label class="form-check-label" for="thirdCheckbox">Data Science</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="programming">
                    <label class="form-check-label" for="programming">Programming</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="algo">
                    <label class="form-check-label" for="algo">Algorithms</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="datastructure">
                    <label class="form-check-label" for="datastructure">Data Structures</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="data-regression">
                    <label class="form-check-label" for="data-regression">Data Regression</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="ms-excel">
                    <label class="form-check-label" for="ms-excel">MS Excel</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="computer-science">
                    <label class="form-check-label" for="computer-science">Computer Science</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" name="chk" type="checkbox" value="" id="cyber">
                    <label class="form-check-label" for="cyber">Cyber Security</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="development">
                    <label class="form-check-label" for="development">Development</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="web development">
                    <label class="form-check-label" for="web development">Web development</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input" type="checkbox" name="chk" value="" id="mobile development">
                    <label class="form-check-label" for="mobile development">Mobile Development</label>
                </li>
                <li class="list-group-item ">
                    <input class="form-check-input " type="checkbox" name="chk" value="" id="others">
                    <label class="form-check-label" for="others">Others</label>
                </li>


            </ul>
        </div>

        <!-------------------------------Responses Q/A--------------------- ---->


        <div class="col-lg-9 col-md-9" id="questions">

            <h1 style="color: saddlebrown; font-size: xx-large">Top Questions</h1>
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
                                                class="fa-regular fa-pen-to-square float-right"
                                                style="color: #595454;"></i>
                                            &nbsp;Edit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- end side menu --}}

                    </div>

                    <h5 class="card-title fs-5 fw-bold"> {{ $post->title }} </h5>
                    <p class="card-text pcontent" data-post-content="{{$post->post_content}}">{{ $post->post_content }}
                    </p>

                    <div class=" pb-2">
                        <a href="#" class="likee like-button">
                            <i class="fs-5 px-2 fa-regular fa-heart"></i>
                        </a>
                        <a href="{{ url('editPost/' . $post->id) }}" class="likee">
                            <i class="fs-5 px-1 fa-regular fa-pen-to-square"></i>
                        </a>
                    </div>

                </div>

            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                <button class="show-more btn btn-secondary  mb-2" onclick="scrollToTop()">Show more...</button>
            </div>
        </div>

        {{ $ai_posts->links("pagination::bootstrap-5") }}




</x-app-layout>
@endsection