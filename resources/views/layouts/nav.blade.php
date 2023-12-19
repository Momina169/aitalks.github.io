
    <!---------------NavBar------------->



    <nav class="navbar navbar-expand-lg navbar-collapse-sm  p-2 mr-5  ">
       

            <a class="navbar-brand" href="#"> <img src="pics/logo.jpg" alt="ai talks" width="200px"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link a " href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  a" href="{{route('discussview')}}">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a" href="{{route('communities')}}">Communities</a>
                    </li>
                    <li class="nav-item a dropdown">
                        <a class="nav-link a dropdown-toggle" data-bs-toggle="dropdown">About
                            us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item a" href="#">Who we are?</a></li>
                            <li><a class="dropdown-item a" href="#">Our Mission</a></li>
                            <li><a class="dropdown-item a" href="#">Our Values</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
       
    </nav>

