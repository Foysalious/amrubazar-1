<section class="topbar-pc">
    <div class="container-fluid">
        <div class="row">

            <!-- logo start -->
            <div class="col-md-3 col-3">
                <div class="logo">
                    @foreach( App\Models\Backend\Logo::get() as $logo )
                    <img src="{{ asset('images/logo/'. $logo->image) }}" class="img-fluid" alt=""> 
                    @endforeach               
                </div>            
            </div>
            <!-- logo end -->

            <!-- bar start -->
            <div class="col-1 col-1 for-mob">
                <i class="fas fa-bars show-nav"></i>
                <i class="fas fa-times hide-nav"></i>
            </div>
            <!-- bar end -->

            <!-- my profile start -->
            <div class="col-md-9 col-7">
                <div class="my-profile">
                    <ul>
                        <li>
                            <a href="">
                                <img src="{{ asset('backend/images/user.png') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="user-admin">
                            <p>user admin</p>
                            <div class="profile-dropdown">
                                <ul>
                                    <li>
                                        <a href="">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>            
            </div>
            <!-- my profile end -->

        </div>
    </div>
</section>