<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('public/template_code/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>
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
                <a href="{{ route('home') }}" class="toggled waves-effect waves-block">
                    <i class="material-icons">home</i>
                    <span>HOME</span>
                </a>
            </li>
           <li class="{{ (Route::currentRouteName() == 'customerlist') ? 'active' : null }}">
                <a href="{{ route('customerlist') }}" class="toggled waves-effect waves-block">
                    <i class="material-icons">group</i>
                    <span>CUSTOMERS</span>
                </a>
            </li>
            <li class="{{ (Route::currentRouteName() == 'listorder') ? 'active' : null }}">
                <a href="{{ route('listorder') }}" class="toggled waves-effect waves-block">
                    <i class="material-icons">view_list</i>
                    <span>ORDER LIST</span>
                </a>
            </li>
            <li class="{{ (Route::currentRouteName() == 'med_dictionary') ? 'active' : null }}">
                <a href="{{ route('med_dictionary') }}" class="toggled waves-effect waves-block">
                    <i class="material-icons">library_books</i>
                    <span>MED DICTIONARY</span>
                </a>
            </li>
            <li class="{{ (Route::currentRouteName() == 'register' || Route::currentRouteName() == 'userlist') ? 'active' : null }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">person</i>
                    <span>USER MANAGEMENT</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ (Route::currentRouteName() == 'register') ? 'active' : null }}">
                        <a href="{{ route('register') }}">
                            <span>Add</span>
                        </a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'userlist') ? 'active' : null }}">
                        <a href="{{ route('userlist') }}">
                            <span>All Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
        
    </div>
    <!-- #Menu -->
    <!-- Footer -->
   <!--  -->
    <!-- #Footer -->
</aside>
            
           
            
            
           
            
            
           
            

            
           