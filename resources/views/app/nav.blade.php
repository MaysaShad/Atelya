

<nav class=" navbar navbar-expand-mg navbar-dark bg-info" >
    <div class="container-xl ">
        <div class="h1 text-white text-center fw-bold">
            <a class="text-decoration-none text-white" href="{{ route('home') }}"><i>FASHION BEAUTY</i></a> 
        </div>
        <div> 
            <ul class="nav nav-pills">
            <li class="nav-item h5 fw-bold">
                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">HOME</a>
            </li>
            <li class="nav-item h5 fw-bold">
                <a class="nav-link text-white" href="{{ route('stylies.index') }}">STYLE</a>
            </li>
            <li class="nav-item h5 fw-bold">
                <a class="nav-link text-white" href="{{ route('abouts.index') }}">ABOUT US</a>
            </li>
            <li class="nav-item h5 fw-bold">
                <a class="nav-link text-white " aria-disabled="true" href="{{ route('contacts.index') }}">CONTACT US</a>
            </li>
            </ul>
        </div>
    </div>
</nav>