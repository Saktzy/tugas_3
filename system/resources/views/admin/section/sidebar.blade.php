 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Verpe Shop</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ url('public') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Sakti D Putra</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                 role="menu"data-accordion="false">
                 <li class="nav-item">
                     <a href="{{ url('dashboard') }}" class="nav-link active">
                         <i class="nav-icon fas fa-home"></i>
                         <p>
                             DASHBOARD
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ url('produk') }}" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             PRODUK
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ url('kategori') }}" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             KATEGORI
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             PROMO
                         </p>
                     </a>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             MASTER DATA
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Costumer</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Supplier</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
