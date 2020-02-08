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


                    <!-- {{ Auth::user()->firstName }}!  -->


                    <table id="browse" class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Venue</th>
                            <th>Street</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Postal Code</th>
                        </tr>
                        <tbody>

                            <tr>
                                <td>{{ $event->id }}</td>
                                <td><a href='{{$event->id}}'>{{ $event->name }}</a></td>
                                <td>{{ $event->category }}</td>
                                <td>{{ $event->startDate }}</td>
                                <td>{{ $event->endDate }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->street }}</td>
                                <td>{{ $event->city }}</td>
                                <td>{{ $event->province }}</td>
                                <td>{{ $event->postalCode }}</td>
                                @if(Auth::check())
                                @if (Auth::user()->id == $event->userId )
                                <td>
                                    <a href="{{  route('editevent',  ['id'  => $event->id ])  }}">Edit</a><br />
                                    <a href="{{  route('deleteevent',  ['id'  => $event->id ])  }}">Delete</a>
                                </td>
                                @endif
                                @endif
                            </tr>
                        </tbody>
                    </table>
                    
                    <!-- <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" value="{{ $event->name }}" disabled>
                    </div> -->
                    <img src="{{ url('/storage/'.$event->filepath) }} " alt="Smiley face" height="42" width="42">
                    <div class="form-group">
                        <label for="comment">Event Description:</label>
                        <textarea class="form-control" rows="5" id="comment" disabled>{{ $event->description}}</textarea>
                    </div>
                    <a href="/browse" class="alert-link">Browse all Events</a>





                </div>
            </div>
        </div>
    </div>
</div>

@endsection