  <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">

      <ul class="list-group">
          <a class="text-light d-flex align-items-center mx-auto my-3" href="index.php">
              <img src="asset/images/logo-dark.png" alt="" class="pr-2">
              <span class="color-1" style="
                            font-size: 1.5em;
                            font-weight: 700;
                        ">Smart</span>
          </a>


          <a href="admin.php" class="btn-cust text-center text-white mb-3 w-75 mx-auto">
              <i class="fas fa-plus"></i>
              <span>Tạo đơn</span>
          </a>
          <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start collapsed">
              <div class="d-flex w-100 justify-content-start align-items-center">
                  <span class="fas fa-history fa-fw mr-3"></span>
                  <span class="menu-collapsed">Quản lý đơn hàng</span>
                  <span class="submenu-icon ml-auto"></span>
              </div>
          </a>
          <!-- Submenu content -->
          <div id="submenu1" class="sidebar-submenu collapse" style="">
              <a href="order.php" class="list-group-item list-group-item-action">
                  <span class="menu-collapsed">Tất cả đơn hàng</span>
              </a>
          </div>
          <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start collapsed">
              <div class="d-flex w-100 justify-content-start align-items-center">
                  <span class="fa fa-user fa-fw mr-3"></span>
                  <span class="menu-collapsed">Quản lý shipper</span>
                  <span class="submenu-icon ml-auto"></span>
              </div>
          </a>
          <!-- Submenu content -->
          <div id="submenu2" class="sidebar-submenu collapse" >
              <a href="shipper.php" class="list-group-item list-group-item-action">
                  <span class="menu-collapsed">Tất cả shipper</span>
              </a>
          </div>
          <a href="map.php" class=" list-group-item list-group-item-action" id="btn-map">
              <div class="d-flex w-100 justify-content-start align-items-center">
                  <span class="fa fa-tasks fa-fw mr-3"></span>
                  <span class="menu-collapsed">Maps</span>
              </div>
          </a>
          <div id="sub-menu-map" class="" >
             
          </div>


      </ul><!-- List Group END-->
  </div><!-- sidebar-container END -->