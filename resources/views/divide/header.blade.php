<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link mt-4">
            <img width="40px" class="  mr-2" src="https://routine.vn/media/favicon/default/output-onlinejpgtools.png"
                alt="">
            <span class=" menu-text fw-bolder fs-4 ms-6">Routine shop
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner py-4">
        <li class="menu-item active">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Trang chính</div>
            </a>
        </li>

        <li class="menu-item my-3">
            <a href="{{route('admin.cate.index')}}" class="menu-link">
                <i class='bx bxs-category'></i>
                <div data-i18n="Layouts" class="mx-3">Danh mục</div>
            </a>
        </li>
    </div>



    <div class="menu-inner-shadow"></div>

</aside>