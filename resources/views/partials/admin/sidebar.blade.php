
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                   
                  
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                       

                       


                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-file"></i>
                                <span>Header</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('logo')}}"><i class="fa fa-angle-double-right"></i> Logo</a></li>
                                
                                
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-file"></i>
                                <span>Footer</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <!-- <li><a href="{{ route('copy-right') }}"><i class="fa fa-angle-double-right"></i> Copy Right Section</a></li> -->
                                <li><a href="{{route('social')}}"><i class="fa fa-angle-double-right"></i> Social Icon</a></li>
                                
                                
                            </ul>
                        </li>


                         <li class="treeview">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('banner')}}"><i class="fa fa-angle-double-right"></i>Home Banner</a></li>
                                <li><a href="{{route('how-it-works')}}"><i class="fa fa-angle-double-right"></i>How It Works Section</a></li>
                                <li><a href="{{route('benefits')}}"><i class="fa fa-angle-double-right"></i>Benefits</a></li>
                                
                                
                            </ul>
                        </li>


                         <li class="treeview">
                            <a href="">
								<i class="fas fa-tasks"></i>
                                <span>Content Mangement</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('main_cms') }}"><i class="fa fa-angle-double-right"></i>Main</a></li>
                                <li><a href="{{ route('cms') }}"><i class="fa fa-angle-double-right"></i>CMS</a></li>
                                
                                
                            </ul>
                        </li>

                     
                        
                        
                        <li class="treeview">
                            <a href="{{ route('blog-category') }}">
                                <i class="fas fa-blog"></i>
                                <span>Blog</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('blog-category') }}"><i class="fa fa-angle-double-right"></i> Category</a></li>
                                <li><a href="{{ route('ablog') }}"><i class="fa fa-angle-double-right"></i> Blog</a></li>
                                
                            </ul>
                        </li>
                    
                           <li class="treeview">
                            <a href="">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Solutions</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('solution') }}"><i class="fa fa-angle-double-right"></i>Solutions</a></li>
                                <li><a href="{{ route('category') }}"><i class="fa fa-angle-double-right"></i>Category</a></li>
                                 <li><a href="{{ route('sub-category') }}"><i class="fa fa-angle-double-right"></i>Sub-Category</a></li>
                                 <!-- <li><a href="{{ route('detail') }}"><i class="fa fa-angle-double-right"></i>Detail</a></li>  -->
                                
                            </ul>
                        </li>

                               <li class="treeview">
                            <a href="">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Products</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('csc-category') }}"><i class="fa fa-angle-double-right"></i>Category</a></li>
                                <li><a href="{{ route('csc-sub-category') }}"><i class="fa fa-angle-double-right"></i>Sub-Category</a></li>
                                <li><a href="{{ route('csc-detail') }}"><i class="fa fa-angle-double-right"></i>Detail</a></li>

                                
                            </ul>
                        </li>


                               <li class="treeview">
                            <a href="{{ route('admin_reference') }}">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Reference</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('admin_reference') }}"><i class="fa fa-angle-double-right"></i>Reference</a></li>
                                <li><a href="{{ route('sub-reference') }}"><i class="fa fa-angle-double-right"></i>Sub-Refrence</a></li>
                                

                                
                            </ul>
                        </li>




                        <li class="active">
                            <a href="{{ route('anewsletter') }}">
                               <i class="far fa-newspaper"></i> <span>Newsletter</span>
                            </a>
                        </li>
                        
                        <li class="">
                            <a href="{{ route('acodes') }}">
                               <i class="far fa-newspaper"></i> <span>Codes</span>
                            </a>
                        </li>
                        
                        
                        <li class="active">
                            <a href="{{ route('request') }}">
                                <i class="fas fa-quote-left"></i></i> <span>Request A Quote</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('advertisement') }}">
                               <i class="far fa-newspaper"></i> <span>Advertisement</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="{{ route('admin_reference') }}">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Quote</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('aquote') }}"><i class="fa fa-angle-double-right"></i>Tactile Quote</a></li>
                                <li><a href="{{ route('stair-qoute') }}"><i class="fa fa-angle-double-right"></i>Stair Nosing</a></li>
                                <li><a href="{{ route('exit-qoute') }}"><i class="fa fa-angle-double-right"></i>Exit Signs</a></li>

                                
                            </ul>
                        </li>    
                        
                        <li class="">
                            <a href="{{ route('acontact-form') }}">
                               <i class="far fa-newspaper"></i> <span>Contact Form</span>
                            </a>
                        </li>
                  
                
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
