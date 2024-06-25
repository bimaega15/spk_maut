 <!-- Sidebar -->

 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
         <div class="sidebar-brand-icon">
             <link rel="shortcut icon" href="assets/image/ikasari.png">
             <img src="assets/image/ikasari.png" alt="" height="50px" width="50px">

             <!-- icon ni -->
         </div>
         <div class="sidebar-brand-text mx-3">SMK IKASARI PEKANBARU</div>
     </a>

     <!-- Divider ini garis guys -->
     <hr class="sidebar-divider ">


     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>
     <!-- Divider ini garis guys -->
     <hr class="sidebar-divider ">

     <!-- query menu untuk tampilan menu yang boleh diakses-->
     <?php

        $role_id = $this->session->userdata('role_id');
        //join 2 atau lebih tabel my sql asc menurut naik

        $queryMenu = "SELECT `user_menu`.`id`,`menu`
                   FROM `user_menu` JOIN `user_access_menu`
                       ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                   WHERE `user_access_menu`.`role_id` = $role_id
               ORDER BY `user_access_menu`.`menu_id` ASC 
                   
                   ";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>
     <!-- looping menu -->

     <?php foreach ($menu as $m) : ?>
     <div class="sidebar-heading">
         <?php echo $m['menu']; ?>
     </div>

     <!-- SIAPKAN SUB-MENU SESUAI MENU  menu dan sub menu
atau bisa langsung aja buat
SELECT * FROM `user_sub_menu`
WHERE `menu_id ` = $menuId
AND `is_active` =1
-->
     <?php

            $menuId = $m['id'];
            $querySubmenu = "SELECT *
                   FROM  `user_sub_menu` JOIN `user_menu`
                       ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                   WHERE `user_sub_menu`.`menu_id` =  $menuId
                       AND `user_sub_menu`.`is_active`=1
";

            $subMenu = $this->db->query($querySubmenu)->result_array();
            ?>

     <?php foreach ($subMenu as $sm) : ?>
     <?php if ($tittle == $sm['title']) : ?>
     <li class="nav-item active">
         <?php else : ?>
     <li class="nav-item ">
         <?php endif; ?>
         <a class="nav-link" href="<?php echo base_url($sm['url']); ?>">
             <i class="<?php echo $sm['icon']; ?>"></i>
             <span><?php echo $sm['title']; ?></span></a>
     </li>
     <?php endforeach; ?>
     <hr class="sidebar-divider ">

     <?php endforeach; ?>


     <!-- Divider ini garis guys -->


     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
             <i class="fas fa-fw fa-sign-out-alt "></i>
             <span>Keluar</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>

 <!-- End of Sidebar -->