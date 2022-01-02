@extends('layouts.app')

@section('content')
  @include('layouts.nav')
  <!---------------------------- main ----------------------->
 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <!---------------------------- Nội dung ----------------------->
      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-header"><h4>Thêm danh mục bài viết</h4></div>

                <div class="card-body">
                	@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                	@endif
                	@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('cate_blog.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="cate_blog_name" class="col-md-4 col-form-label text-md-right">Tên danh mục bài viết:</label>
                            <div class="col-md-6 border">
                                <input autocomplete="off" type="text" class="form-control" name="cate_blog_name" value="{{ old('cate_blog_name') }}" onkeyup="ChangeToSlug();" id="slug" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cate_blog_slug" class="col-md-4 col-form-label text-md-right">Slug danh mục bài viết:</label>
                            <div class="col-md-6 border">
                                <input autocomplete="off" type="text" class="form-control" name="cate_blog_slug" value="{{ old('cate_blog_slug') }}" id="convert_slug" >
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                        	<label for="cate_blog_status" class="col-md-4 col-form-label text-md-right">Kích hoạt:</label>
                            <div class="col-md-6">
                                <select class="custom-select" name="cate_blog_status">
                                  <option value="1">Hiển thị</option>
                                  <option value="0">Không</option>
                                  
                                  
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Thêm
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
    
      <!----------------------------end Nội dung ----------------------->  
    <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
@endsection