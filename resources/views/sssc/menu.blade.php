<div class="list-group">
    <a href="{{ route('sssc.index') }}" class="list-group-item
        @if(Request::is('sssc')) active @endif">
        HOME
    </a>
    <a href="{{ route('sssc.users') }}" class="list-group-item
        @if(Request::is('sssc/users')) active @endif">
        MANAGE USERS &amp; PERMISSION
    </a>
    <a href="{{ route('sssc.clubs') }}" class="list-group-item
        @if(Request::is('sssc/clubs')) active @endif">
        MANAGE CLUBS
    </a>
    <a href="{{ route('sssc.staffs') }}" class="list-group-item
        @if(Request::is('sssc/staffs')) active @endif">
        MANAGE STAFFS
    </a>
    <a href="{{ route('sssc.proposals') }}" class="list-group-item
        @if(Request::is('sssc/proposals')) active @endif">
        MANAGE PROPOSALS
    </a>
</div>
