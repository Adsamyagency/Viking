<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <img class="d-block d-md-none" src="{{ asset('Assets/images/logo.png') }}" alt="logo" width="100px">
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <div class="d-md-flex align-items-center justify-content-between w-100 f-rocker">
                    <div class="d-md-flex text-md-left text-center align-items-center justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">{{ __('messages.Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yachts">{{ __('messages.Yachts') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#yachts">{{ __('messages.Event') }}</a>
                        </li>
                    </div>
                    <img class="d-lg-block d-none" src="{{ asset('Assets/images/logo.png') }}" alt="logo"
                        width="150px">
                    <div class="d-md-flex text-md-left text-center align-items-center justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" href="#yachts">{{ __('messages.water') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('messages.About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('messages.Contact') }}</a>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
