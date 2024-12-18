<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar no-padding">
  <div class="position-sticky">
    <ul class="nav flex-column">

      <!-- Loại phòng li -->
      <?php
      if (isset($_GET['loaiphong'])) {
      ?>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?loaiphong">
            QL Loại Phòng
          </a>
        </li>
      <?php
      } else { ?>
        <li class="nav-item color-gray">
          <a class="nav-link color-gray" href="index.php?loaiphong">
            QL Loại Phòng
          </a>
        </li>
      <?php
      }
      ?>

      <!-- Loại phòng li -->
      <?php
      if (isset($_GET['phong'])) {
      ?>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?phong">
            QL Phòng
          </a>
        </li>
      <?php
      } else { ?>
        <li class="nav-item color-gray">
          <a class="nav-link color-gray" href="index.php?phong">
            QL Phòng
          </a>
        </li>
      <?php
      }
      ?>


      <!-- Dịch vụ li -->
      <?php
      if (isset($_GET['dichvu'])) {
      ?>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?dichvu">
            QL Dịch Vụ
          </a>
        </li>
      <?php
      } else { ?>
        <li class="nav-item">
          <a class="nav-link color-gray" href="index.php?dichvu">
            QL Dịch Vụ
          </a>
        </li>
      <?php
      }
      ?>

      <!-- Quản lý nhân viên li -->
      <?php
      if (isset($_GET['taikhoan'])) {
      ?>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?taikhoan">
            Quản lý nhân viên
          </a>
        </li>
      <?php
      } else { ?>
        <li class="nav-item">
          <a class="nav-link color-gray" href="index.php?taikhoan">
            Quản lý nhân viên
          </a>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</nav>