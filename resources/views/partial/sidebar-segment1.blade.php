<h4>Segment 1</h4>
<div class="list-group list-group-flush">
    <a href="{{ url('home') }}" class="list-group-item list-group-item-action {{ Request::segment(1) === 'home' ? 'active' : null }}">Home</a>
    <a href="{{ url('profile') }}" class="list-group-item list-group-item-action {{ Request::segment(1) === 'profile' ? 'active' : null }}">Profile</a>
    <a href="{{ url('gallery') }}" class="list-group-item list-group-item-action {{ Request::segment(1) === 'gallery' ? 'active' : null }}">Gallery</a>
    <a href="{{ url('contact') }}" class="list-group-item list-group-item-action {{ Request::segment(1) === 'contact' ? 'active' : null }}">Contact</a>
</div>