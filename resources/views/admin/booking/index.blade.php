@extends('admin.layout.app')
@section('title')
    {{ $title }}
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/custom_admin.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">{{ $title }}</h4>
                    <p>
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        <?php //Hiển thị thông báo lỗi
                        ?>
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                    </p>
                </div>
                <div class="card-body ">
                    <table class="table table-hover table-striped">
                        <thead class="thead ">
                            <th>ID</th>
                            <th>Room</th>
                            <th>User Booking</th>
                            <th>Email</th>
                            <th>Arrival Date</th>
                            <th>Departure Date</th>
                            <th>Status</th>
                            <th><a class="btn btn-primary" href="{{ route('admin.booking.create') }}"> Add</a></th>
                        </thead>
                        <tbody class="tbody_image">
                            @foreach ($lists as $list)
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td>{{ $list->room->name }}</td>
                                    <td>{{ $list->user->name }}</td>
                                    <td>{{ $list->email }}</td>
                                    <td>{{ $list->arrival_date }}</td>
                                    <td>{{ $list->departure_date }}</td>
                                    <td>
                                        {{ $list->status }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user.edit', ['id' => $list->id]) }}" rel="tooltip"
                                            title="Edit " class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.user.destroy', ['id' => $list->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Ban co muon xoa khong')" rel="tooltip"
                                                title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-footer text-muted">
                    <tfoot>
                        {{ $lists->links() }}
                    </tfoot>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
