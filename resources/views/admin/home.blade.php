<!DOCTYPE html>
<html lang="en">

<head>
    @include(admin.home.head)
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
    {{-- @include(admin.home.spinner) --}}
    {{-- @include(admin.home.sidebar) --}}

        <!-- Content Start -->
        <div class="content">
            {{-- @include(admin.home.navbar) --}}
            @include(admin.home.sales&revenue)
            @include(admin.home.saleschart)
            @include(admin.home.recentsales)
            @include(admin.home.widget)
            @include(admin.home.footer)

            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</body>

</html>