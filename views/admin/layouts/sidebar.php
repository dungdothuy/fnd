<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header">CHỨC NĂNG CHÍNH</li>
      <li>
        <a href="<?= get_route('users', 'index', 'admin') ?>">
          <i class="fa fa-user-o"></i> <span>Quản lý người dùng</span>
        </a>
      </li>
      <li>
        <a href="<?= get_route('categories', 'index', 'admin') ?>">
          <i class="fa fa-server"></i> <span>Quản lý danh mục sản phẩm</span>
        </a>
      </li>
      <li>
        <a href="<?= get_route('products', 'index', 'admin') ?>">
          <i class="fa fa-coffee"></i> <span>Quản lý sản phẩm</span>
        </a>
      </li>
    </ul>
  </section>
</aside>
