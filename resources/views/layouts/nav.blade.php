  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="{{ route('homepage') }}">
            <img src="{{ asset('img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">ATV SHOP</span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='home' ? 'active bg-gradient-primary' : ''}}" href="{{ route('home') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1 ">Trang chủ</span>
              </a>
            </li>
            @role('admin')
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='manage_user' ? 'active bg-gradient-primary' : ''}}" href="{{ url('/manage_user') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">User</span>
              </a>
            </li>
            @endrole
            @hasanyrole('Manager|admin')
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='manage_order' ? 'active bg-gradient-primary' : ''}}" href="{{ route('manage_order') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Đơn hàng</span>
              </a>
            </li>
            @endhasanyrole
            @hasanyrole('Manager|admin|Staff')
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='category' ? 'active bg-gradient-primary' : ''}}" href="{{ route('category.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Danh mục sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='brand' ? 'active bg-gradient-primary' : ''}}" href="{{ route('brand.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Thương hiệu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='product' ? 'active bg-gradient-primary' : ''}}" href="{{ route('product.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='coupon' ? 'active bg-gradient-primary' : ''}}" href="{{ route('coupon.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">  
                </div>
                <span class="nav-link-text ms-1">Mã giảm giá</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='delivery' ? 'active bg-gradient-primary' : ''}}" href="{{ route('delivery') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">  
                </div>
                <span class="nav-link-text ms-1">Phí vận chuyển</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='cate_blog' ? 'active bg-gradient-primary' : ''}}" href="{{ route('cate_blog.index') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Danh mục bài viết</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='video' ? 'active bg-gradient-primary' : ''}}" href="{{ url('/video') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Video</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='binh_luan' ? 'active bg-gradient-primary' : ''}}" href="{{ url('/binh_luan') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Bình luận</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='read_data' ? 'active bg-gradient-primary' : ''}}" href="{{ url('/read_data') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Google drive</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='nhataitro' ? 'active bg-gradient-primary' : ''}}" href="{{ url('/nhataitro') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Nhà tài trợ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{Request::segment(1)=='icon' ? 'active bg-gradient-primary' : ''}}" href="{{ url('/icon') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  
                </div>
                <span class="nav-link-text ms-1">Mạng xã hội</span>
              </a>
            </li>
            @endhasanyrole
            <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="../pages/profile.html">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
              </a>
            </li>
            
          </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
          <div class="mx-3 btn btn-outline-danger">
            <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Đăng xuất
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
          </div>
        </div>
  </aside>
  
