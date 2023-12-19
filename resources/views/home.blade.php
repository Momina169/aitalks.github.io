
@extends('layouts.layout')
@section('title')
Home
@endsection

@section('content')
<x-app-layout>

    <!------------------------Main Header---------------------------------->
    
    <div id="carousel1" class="carousel slide mt-0  mb-5" data-bs-ride="carousel" data-bs-interval="2000" >

        <ol class="carousel-indicators">
            <li data-bs-target="#Carousel1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#Carousel1" data-bs-slide-to="1"></li>
            <li data-bs-target="#Carousel1" data-bs-slide-to="2"></li>
        </ol>

        <!-- carousel 1 -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-sm-6 col-xm-6  p-5">
                            <h1 class="text-b px-5">Discussion Board</h1>
                            <div>
                                <pre style=" font-family: 'Tomorrow', sans-serif; color: #004AAD;"><h1 data-aos="fade-right" class="display-3 px-5">Let's  Dive
into  AI
</h1></pre>
                            </div>
                            <div class="px-5 py-4"><button href="discuss"
                                    class=" btn btn-warning border border-dark rounded-5">Discuss Your
                                    Topics</button></div>
                        </div>
                        <div class="col-sm-6 col-xm-6 d-flex justify-content-center ">
                            <img  src="{{asset('pics/vector.jpg')}}" width="350px"  alt="computer">
                        </div>


                    </div>
                </div>
            </div>

            <!-- carousel 2 -->
            <div class="carousel-item">
                <div class="container py-3">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-sm-8 col-xm-8 p-4">
                            <h1 style=" font-weight: 400" class="display-3 text-b">Services</h1><br>
                            <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif;  color: #004AAD;">
                                <ul>
                                    <li>Ask queries and Get Answers</li><br>
                                    <li>Platform to collaborate & Learn modern concepts</li><br>
                                    <li>Up-to-date Yourself with Emerging Technologies</li><br>
                                    <div><button href="question"
                                            class="mt-4 btn btn-warning border border-dark rounded-5">Ask a
                                            Question</button></div>
                                </ul>
                            </h4>
                        </div>

                        <div class="col-lg-4  col-md-4  p-3">
                            <img src="{{asset('/pics/robot-vector.jpg')}}" width="340px"  alt="ai robot">
                            
                        </div>
                       
                    </div>

                </div>
            </div>

            <!-- carousel 3 -->
            <div class="carousel-item">
                <div class="container py-5" style=" font-family: 'Tomorrow', sans-serif;">

                    <div class=" d-flex justify-content-center align-items-center flex-column ">
                        <h1 style="color: saddlebrown; font-weight: 400;" class="display-3  text-center">Agenda</h1>
                        <button style="font-size: x-large;"
                            class=" btn btn-warning display border border-dark mt-2 rounded-5" href="communities">Join
                            Communities</button><br><br>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-3 text-center py-4 br">
                            <h1 class="text-b">01</h1>
                            <h2 class="fs-3" >Personal Problems</h2>
                        </div>

                        <div class="col-lg-3 text-center py-4 br">
                            <h1 class="text-b">02</h1>
                            <h2 class="fs-3">Advancement &nbsp; in &nbsp; AI</h2>
                        </div>

                        <div class="col-lg-3 text-center py-4 br">
                            <h1 class="text-b">03</h1>
                            <h2 class="fs-3">Business Goals</h2>
                        </div>

                        <div class="col-lg-3 text-center py-4">
                            <h1 class="text-b">04</h1>
                            <h2 class="fs-3">What's Next</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <button class="carousel-control-prev border-0 bg-transparent" type="button" data-bs-target="#carousel1"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next border-0 bg-transparent " type="button" data-bs-target="#carousel1"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>

    </div>


    <!------------------------Main Section -------------------------------->
    <div class="container-fluid bg-dark  ">
        <h2 class=" fs-1 text-warning text-center p-4">Revolutionizing the way<br> we perceive the world.</h2>


        <div class="container">
            <div class="gx-4 row pb-5">

                <div class="col-lg-6 col-sm-12 col-md-12  d-flex justify-content-center align-items-center flex-column">
                    <svg class="svg-icon " style="font-size:4rem; width: 5em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M919.309673 504.73887l-27.31052-23.842518a257.860439 257.860439 0 1 0-443.470824-236.907923l-34.969026-9.537007a294.057715 294.057715 0 1 1 505.75037 270.287448z" fill="#0686D8" />
                        <path d="M840.846116 258.366189a456.692584 456.692584 0 0 0-62.062796-195.075143l30.850773-19.001764a492.311861 492.311861 0 0 1 67.264799 210.825655z" fill="#0686D8" />
                        <path d="M562.683412 240.809426l-36.125026-4.624003a485.592606 485.592606 0 0 1 65.025047-192.112891l31.212023 19.001764a450.33458 450.33458 0 0 0-60.112044 177.73513z" fill="#0686D8" />
                        <path d="M679.150497 36.052776h36.269527v202.444649H679.150497z" fill="#0686D8" />
                        <path d="M910.061667 293.768715h63.146546v36.269527h-63.146546z" fill="#0686D8" />
                        <path d="M463.77309 162.707119h476.561349v36.269527H463.77309z" fill="#0686D8" />
                        <path d="M884.846398 424.902561h50.502787v36.269527h-50.502787z" fill="#0686D8" />
                        <path d="M296.297467 36.052776m-15.606011 0a15.606011 15.606011 0 1 0 31.212022 0 15.606011 15.606011 0 1 0-31.212022 0Z" fill="#5FB0E5" />
                        <path d="M173.400127 65.458548a27.16602 27.16602 0 1 1-27.02152-27.16602A27.16602 27.16602 0 0 1 173.400127 65.458548z" fill="#5FB0E5" />
                        <path d="M92.263318 202.516898m-10.187258 0a10.187257 10.187257 0 1 0 20.374515 0 10.187257 10.187257 0 1 0-20.374515 0Z" fill="#5FB0E5" />
                        <path d="M343.765752 212.704156A10.187257 10.187257 0 1 1 333.578494 202.300148a10.187257 10.187257 0 0 1 10.187258 10.404008zM269.059197 180.625132a20.591265 20.591265 0 1 1-20.519015-20.591265A20.519015 20.519015 0 0 1 269.059197 180.625132zM97.537571 283.220207h716.720525a47.685035 47.685035 0 0 1 47.685035 47.685035v435.378819H49.852537V330.905242a47.685035 47.685035 0 0 1 47.685034-47.685035z" fill="#5FB0E5" />
                        <path d="M880.077895 784.418825H31.790023V322.524236a57.800042 57.800042 0 0 1 57.366542-57.800042h71.383053v36.125026h-71.383053a21.169266 21.169266 0 0 0-21.169265 21.169266v425.625062H843.880618V322.524236a21.169266 21.169266 0 0 0-21.169265-21.169265h-534.650392v-36.125027h534.650392a57.800042 57.800042 0 0 1 57.366542 57.800043z" fill="#0686D8" />
                        <path d="M182.792634 265.085444h65.675298v36.269527H182.792634z" fill="#0686D8" />
                        <path d="M93.925069 330.471742h724.884781v381.55253H93.925069z" fill="#FFFFFF" />
                        <path d="M333.578494 839.473365h244.638679v144.861356H333.578494z" fill="#D2E9F7" />
                        <path d="M333.578494 839.473365h244.638679v72.394553H333.578494z" fill="#9ECFEF" />
                        <path d="M596.424187 1002.469484H315.443731v-181.130882h280.980456z m-244.710929-36.125026h208.441402v-108.37508H351.713258z" fill="#0686D8" />
                        <path d="M49.852537 748.510548h812.090594v61.340295a48.335285 48.335285 0 0 1-48.335285 48.335286h-715.275524a48.335285 48.335285 0 0 1-48.479785-48.263036v-61.412545z" fill="#FFFFFF" />
                        <path d="M813.680096 876.320892h-715.275524a66.470049 66.470049 0 0 1-66.614549-66.397799v-79.475058h848.287872v79.475058a66.470049 66.470049 0 0 1-66.397799 66.397799zM67.9873 766.645312v43.350031a30.200522 30.200522 0 0 0 30.200522 30.128272h715.275524a30.200522 30.200522 0 0 0 30.200522-30.128272v-43.350031z" fill="#0686D8" />
                        <path d="M286.03796 968.87321h342.971001v36.269526H286.03796z" fill="#0686D8" />
                        <path d="M280.619206 390.439286h491.372609v36.269527H280.619206z" fill="#0686D8" />
                        <path d="M280.619206 474.682848h491.372609v36.269526H280.619206z" fill="#0686D8" />
                        <path d="M144.933606 558.926409h627.058209v36.269527H144.933606z" fill="#0686D8" />
                        <path d="M144.933606 643.169971h627.058209v36.269527H144.933606z" fill="#0686D8" />
                        <path d="M241.676427 509.868623L231.200169 485.159105h-48.263035l-10.620758 24.709518h-27.23827l49.563537-114.588583h24.709518l49.563536 114.588583z m-34.607775-80.486559l-14.450011 33.307275h28.900021z" fill="#0686D8" />
                    </svg>
                    <h3 class="text-warning text-center">Public AI Discuss Board</h3>
                    <p class="text-white text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptates vel enim doloribus alias, culpa unde facere distinctio repudiandae delectus vero?Lorem ipsum dolor sit amet.
                        <br>
                        <button class="bg-warning text-dark btn rounded-6 m-2">Join Community</button>
                    </p>
                </div>

                <div class="col-lg-6 col-sm-12 col-md-12 d-flex justify-content-center align-items-center flex-column">
                    <svg class="svg-icon m-2" style="font-size: 4rem; width: 5em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M859.2 352c40 0 72-32 72-72 0 39.76-32.24 72-72 72zM787.2 280c0 40 32 72 72 72-39.76 0-72-32.24-72-72zM424.592 500.864c16.976 25.056 44.448 42.56 76.608 45.792-31.856-3.232-59.504-20.64-76.608-45.792zM859.2 208c39.76 0 72 32.24 72 72 0-40-32-72-72-72z" fill="#E8E8E8" />
                        <path d="M859.2 406.4c81.632 0 149.792 66.464 162.512 153.28 1.456-15.696 2.288-31.584 2.288-47.68 0-88.08-22.256-170.976-61.44-243.36 0.4 3.728 0.64 7.52 0.64 11.36 0 57.6-46.4 104-104 104s-104-46.4-104-104 46.4-104 104-104c17.984 0 34.864 4.528 49.584 12.496C814.912 73.472 672.048 0 512 0S209.088 73.472 115.216 188.496C129.936 180.528 146.816 176 164.8 176c57.6 0 104 46.4 104 104s-46.4 104-104 104-104-46.4-104-104c0-3.84 0.24-7.632 0.64-11.36C22.256 341.024 0 423.92 0 512c0 16.096 0.832 31.984 2.288 47.68 12.72-86.816 80.88-153.28 162.512-153.28 89.6 0 161.6 80 163.2 179.2H5.344C41.04 833.488 254.24 1024 512 1024s470.96-190.512 506.656-438.4H694.4c1.6-99.2 75.2-179.2 164.8-179.2z m-347.2-104c76.8 0 137.6 62.4 137.6 137.6s-62.4 137.6-137.6 137.6-137.6-62.4-137.6-137.6 60.8-137.6 137.6-137.6zM731.2 848H292.8C296 715.2 392 609.6 512 609.6S728 715.2 731.2 848z" fill="#E8E8E8" />
                        <path d="M522.8 546.656c32.144-3.232 59.632-20.736 76.608-45.792-17.104 25.152-44.752 42.56-76.608 45.792zM859.2 208c-40 0-72 32-72 72 0-39.76 32.24-72 72-72zM452.656 354.256c-25.008 16.976-42.48 44.432-45.712 76.528 3.232-31.792 20.592-59.424 45.712-76.528z" fill="#E8E8E8" />
                        <path d="M419.088 491.808c0.448 0.832 0.992 1.6 1.456 2.432 1.248 2.16 2.496 4.336 3.888 6.4 0.048 0.08 0.112 0.144 0.176 0.224 17.088 25.152 44.752 42.56 76.608 45.792 3.536 0.352 7.136 0.544 10.784 0.544s7.248-0.192 10.8-0.544c31.856-3.232 59.504-20.64 76.608-45.792 0.048-0.08 0.112-0.144 0.176-0.224 1.392-2.064 2.64-4.24 3.888-6.4 0.464-0.816 1.008-1.6 1.456-2.432 0.848-1.584 1.568-3.248 2.336-4.864 0.704-1.472 1.472-2.912 2.112-4.416 0.496-1.168 0.864-2.4 1.312-3.6 0.768-2.032 1.568-4.032 2.224-6.112 0.288-0.912 0.464-1.872 0.72-2.8 0.672-2.4 1.344-4.8 1.856-7.264 0.256-1.216 0.368-2.48 0.576-3.728 0.368-2.224 0.784-4.416 1.008-6.672 0.352-3.52 0.544-7.104 0.544-10.72 0-57.6-48-105.6-105.6-105.6-3.616 0-7.184 0.192-10.72 0.544-2.272 0.224-4.496 0.64-6.72 1.024-1.216 0.208-2.48 0.32-3.68 0.56-2.496 0.512-4.912 1.2-7.344 1.872-0.896 0.256-1.84 0.432-2.72 0.704-2.112 0.656-4.16 1.472-6.224 2.256-1.168 0.448-2.368 0.8-3.504 1.28-1.536 0.64-2.976 1.424-4.48 2.128-1.616 0.768-3.248 1.472-4.816 2.32-0.848 0.448-1.632 0.992-2.448 1.472-2.16 1.248-4.304 2.48-6.368 3.872-0.112 0.08-0.208 0.16-0.32 0.24-25.104 17.088-42.48 44.72-45.712 76.528-0.368 3.52-0.56 7.12-0.56 10.768 0 3.616 0.192 7.2 0.544 10.72 0.224 2.256 0.64 4.464 1.008 6.672 0.208 1.232 0.32 2.496 0.576 3.728 0.496 2.464 1.184 4.864 1.856 7.264 0.256 0.928 0.432 1.888 0.72 2.8 0.64 2.08 1.456 4.096 2.224 6.112 0.448 1.2 0.832 2.432 1.312 3.6 0.64 1.504 1.408 2.944 2.112 4.416 0.768 1.648 1.472 3.312 2.336 4.896z" fill="#FAD97F" />
                        <path d="M512 577.6c75.2 0 137.6-62.4 137.6-137.6s-60.8-137.6-137.6-137.6-137.6 62.4-137.6 137.6 62.4 137.6 137.6 137.6z m-98.688-98.688c-0.768-2.032-1.568-4.032-2.224-6.112-0.288-0.912-0.464-1.872-0.72-2.8-0.672-2.4-1.344-4.8-1.856-7.264-0.256-1.216-0.368-2.48-0.576-3.728-0.368-2.224-0.784-4.416-1.008-6.672a107.818 107.818 0 0 1-0.544-10.72c0-3.648 0.192-7.248 0.544-10.8 3.232-32.112 20.704-59.552 45.712-76.528 0.112-0.08 0.208-0.16 0.32-0.24 2.048-1.392 4.208-2.624 6.368-3.872 0.832-0.48 1.616-1.024 2.448-1.472 1.568-0.848 3.216-1.552 4.816-2.32 1.488-0.704 2.944-1.488 4.48-2.128 1.136-0.48 2.336-0.848 3.504-1.28 2.064-0.784 4.096-1.6 6.224-2.256 0.896-0.272 1.824-0.448 2.72-0.704 2.432-0.672 4.864-1.36 7.344-1.872 1.216-0.24 2.464-0.352 3.68-0.56 2.224-0.368 4.448-0.784 6.72-1.024 3.552-0.368 7.12-0.56 10.736-0.56 57.6 0 105.6 48 105.6 105.6 0 3.616-0.192 7.2-0.544 10.72-0.224 2.256-0.64 4.464-1.008 6.672-0.208 1.232-0.32 2.496-0.576 3.728-0.496 2.464-1.184 4.864-1.856 7.264-0.256 0.928-0.432 1.888-0.72 2.8-0.64 2.08-1.456 4.096-2.224 6.112-0.448 1.2-0.832 2.432-1.312 3.6-0.64 1.504-1.408 2.944-2.112 4.416-0.768 1.632-1.488 3.296-2.336 4.864-0.448 0.832-0.992 1.6-1.456 2.432-1.248 2.16-2.496 4.336-3.888 6.4-0.048 0.08-0.112 0.144-0.176 0.224-16.976 25.056-44.448 42.56-76.608 45.792-3.536 0.384-7.136 0.576-10.784 0.576s-7.248-0.192-10.8-0.544c-32.144-3.232-59.632-20.736-76.608-45.792-0.048-0.08-0.112-0.144-0.176-0.224-1.392-2.064-2.64-4.24-3.888-6.4-0.464-0.816-1.008-1.6-1.456-2.432-0.848-1.584-1.568-3.248-2.336-4.864-0.704-1.472-1.472-2.912-2.112-4.416-0.48-1.184-0.864-2.416-1.312-3.616z" fill="" />
                        <path d="M512 641.6c-91.2 0-168 75.2-184 174.4h368c-16-99.2-92.8-174.4-184-174.4z" fill="#FAD97F" />
                        <path d="M512 609.6c-120 0-216 105.6-219.2 238.4h438.4C728 715.2 632 609.6 512 609.6zM328 816c16-99.2 92.8-174.4 184-174.4s168 75.2 184 174.4H328z" fill="" />
                        <path d="M164.8 208c-40 0-72 32-72 72s32 72 72 72 72-32 72-72-32-72-72-72z" fill="#FFFFFF" />
                        <path d="M164.8 384c57.6 0 104-46.4 104-104s-46.4-104-104-104c-17.984 0-34.864 4.528-49.584 12.496a103.69 103.69 0 0 0-53.76 80.144A102.408 102.408 0 0 0 60.8 280c0 57.6 46.4 104 104 104z m0-32c-40 0-72-32-72-72s32-72 72-72 72 32 72 72-32 72-72 72z" fill="" />
                        <path d="M164.8 438.4c-62.4 0-115.2 49.6-129.6 115.2h257.6c-14.4-65.6-65.6-115.2-128-115.2z" fill="#FFFFFF" />
                        <path d="M164.8 406.4c-81.632 0-149.792 66.464-162.512 153.28C1.04 568.16 0.144 576.768 0 585.6h328c-1.6-99.2-73.6-179.2-163.2-179.2z m0 32c62.4 0 113.6 49.6 128 115.2H35.2c14.4-65.6 67.2-115.2 129.6-115.2z" fill="" />
                        <path d="M859.2 280m-72 0a72 72 0 1 0 144 0 72 72 0 1 0-144 0Z" fill="#FFFFFF" />
                        <path d="M755.2 280c0 57.6 46.4 104 104 104s104-46.4 104-104c0-3.84-0.24-7.632-0.64-11.36-3.744-34.752-24.464-64.288-53.76-80.144C894.064 180.528 877.184 176 859.2 176c-57.6 0-104 46.4-104 104z m104 72c-40 0-72-32-72-72s32-72 72-72 72 32 72 72-32 72-72 72z" fill="" />
                        <path d="M860 435.648c-0.288 0-0.56-0.048-0.832-0.048-63.744 0-119.104 52-134.208 120.784h268.416a180.48 180.48 0 0 0-3.264-12.64c-18.48-62.112-69.136-107.68-130.112-108.096z" fill="#FFFFFF" />
                        <path d="M1021.712 559.68c-12.72-86.816-80.88-153.28-162.512-153.28-89.6 0-163.2 80-164.8 179.2H1024c-0.144-8.832-1.04-17.44-2.288-25.92z m-295.088-3.28h-1.664c15.104-68.784 70.464-120.784 134.208-120.784 0.288 0 0.56 0.048 0.832 0.048 60.976 0.416 111.632 45.984 130.112 108.112a180.48 180.48 0 0 1 3.264 12.64H726.624v-0.016z" fill="" />
                    </svg>
                    
                    <h3 class="text-warning text-center">Collaborate with teams</h3>
                    <p class="text-white text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem
                        quod perspiciatis qui, corporis sapiente tempora consequatur similique a iste placeat. Lorem ipsum dolor sit amet. <br>
                        <button class="bg-warning text-dark btn rounded-6 m-2">Join or Create Team</button>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!--------------------------------Reveiws Section----------------------------------->
    <div class="contianer mx-0 my-5 ">

        <h2 class="saddlebrown text-center my-5 fs-1">Testimonials</h2>

        <div class="row mx-0 g-4 justify-content-center">

            <div class="col-lg-3 col-md-6 col-sm-10 col-xm-8 border border-dark mx-2 p-4">
                <h4>John</h4>
                <h6 class="text-secondary">HR Manager</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem saepe consectetur eius voluptas optio
                    cupiditate dolorem corporis itaque reiciendis veniam illo maiores consequuntur impedit, culpa
                    officiis harum eos velit? Sunt repellendus magnam officia consequatur cumque perferendis at tenetur,
                    doloribus nihil inventore eius delectus impedit quis officiis voluptates temporibus suscipit nobis
                    eaque doloremque aut facere ducimus, natus maiores numquam! Voluptatem ab quidem similique ullam at
                    libero necessitatibus iure facilis modi numquam vero minus officiis inventore officia neque,
                    reiciendis non! Reprehenderit consequuntur dicta adipisci voluptates dolore sunt sapiente minus.
                    Porro, consequuntur quisquam.</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-10 col-xm-8 border border-dark mx-2 p-4 ">
                <h4>Momina</h4>
                <h6 class="text-secondary">Developer</h6>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus eveniet beatae obcaecati quas
                    molestias nulla eaque tempore vero alias inventore! Earum quod ad dolore voluptate rerum tenetur
                    repellendus unde dolorum, deserunt, possimus explicabo, blanditiis repellat ipsum fugiat modi culpa
                    ex aliquam error? Enim magni distinctio voluptates corrupti veritatis eveniet tempora voluptatem ab
                    libero voluptatibus minima facilis nihil minus deserunt in praesentium, inventore facere ipsa! Sequi
                    ipsa illum obcaecati distinctio explicabo assumenda saepe quam libero cupiditate quia, ut voluptatum
                    sed itaque sint dicta vitae aut tempora et veritatis minus. Repellat, accusamus.</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-10 col-xm-8 border border-dark mx-2 p-4">
                <h4>Olesia</h4>
                <h6 class="text-secondary">Tester</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, distinctio numquam molestias quod
                    minus aliquid aliquam rerum, veniam architecto tempore aperiam vel magnam esse ex sint. Id cumque
                    quisquam delectus quis numquam, minus nihil officiis minima similique illum, excepturi, iusto totam.
                    Neque porro perferendis natus similique placeat quos modi ut eveniet! Incidunt laborum similique
                    atque officiis, dolore distinctio perferendis necessitatibus iusto veritatis fugiat nobis error
                    velit laudantium molestiae doloremque maiores unde accusantium quia corporis tenetur quo?
                    Perferendis quod aliquam et minima labore quo at laboriosam vitae magnam, nesciunt totam animi.</p>
            </div>

        </div>
    </div>
</x-app-layout>
  @endsection
