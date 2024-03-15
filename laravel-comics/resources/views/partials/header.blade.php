<header >
    <div class="container ">
        <nav class="navbar navbar-expand-sm navbar-light p-2  gap-5">
            
              <div class="">
                <img width="100" src="{{ Vite::asset('resources/image/dc-logo.png') }}" alt="">
            </div>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 gap-4">
                   @foreach ($menuLinks as $element)
                     <li class="active">
                        <a href="">{{$element['name']}}</a>
                     </li>
                   @endforeach

                    <div>
                        <input class="form-control me-2 border-0 rounded-0 search" type="search" placeholder="Search"
                            aria-label="Search">
                        <i class="bi bi-search"></i>
                    </div>

                </ul>

            </div>  
           

        </nav>
    </div>


</header>