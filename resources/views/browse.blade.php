@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row search">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Search</div>
                <div class="card-body">
                    
                    <!--Search textbox & button-->
                    <form action="{{URL::to('/search')}}" method="POST" role="search">
                            {{csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form_control" id="search" name="q" placeholder="Search Events...">
                                <span class="input-group-btn">
                                    <button type="submit" class="btnSearch"> Search </button>                      
                                    
                                </span>
                            </div>
                    </form>                  
                    <!--EndSearch-->
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Browse</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


                    <div class="pager-top">{{ $events->links() }}</div>
                    <div class="table-responsive">
                    <table id="browse" class="table table-striped table-bordered table-hover" >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Province</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">Image Event</th>
                            <th scope="col">User Action</th>
                        </tr>
                        <tbody>
                            @foreach($events as $event)
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
                    <div class="pager-btm">{{ $events->links() }}</div>
                   
                </div>                               
            </div>
        </div>
    </div>
</div>
	
@endsection