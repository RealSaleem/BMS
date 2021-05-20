 @php
 $banquet = Auth::user()->banquet->first();
 @endphp 

     <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
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
         </section>
      </aside>