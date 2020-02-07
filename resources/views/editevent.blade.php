@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Event') }}</div>

                <div class="card-body">
                    @if(session('status'))
                    <div clas="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <form method="POST" action="/update" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ $event->id }}" required autocomplete="id" autofocus>

                                @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $event->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label  text-md-right" >{{ __('Select a file') }}</label>
                            <div class="col-md-6">
                                <input  type="file"  id="picture" class="@error('picture') is-invalid @enderror"  name="picture" value="{{ old('picture') }}" required autocomplete="picture" autofocus>
                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select name="category" id="category" value="{{ $event->category }}">
                                    <option value="art">Art</option>
                                    <option value="sport">Sport</option>
                                    <option value="science">Science</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="other">Other</option>
                                </select><br><br>

                                @error('catgory')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                            <textarea row=4 column=50  id="description" name="description" class="form-control @error('description') is-invalid @enderror"  autofocus>{{ $event->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div>Must be less than 1000 characters</div>
                            </div>
                        </div>                          
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $event->city }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="startDate" class="col-md-4 col-form-label text-md-right" >{{ __('Start Date') }}</label>

                            <div class="col-md-6">
                            <input type=date  name="startDate" id="startDate" class="form-control @error('startDate') is-invalid @enderror"  value="{{ $event->startDate }}" required autocomplete="startDate" autofocus>

                                @error('startDate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>                                                                         
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="endDate" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                            <div class="col-md-6">
                            <input type=date  name="endDate" id="endDate" class="form-control @error('endDate') is-invalid @enderror"  value="{{ $event->endDate }}" required autocomplete="endDate" autofocus>
                                @error('endDate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="venue" class="col-md-4 col-form-label text-md-right">{{ __('Venue') }}</label>

                            <div class="col-md-6">
                            <input type="text" id="venue" name ="venue" class="form-control @error('venue') is-invalid @enderror"  value="{{ $event->venue }}" required autocomplete="venue" autofocus>

                                @error('venue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="venue" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                            <input type="text" id="street" name ="street" class="form-control @error('street') is-invalid @enderror"  value="{{ $event->street }}" required autocomplete="street" autofocus> 

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                            <div class="col-md-6">
                            <input type="text" id="province" name ="province" class="form-control @error('province') is-invalid @enderror"  value="{{ $event->province }}" required autocomplete="province" autofocus>

                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div>Must be in the form of province abbreviation like:QC</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="postalCode" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                            <div class="col-md-6">
                            <input type="text" id="postalCode" name ="postalCode" class="form-control @error('postalCode') is-invalid @enderror"  value="{{ $event->postalCode }}" required autocomplete="postalCode" autofocus> 
                           
                                @error('postalCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>   
                                @enderror
                                <div>Must be in the form A1A 1A1</div>
                            </div>
                        </div>           
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary btn-lg btn-block">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection