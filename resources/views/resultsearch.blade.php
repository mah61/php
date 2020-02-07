@extends('layouts.app')

@section('content')        
    
    <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{$query}} </b> are :</p>
        
        <div class="table-responsive">
        <table id="search" class="table table-striped table-bordered table-hover">
            <thead>
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
            </thead>
            <tbody>
                @foreach($details as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td><a href="{{  route('showevent',  ['id'  => $event->id ])  }}">{{ $event->name }}</a></td>
                    <td>{{ $event->category }}</td>
                    <td>{{ $event->startDate }}</td>
                    <td>{{ $event->endDate }}</td>
                    <td>{{ $event->venue }}</td>
                    <td>{{ $event->street }}</td>
                    <td>{{ $event->city }}</td>
                    <td>{{ $event->province }}</td>
                    <td>{{ $event->postalCode }}</td>
                    <td>
                        <div>
                        <a href="{{  route('showevent',  ['id'  => $event->id ])  }}">        
                            <img src="{{ url('/storage/'.$event->filepath) }} " alt="Smiley face" style="display:block; width:100%;">
                        </a>
                        </div>
                    </td>

                    @if(Auth::check())
                    @if (Auth::user()->id == $event->userId )
                    <td>
                        <a href="{{  route('editevent',  ['id'  => $event->id ])  }}">Edit</a><br />
                        <a href="{{  route('deleteevent',  ['id'  => $event->id ])  }}">Delete</a>
                    </td>
                    @endif
                    @endif


                   </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>  
    @elseif(isset($message))
        <p> {{ $message }} </p> 
    @endif  
@endsection
