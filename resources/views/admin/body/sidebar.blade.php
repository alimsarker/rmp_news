
<style>


    /* Default styles for all menu items */
.vertical-menu a {
    color: #dcdcdc !important; /* Light text */
    text-decoration: none;
}

/* Hover effect for all menu items */
.vertical-menu a:hover {
    color: white !important;
}

/* Special hover effect for Dashboard and Website */
.vertical-menu a[href*="dashboard"]:hover,
.vertical-menu a[href*="alimsarker"]:hover {
    background-color: #6c757d !important; /* Slightly lighter dark */
    color: white !important; /* White text */
    border-radius: 5px; /* Optional: rounded corners */
    padding: 5px 10px; /* Optional: spacing */
    transition: all 0.3s ease-in-out; /* Smooth hover effect */
}

</style>
<div class="vertical-menu">

<div data-simplebar class="h-100">

   

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
           

            <li>
                <a href="{{ route('dashboard') }}" class="has-arrow waves-effect">
                    <i class="menu-icon fa fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="https://alimsarker.com" class="has-arrow  waves-effect">
                    <i class="menu-icon  fa fa-fw fa-globe"></i>
                    <span>Website</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="menu-icon fa fa-fw fa-user"></i>
                    <span>Profile Settings</span>
                </a>
               
            </li>

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                            <li><a href="layouts-preloader.html">Preloader</a></li>
                            <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                            <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                            <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                            <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                            <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->



            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Users</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">Users List </a></li>
                    <li><a href="tables-datatable.html">Blocked Users </a></li>
                    <li><a href="tables-responsive.html">Add New User </a></li>
                   
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Role</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">Role List </a></li>
                    <li><a href="tables-responsive.html">Add New User </a></li>
                   
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Permission</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html"> Permission List </a></li>
                    <li><a href="tables-responsive.html">  Add New Permission </a></li>
                   
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>News</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">    Add New News </a></li>
                    <li><a href="tables-responsive.html">   All News </a></li>
                    <li><a href="tables-responsive.html">   Published News</a></li>
                    <li><a href="tables-responsive.html">   Unpublished News</a></li>
                    <li><a href="tables-responsive.html">   Locked News </a></li>

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>News Category</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">     Add New category </a></li>
                    <li><a href="tables-responsive.html">     All categories</a></li>

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Slogans</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">       Add New Slogan </a></li>
                    <li><a href="tables-responsive.html">       All Slogans </a></li>
                    <li><a href="tables-responsive.html">       Published Slogan</a></li>
                    <li><a href="tables-responsive.html">     Unpublished Slogan</a></li>
                 

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Notices</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Notice</a></li>
                    <li><a href="tables-responsive.html">    All Notice </a></li>
                    <li><a href="tables-responsive.html">    Published Notice</a></li>
                    <li><a href="tables-responsive.html">   Unpublished Notice</a></li>
                 

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>APAMS</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">       All APAMS</a></li>
                    <li><a href="tables-responsive.html">      Add New APAMS</a></li>
                 

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Tenders</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">   Create Tender </a></li>
                    <li><a href="tables-responsive.html">    All Tenders  </a></li>
                 

                </ul>
            </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>NOC</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New NOC</a></li>
                    <li><a href="tables-responsive.html">    All NOC </a></li>
                 

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Download Corner</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New File</a></li>
                    <li><a href="tables-responsive.html">   All Downloadable Files </a></li>
                 

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Designation</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Designation</a></li>
                    <li><a href="tables-responsive.html">    Designation List </a></li>
                 

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Officers</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Officers</a></li>
                    <li><a href="tables-responsive.html">    All New Officers </a></li>
                    <li><a href="tables-responsive.html">    Officers List</a></li>

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Gallery</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Gallery</a></li>
                    <li><a href="tables-responsive.html">    Gallery List </a></li>

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Commissioner</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Commissioner Speech</a></li>
                    <li><a href="tables-responsive.html">     Commissioner Speechs </a></li>
                 

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>FAQ</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New FAQ</a></li>
                    <li><a href="tables-responsive.html">    FAQ List </a></li>
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Complaints</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  List</a></li>
                    <li><a href="tables-responsive.html"> Archives</a></li>
                 

                </ul>
            </li>




            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Informations</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                <li><a href="tables-basic.html">  List</a></li>
                <li><a href="tables-responsive.html"> Archives</a></li>
                 

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon fa fa-fw fa-file-alt"></i>
                    <span>SMS</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html"> Logs</a></li>
                    <li><a href="tables-responsive.html"> Send</a></li>
                 

                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Police Station</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Police Station</a></li>
                    <li><a href="tables-responsive.html">Police Stations </a></li>
                 

                </ul>
            </li>



            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Important Links</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add Links</a></li>
                    <li><a href="tables-responsive.html">All Links</a></li>
                 

                </ul>
            </li>


            
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Division</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Division </a></li>
                    <li><a href="tables-responsive.html">All Division </a></li>
                 

                </ul>
            </li>


            
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Thana </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Thana </a></li>
                    <li><a href="tables-responsive.html">All  Thanas </a></li>
                 

                </ul>
            </li>


            
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Beat Officers </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add Beat Officers  </a></li>
                    <li><a href="tables-responsive.html">All Beat Officers </a></li>
                 

                </ul>
            </li>


            
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Units </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add New Units </a></li>
                    <li><a href="tables-responsive.html">All Units </a></li>
                 

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Contact Info </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add new contact </a></li>
                    <li><a href="tables-responsive.html">All contact </a></li>
                 

                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Send SMS </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">     Send Message </a></li>
                 
                 

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Group SMS </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add Group </a></li>
                    <li><a href="tables-responsive.html">All Groups </a></li>
                    <li><a href="tables-responsive.html">Send Group SMS</a></li>

                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="menu-icon  fa fa-fw fa-paw"></i>
                    <span>Group Contact </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">  Add Contact  </a></li>
                    <li><a href="tables-responsive.html">All Contact </a></li>
                 

                </ul>
            </li>




        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>