@extends('layouts.masterlayout')
@section('content')
    <h1>Selling our Home</h1>
    <hr>
    <div class="row">
        {!! Form::open(array('url' => 'flyers/store', 'files' => true, 'class' => '')) !!}      
        
        
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!!$error!!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6">        
            <div class="form-group">
        		<label for="address">Street:</label>
        		<input type="text" name="street" id="address" class="form-control" vlaue="{{ old('address')}}" required>
        	</div>
            <div class="form-group">
                <label for="address">City:</label>
                <input type="text" name="city" id="address" class="form-control" vlaue="{{ old('address')}}" required>
            </div>
        	<div class="form-group">
        		<label for="zipcode">Zip Code:</label>
        		<input type="text" name="zipcode" id="zipcode" class="form-control" vlaue="{{ old('zipcode')}}" required>
        	</div>
        	<div class="form-group">
        		<label for="country">Country:</label>
        		<select id="country" name="country" class="form-control">
        			@foreach (App\Http\utilities\Country::all() as $country => $code)
        				<option vlaue="{{$code}}">{{$country}}</option>
        			@endforeach	
        		</select>
        	</div>
        	<div class="form-group">
        		<label for="state">State:</label>
        		<input type="text" name="state" id="state" class="form-control" vlaue="{{ old('state')}}" required>
        	</div>
            
        </div>    	
        <div class="col-md-6">  
        	<div class="form-group">
        		<label for="price">Set Price:</label>
        		<input type="text" name="price" id="price" class="form-control" vlaue="{{ old('price')}}" required>
        	</div>
        	<div class="form-group">
        		<label for="description">Home Description:</label>
        		<textarea type="text" name="description" id="price" class="form-control" rows="10">{{ old('description')}}</textarea>
        	</div>        	
        </div>
        <div class="col-md-12">
            <hr>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Flyer</button>
            </div>
        </div>
    </div>
        {!! Form::close() !!}
   
@stop