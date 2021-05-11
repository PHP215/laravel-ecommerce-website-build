 <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                    <i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-shopping-cart"></i>Products</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cards.html">Add <span class="badge badge-secondary">Product</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/manage-products">Manage Products</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-controls="submenu-2" aria-expanded="false">
                                    <i class="fa fa-fw fa-user-circle"></i>Change Profile Picture <span class="badge badge-success">6</span>
                                </a>
                                <div class="profile-dropdown dropdown-menu mt-0 ">
                                    
                                    <div class="container">
                                        <form action="/profile-picture" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" name="image" class="form-control"><br>
                                            <input type="submit" class="btn btn-primary btn-sm" value="Update">
                                        </form>
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->