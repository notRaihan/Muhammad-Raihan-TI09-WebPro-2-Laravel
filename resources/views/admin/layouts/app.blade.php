@include('admin.layouts.header')
@include('admin.layouts.menu')
<div id="layoutSidenav_content">
    <main>
        @yield('content')
    </main>
    @yield('footer')
</div>

@include('admin.layouts.footer')
