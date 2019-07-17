@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-5 mb-5">
            <div class="card-header text-center">
                Edit Data PBB
            </div>
            <div class="card-body">
                <a href="/pbb" class="btn btn-primary btn-sm">Kembali</a>
                
                <br/>
                <br/>

                {{ Form::open(['action' => ['EarthnbuildingController@update', $earthnbuilding->id], 'method' => 'put'])}}
                    {{ Form::token() }}
                    

                    <div class="form-group">
                        {{Form::label('Nama')}}
                        {{Form::text('name', $earthnbuilding->name, ['class' => 'form-control', 'placeholder' => 'Nama Bangunan ..'])}}
                        @if($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        {{Form::label('Kelurahan')}}
                        {{Form::text('region', $earthnbuilding->region, ['class' => 'form-control', 'placeholder' => 'Nama Kelurahan ..'])}}
                        @if($errors->has('region'))
                            <div class="text-danger">
                                {{ $errors->first('region') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        {{Form::label('Alamat')}}
                        {{Form::text('address', $earthnbuilding->address, ['class' => 'form-control', 'placeholder' => 'Jl Jend Sudirman ..'])}}
                        
                        @if($errors->has('address'))
                            <div class="text-danger">
                                {{ $errors->first('address') }}
                            </div>
                        @endif
                    </div>

                   
                    <div class="form-group">
                        {{Form::label('Luas Bangunan')}}
                        <div class="input-group">
                            {{Form::text('building', $earthnbuilding->building, ['class' => 'form-control', 'placeholder' => '300 ..'])}}
                            @if($errors->has('building'))
                            <div class="text-danger">
                            {{ $errors->first('building') }}
                            </div>
                            @endif
    
                            <div class="input-group-append">
                                <span class="input-group-text">m2</span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="input-group">
                        {{Form::label('Luas Tanah')}}
                        <div class="input-group">
                            {{Form::text('soil', $earthnbuilding->soil, ['class' => 'form-control', 'placeholder' => '450 ..'])}}
                            @if($errors->has('soil'))
                            <div class="text-danger">
                            {{ $errors->first('soil') }}
                            </div>
                            @endif
    
                            <div class="input-group-append">
                                <span class="input-group-text">m2</span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group">
                        {{Form::label('Latitude')}}
                        {{Form::text('lat', $earthnbuilding->lat, ['class' => 'form-control', 'placeholder' => 'Latitude'])}}

                        @if($errors->has('lat'))
                            <div class="text-danger">
                                {{ $errors->first('lat')}}
                            </div>
                        @endif

                    </div>

                        <div class="form-group">
                            {{Form::label('Longitude')}}
                            {{Form::text('long', $earthnbuilding->long, ['class' => 'form-control', 'placeholder' => 'Longitude'])}}
        
                             @if($errors->has('long'))
                                <div class="text-danger">
                                    {{ $errors->first('long')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            {{Form::label('Information')}}
                            {{Form::textarea('information', $earthnbuilding->information, ['class' => 'form-control', 'placeholder' => 'Keterangan'])}}
    
                             @if($errors->has('information'))
                                <div class="text-danger">
                                    {{ $errors->first('information')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection