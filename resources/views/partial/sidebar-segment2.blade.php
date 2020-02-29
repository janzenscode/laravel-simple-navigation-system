<h4>Segment 2</h4>
<div class="list-group list-group-flush">
    <a href="{{ url('page/home') }}" class="list-group-item list-group-item-action {{ Request::segment(2) === 'home' ? 'active' : null }}">Home</a>
    <a href="{{ url('page/profile') }}" class="list-group-item list-group-item-action {{ Request::segment(2) === 'profile' ? 'active' : null }}">Profile</a>
    <a href="{{ url('page/gallery') }}" class="list-group-item list-group-item-action {{ Request::segment(2) === 'gallery' ? 'active' : null }}">Gallery</a>
    <a href="{{ url('page/contact') }}" class="list-group-item list-group-item-action {{ Request::segment(2) === 'contact' ? 'active' : null }}">Contact</a>
</div>