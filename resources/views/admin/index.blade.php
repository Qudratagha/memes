@extends('layouts.app')
@section('title', 'Memes')
@section('content')
    <div class="container-fluid" style="margin-top: 3%">
        <div class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">
                        <i class="fas fa-user-graduate"></i> All Memes
                    </h3>
                    <div class="card-actions">
                        <a href="{{route('meme.create')}}" class="btn btn-primary d-none d-sm-inline-block">
                            <i class="fas fa-plus"></i> Add meme
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover datatable display">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Video</th>
                            <th>Desc</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($memes as $meme)
                            <tr>
                                <td>{{ $meme->id }}</td>
                                <td>{{ ucfirst($meme->category) }}</td>
                                <td>{{ ucfirst($meme->name) }}</td>
                                <td>{{ ucfirst($meme->title) }}</td>
                                <td>{{ ucfirst($meme->video) }}</td>
                                <td>{{ ucfirst($meme->description) }}</td>

                                <td>
                                    <form action="{{ route('meme.destroy', $meme->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.display').DataTable({
            "ordering": false
        });
    </script>
@endsection



