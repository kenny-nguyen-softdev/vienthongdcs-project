<!--**********************************
                                Sidebar start
                            ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            @can('Tổng quan')
                <li><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>Tổng
                        quan</a>
                </li>
            @endcan

            @can('Hiển thị thông tin cửa hàng')
                <li><a href="{{ route('admin.company.index') }}"><i class="fa fa-home" aria-hidden="true"></i>Thông tin
                        về cửa
                        hàng</a>
                </li>
            @endcan

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-th"
                        aria-hidden="true"></i><span class="nav-text">Đơn Hàng</span></a>
                <ul aria-expanded="false">
                    @can('Thêm đơn hàng')
                        <li><a href="{{ route('admin.order.create') }}">Thêm đơn hàng</a></li>
                    @endcan

                    @can('Hiển thị danh sách đơn hàng')
                        <li><a href="{{ route('admin.order.index') }}">Danh sách đơn hàng</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-archive"
                        aria-hidden="true"></i><span class="nav-text">Sản Phẩm</span></a>
                <ul aria-expanded="false">
                    @can('Thêm sản phẩm')
                        <li><a href="{{ route('admin.product.create') }}">Thêm sản phẩm</a></li>
                    @endcan

                    @can('Hiển thị danh sách sản phẩm')
                        <li><a href="{{ route('admin.product.index') }}">Danh sách sản phẩm</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-commenting-o"
                        aria-hidden="true"></i><span class="nav-text">Đánh Giá</span></a>
                <ul aria-expanded="false">
                    @can('Hiển thị danh sách đánh giá')
                        <li><a href="{{ route('admin.comment.index') }}">Danh sách đánh giá</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-list"
                        aria-hidden="true"></i><span class="nav-text">Danh Mục Chính</span></a>
                <ul aria-expanded="false">
                    @can('Thêm danh mục chính')
                        <li><a href="{{ route('admin.parentCategory.create') }}">Thêm danh mục chính</a></li>
                    @endcan

                    @can('Hiển thị danh sách danh mục chính')
                        <li><a href="{{ route('admin.parentCategory.index') }}">Danh sách danh mục chính</a></li>
                    @endcan

                    @can('Thêm slider của danh mục chính')
                        <li><a href="{{ route('admin.parentCategorySlider.create') }}">Thêm slider của danh mục chính</a>
                        </li>
                    @endcan

                    @can('Hiển thị danh sách slider của danh mục chính')
                        <li><a href="{{ route('admin.parentCategorySlider.index') }}">Danh sách slider của danh mục
                                chính</a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-th-list"
                        aria-hidden="true"></i><span class="nav-text">Danh Mục Phụ 1</span></a>
                <ul aria-expanded="false">
                    @can('Thêm danh mục phụ 1')
                        <li><a href="{{ route('admin.firstSubCategory.create') }}">Thêm danh mục phụ 1</a></li>
                    @endcan

                    @can('Hiển thị danh sách danh mục phụ 1')
                        <li><a href="{{ route('admin.firstSubCategory.index') }}">Danh sách danh mục phụ 1</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-th-list"
                        aria-hidden="true"></i><span class="nav-text">Danh Mục Phụ 2</span></a>
                <ul aria-expanded="false">
                    @can('Thêm danh mục phụ 2')
                        <li><a href="{{ route('admin.secondSubCategory.create') }}">Thêm danh mục phụ 2</a></li>
                    @endcan

                    @can('Hiển thị danh sách danh mục phụ 2')
                        <li><a href="{{ route('admin.secondSubCategory.index') }}">Danh sách danh mục phụ 2</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-copyright"
                        aria-hidden="true"></i><span class="nav-text">Thương Hiệu</span></a>
                <ul aria-expanded="false">
                    @can('Thêm thương hiệu')
                        <li><a href="{{ route('admin.brand.create') }}">Thêm thương hiệu</a></li>
                    @endcan

                    @can('Hiển thị danh sách thương hiệu')
                        <li><a href="{{ route('admin.brand.index') }}">Danh sách thương hiệu</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-globe"
                        aria-hidden="true"></i><span class="nav-text">Xuất xứ</span></a>
                <ul aria-expanded="false">
                    @can('Thêm xuất xứ')
                        <li><a href="{{ route('admin.origin.create') }}">Thêm xuất xứ</a></li>
                    @endcan

                    @can('Hiển thị danh sách xuất xứ')
                        <li><a href="{{ route('admin.origin.index') }}">Danh sách xuất xứ</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-cogs"
                        aria-hidden="true"></i><span class="nav-text">Cấu hình</span></a>
                <ul aria-expanded="false">
                    @can('Thêm cấu hình')
                        <li><a href="{{ route('admin.configuration.create') }}">Thêm cấu hình</a></li>
                    @endcan

                    @can('Hiển thị danh sách cấu hình')
                        <li><a href="{{ route('admin.configuration.index') }}">Danh sách cấu hình</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-bookmark-o"
                        aria-hidden="true"></i><span class="nav-text">Tính năng</span></a>
                <ul aria-expanded="false">
                    @can('Thêm tính năng')
                        <li><a href="{{ route('admin.feature.create') }}">Thêm tính năng</a></li>
                    @endcan

                    @can('Hiển thị danh sách tính năng')
                        <li><a href="{{ route('admin.feature.index') }}">Danh sách tính năng</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-newspaper-o"
                        aria-hidden="true"></i><span class="nav-text">Danh mục bài viết</span></a>
                <ul aria-expanded="false">
                    @can('Thêm danh mục bài viết')
                        <li><a href="{{ route('admin.blog.create') }}">Thêm danh mục bài viết</a></li>
                    @endcan

                    @can('Hiển thị danh sách danh mục bài viết')
                        <li><a href="{{ route('admin.blog.index') }}">Danh sách danh mục bài viết</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-newspaper-o"
                        aria-hidden="true"></i><span class="nav-text">Bài viết</span></a>
                <ul aria-expanded="false">
                    @can('Thêm bài viết')
                        <li><a href="{{ route('admin.post.create') }}">Thêm bài viết</a></li>
                    @endcan

                    @can('Hiển thị danh sách bài viết')
                        <li><a href="{{ route('admin.post.index') }}">Danh sách bài viết</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-newspaper-o"
                        aria-hidden="true"></i><span class="nav-text">Bài giới thiệu</span></a>
                <ul aria-expanded="false">
                    @can('Thêm bài giối thiệu')
                        <li><a href="{{ route('admin.introduction.create') }}">Thêm giới thiệu</a></li>
                    @endcan

                    @can('Hiển thị danh sách bài giối thiệu')
                        <li><a href="{{ route('admin.introduction.index') }}">Danh sách giới thiệu</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-newspaper-o"
                        aria-hidden="true"></i><span class="nav-text">Bài viết trên Header</span></a>
                <ul aria-expanded="false">
                    @can('Thêm bài viết trên header')
                        <li><a href="{{ route('admin.headerPost.create') }}">Thêm bài viết trên Header</a></li>
                    @endcan

                    @can('Hiển thị danh sách bài viết trên header')
                        <li><a href="{{ route('admin.headerPost.index') }}">Danh sách bài viết trên Header</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-star-half-o"
                        aria-hidden="true"></i><span class="nav-text">Trạng thái</span></a>
                <ul aria-expanded="false">
                    @can('Hiển thị danh sách tình trạng đơn hàng')
                        <li><a href="{{ route('admin.orderStatus.index') }}">Danh sách trạng thái đơn hàng</a></li>
                    @endcan

                    @can('Hiển thị danh sách tình trạng giao hàng')
                        <li><a href="{{ route('admin.shippingStatus.index') }}">Danh sách trạng thái giao hàng</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-slideshare"
                        aria-hidden="true"></i><span class="nav-text">Slider</span></a>
                <ul aria-expanded="false">
                    @can('Thêm slider')
                        <li><a href="{{ route('admin.slider.create') }}">Thêm slider</a></li>
                    @endcan

                    @can('Hiển thị danh sách slider')
                        <li><a href="{{ route('admin.slider.index') }}">Danh sách slider</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-file-text"
                        aria-hidden="true"></i><span class="nav-text">Trang Thông Tin</span></a>
                <ul aria-expanded="false">
                    @can('Thêm các trang thông tin')
                        <li><a href="{{ route('admin.page.create') }}">Thêm trang thông tin</a></li>
                    @endcan

                    @foreach ($sidebarData->pages as $page)
                        @can('Chỉnh sửa các trang thông tin')
                            <li><a href="{{ route('admin.page.edit', $page->id) }}">Chỉnh sửa
                                    {{ $page->title }}</a>
                            </li>
                        @endcan
                    @endforeach
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-globe"
                        aria-hidden="true"></i><span class="nav-text">Chi nhánh</span></a>
                <ul aria-expanded="false">
                    @can('Thêm chi nhánh')
                        <li><a href="{{ route('admin.branch.create') }}">Thêm chi nhánh</a></li>
                    @endcan

                    @can('Hiển thị danh sách chi nhánh')
                        <li><a href="{{ route('admin.branch.index') }}">Danh sách chi nhánh</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-envelope-o"
                        aria-hidden="true"></i><span class="nav-text">Hỗ Trợ Tư Vấn Miễn Phí</span></a>
                <ul aria-expanded="false">
                    @can('Hiển thị danh sách hỗ trợ tư vấn')
                        <li><a href="{{ route('admin.consultant.index') }}">Danh sách hỗ trợ tư vấn miễn phí</a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"
                        aria-hidden="true"></i><span class="nav-text">Khách hàng</span></a>
                <ul aria-expanded="false">
                    @can('Thêm khách hàng')
                        <li><a href="{{ route('admin.customer.create') }}">Thêm khách hàng</a></li>
                    @endcan

                    @can('Hiển thị danh sách khách hàng')
                        <li><a href="{{ route('admin.customer.index') }}">Danh sách khách hàng</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"
                        aria-hidden="true"></i><span class="nav-text">Thành Viên</span></a>
                <ul aria-expanded="false">
                    @can('Thêm thành viên')
                        <li><a href="{{ route('admin.staff.create') }}">Thêm thành viên</a></li>
                    @endcan

                    @can('Hiển thị danh sách thành viên')
                        <li><a href="{{ route('admin.staff.index') }}">Danh sách thành viên</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-user-plus"
                        aria-hidden="true"></i><span class="nav-text">Phân Quyền</span></a>
                <ul aria-expanded="false">
                    @can('Thêm vai trò')
                        <li><a href="{{ route('admin.permission.addRole') }}">Thêm vai trò</a></li>
                    @endcan

                    @can('Hiển thị danh sách vai trò')
                        <li><a href="{{ route('admin.permission.roleList') }}">Danh sách vai trò</a></li>
                    @endcan

                    @can('Hiển thị danh sách tác vụ')
                        <li><a href="{{ route('admin.permission.permissionList') }}">Danh sách tác vụ</a></li>
                    @endcan
                </ul>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
                                                        Sidebar end
                                                    ***********************************-->
