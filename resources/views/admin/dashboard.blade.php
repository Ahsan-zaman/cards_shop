<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
@include('admin.header')
    <div class="container min-vh-100">
        <div class="row">
            <div class="col">
                <div class="my-5">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <h1 class="text-primary">Recharge Requests </h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <td>Date</td>
                                    <td>User Name</td>
                                    <td>Recharge Amount</td>
                                    <td>Transfer Type</td>
                                    <td>Comment</td>
                                    <td>Bank Receipt</td>
                                    <td>Actions</td>
                                </tr>
                                <thead />
                                @forelse ($reqs as $req)
                                <tr>
                                    <td>{{$req->created_at->toFormattedDateString()}}</td>
                                    <td>{{$req->user->name}}</td>
                                    <td>{{$req->amount}} SAR</td>
                                    <td>{{$req->type}}</td>
                                    <td>{{$req->comment}}</td>
                                    <td><a href="/admin/request-file-download?id={{$req->id}}">Uploaded File</a></td>
                                    <td>
                                        <a href="/admin/accept-request?id={{$req->id}}"
                                            class="btn btn-primary">Approve</a>
                                        <a href="#" class="btn btn-danger">Reject</a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-primary" role="alert">
                                    No new requests
                                </div>
                                @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

</html>