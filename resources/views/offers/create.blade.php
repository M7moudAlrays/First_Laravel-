@extends('offers.index') 

@section('offer_content')
<!-- Contact Section-->
<section>
    <div class="container mt-3">
        <!-- Contact Section Heading-->
        <h3 class="text-center text-secondary mb-2">Add New Offer</h3>
        <!-- Icon Divider-->
        {{-- <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div> --}}
        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-md-6 mx-auto">

                @if(session()->has('msg'))
                    <div class="alert alert-success mt-2 text-center">
                        <h6>{{session()->get('msg')}}</h6> 
                    </div>    
                @endif
                <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                    
                    <div class="control-group">
                        <div class="form-group mb-1">                           
                            <input class="form-control" name="name" type="text" placeholder="Name"/>
                            @error('name')
                                <div class="alert alert-danger mt-2 text-dark">{{$errors->first('name')}}</div>
                            @enderror
            
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group mb-1">                          
                            <input class="form-control" name="price" type="text" placeholder="Price"/>
                            @error('price')
                                <div class="alert alert-danger mt-2 text-dark">{{$errors->first('price')}}</div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group mb-1">                          
                            <input class="form-control" name="image" type="file" />
                            @error('image')
                                <div class="alert alert-danger mt-2 text-dark">{{$errors->first('image')}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group  mb-1">
                            <input class="form-control" name="details" type="text" placeholder="Details"/>
                            @error('details')
                                <div class="alert alert-danger mt-2 text-dark">{{$errors->first('details')}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group offset-5 ">
                        <button class="btn btn-primary pl-4 pr-4 "type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

