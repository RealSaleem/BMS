 @php
 $banquet = Auth::user()->banquet->first();
 @endphp 

 <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down " src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
            <li>
                <a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Dashboard</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Banquet Management</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="{{route('booking.create')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Booking</span></a>
                        </li>
                       
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">User Management</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="JavaScript:void(0)" class="collapsible-header waves-effect waves-cyan "><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice List">User</span></a>
                        <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="{{route('user.index')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">User</span></a></li>
                        <li><a href="{{route('role.index')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Role</span></a></li>
                    
                    </ul>
</div>
                    </li>
                        <!-- <li><a href="app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice View">Invoice View</span></a>
                        </li>
                        <li><a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Invoice Edit</span></a>
                        </li>
                        <li><a href="app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Invoice Add</span></a>
                        </li> -->
                    </ul>
                </div>
            </li>
           
          
      
         
            
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
         <!-- <section class="sidebar" id="sidebar-scroll">
            
            <ul class="sidebar-menu">
                
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
            
                <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Banquet Management </span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="{{route('booking.create')}}"><i class="icon-arrow-right"></i> Booking</a></li>


                    </ul>
                </li>
                   <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> User Management</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> User</a>
                        <ul class="treeview-menu">
                           <li><a class="waves-effect waves-dark" href="{{route('user.index')}}">User</a></li>
                        <li><a class="waves-effect waves-dark" href="{{route('role.index')}}"> Roles</a></li>


                    </ul>
                        </li>


                    </ul>
                </li>

         
            </ul>
         </section> -->
      </aside>