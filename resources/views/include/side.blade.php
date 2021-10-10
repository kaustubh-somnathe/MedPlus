<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('public/template_code/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
            <div class="email"></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><!-- <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> --><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    
    <div class="menu">
        <ul class="list">
            
            <li class="{{ (Route::currentRouteName() == 'home') ? 'active' : null }}">
                <a href="#" class="toggled waves-effect waves-block">
                    <i class="material-icons">home</i>
                    <span>HOME</span>
                </a>
            </li>
            <li class="{{ (Route::currentRouteName() == 'View Meds') ? 'active' : null }}">
                <a href="{{route('viewmeds')}}" class="toggled waves-effect waves-block">
                    <i class="material-icons">face</i>
                    <span>View Meds</span>
                </a>
            </li>
           
            
        </ul>
        
    </div>
    <!-- #Menu -->
    <!-- Footer -->
   <!--  -->
    <!-- #Footer -->
</aside>
            
           
            
            
           
            
            
           
            

            
           