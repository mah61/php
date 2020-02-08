@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ Auth::user()->firstname }}'s Events</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="pager-top">{{ $events->links() }}</div>
                    <table id="browse" class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Venue</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Postal Code</th>
                            <th>User Action</th>
                        </tr>
                        <tbody>
                            @forelse($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td><a href='events/{{$event->id}}'>{{ $event->name }}</a></td>
                                <td>{{ $event->category }}</td>
                                <td>{{ $event->startDate }}</td>
                                <td>{{ $event->endDate }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->street }}</td>
                                <td>{{ $event->city }}</td>
                                <td>{{ $event->province }}</td>
                                <td>{{ $event->postalCode }}</td>
                                <td>
                                    <a href="{{  route('editevent',  ['id'  => $event->id ])  }}">Edit</a><br />
                                    <a href="{{  route('deleteevent',  ['id'  => $event->id ])  }}">Delete</a>
                                </td>
                            </tr>
                            @empty
                                <p>User has no Events!</p>
                            @endforelse
                            
                        </tbody>
                    </table>
                    <div class="pager-btm">{{ $events->links() }}</div>
                    <a href="/browse" class="alert-link">Browse all Events</a><br/>
                    <a href="/post" class="alert-link">Post Event</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection