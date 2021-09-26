<div class="list-group">
    <a href="{{ route('admin.brand') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.brand') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Brands / Companies
    </a>
    <a href="{{ route('admin.category') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.category') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Categories
    </a>
    <a href="{{ route('admin.item') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.item') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Items
    </a>
    <a href="{{ route('admin.special') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.special') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Special Items
    </a>
    <a href="{{ route('admin.user') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.user') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Users
    </a>
    <a href="{{ route('admin.order') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.order') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Orders
    </a>
    <a href="{{ route('admin.payment') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.payment') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Payments
    </a>
    <a href="{{ route('admin.sale') }}"
       class="list-group-item list-group-item-action px-5 py-3 text-center {{ request()->routeIs('admin.sale') ? 'bg-primary text-white' : 'bg-white text-dark' }}">
        Sale Codes
    </a>
    <a href="#" class="list-group-item list-group-item-action px-5 py-3 text-center bg-danger text-white">
        Logout
    </a>
</div>