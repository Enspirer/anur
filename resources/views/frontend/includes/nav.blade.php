<nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" style="background-color: #433A07; height: 70px;">
    <div class="container position-relative">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto left-nav">
                <li class="nav-item">
                    <a class="nav-link p-0 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">News & Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">Contact Us</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto right-nav">
                <li class="nav-item pe-0">
                    <form action="">
                        <div class="input-group">
                            <input type="text" name="search_keyword" class="form-control" aria-label="search" data-bs-toggle="modal" data-bs-target="#exampleModal" placeholder="Search for products..." style="width: 180px;">

                            <button type="submit" class="btn text-white"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="nav-item pe-0">
                    <button class="btn our">Our Outlets</button>
                </li>
                <li class="nav-item pe-0">
                    <button class="btn buy">Buy Online<i class="fas fa-shopping-cart ms-2"></i></button>
                </li>
            </ul>

        </div>

        <div class="logo position-absolute">
            <a href="{{ route('frontend.index') }}">
                <img src="{{ url('img/logo.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
</nav>



@push('after-scripts')

    <script>
        $(document).ready(function(){

            $(".navbar-toggler").click(function(){
                if($('.navbar-collapse').hasClass('show')) {
                    alert('dfsf');
                }
            });
        });
    </script>

@endpush