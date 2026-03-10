<x-layouts.app>
    <div>
        @foreach($staffs AS $staff)
            <h2>{{ $staff->count }}</h2>
            <ul>
                <li>{{ $staff->name }}</li>
            </ul>

        @endforeach
    </div>

    <button type="button" class="btn btn-primary">
        <a href="{{ route('staff.create') }}" class="text-black">Add New Staff</a>
    </button>
</x-layouts.app>
