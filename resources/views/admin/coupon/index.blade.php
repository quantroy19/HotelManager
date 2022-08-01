@extends('admin.layout.app')
@section('title')
    {{ $title }}
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
                            <th>Name</th>
                            <th>Code</th>
                            <th>Value</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Approved by</th>
                            <th>Status</th>
                            <th><a class="btn btn-primary" href="{{ route('admin.coupon.create') }}"> Add</a></th>
                        </thead>
                        <tbody>
                            @foreach ($lists as $list)
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->code }}</td>
                                    <td>{{ number_format($list->value, 0, '.', ',') }} VND</td>
                                    <td>{{ $list->start_time }}</td>
                                    <td>{{ $list->end_time }}</td>
                                    <td>{{ $list->user->name }}</td>
                                    <td>
                                        {{ $list->status }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.coupon.edit', ['id' => $list->id]) }}" rel="tooltip"
                                            title="Edit " class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.coupon.destroy', ['id' => $list->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Ban co muon xoa khong')"
                                                rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
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
@section('script')
    @parent
@endsection
