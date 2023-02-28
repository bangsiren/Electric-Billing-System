@extends('layouts.admin')

@section('content')
<style>
  .contain {
    display: flex;
    justify-content: center;
    align-items: center;
    justify-items: center;
  }

  .box {
    width: 100%;
  }

  .first-box {
    width: 50%;
  }
  .error {
    color: red;
  }
</style>
<div class="">
  
    <div class="col-md-12 col-md-offset-2 box mt-5">
      <div class="card rounded-0 shadow text-reset">
        <div class="card-header">
          <div class="card-title h3 my-2 text-center fw-bold">Welcome, Administrator! {{auth()->user()->name}}</div>
        </div>

        <div class="card-body">
          <div class="container-fluid">
            {{-- @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif --}}


            <form action="{{ route('add-bills') }}" method="post">

              @if(Session::has('success'));
              <div class="success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('failed'))
              <div class="error">{{Session::get('failed')}}</div>
              @endif
              
              @csrf
              {{-- {{ csrf_field() }} --}}
              {{-- <fieldset class="border pb-3 mb-3"> --}}
                <!-- Form Name -->
                {{-- <legend class="w-auto mx-3 px-4 border-0 mt-n4 h4 fw-bolder">New Bill Entry</legend> --}}

                <div class="container-fluid">
                  <!-- Text input-->
                  <div class="mb-3">
                    <label class="control-label" for="user_id"></label>Registered Customers
                    <select name="user_id" id="user_id" class="form-control rounded-0" value="{{old('user_id')}}" required>
                      @foreach($users as $user)
                      <option value="{{ $user->id }}"> {{ $user->name }}</option>
                      @endforeach
                    </select>
                    <p class="error">@error('user_id') {{$message}} @enderror</p>
                    {{-- <input name="user_id" placeholder="" class="form-control rounded-0" value="{{old('user_id')}}"
                      type="text"> --}}
                      
                  </div>

                  <!-- Text input-->

                  <div class="mb-3">
                    <label class="control-label" for="initial">Initial Reading</label>
                    <input  name="initial" placeholder="" value="{{old('initial')}}" class="form-control rounded-0 text-end"
                      type="number" step="any">
                    <p class="error">@error('initial') {{$message}} @enderror</p>
                  </div>

                  <!-- Text input-->
                  <div class="mb-3">
                    <label class="control-label" for="final">Final Reading</label>
                    <input  name="final" placeholder="" value="{{old('final')}}" class="form-control rounded-0 text-end" 
                      type="number" step="any">
                    <p class="error">@error('final') {{$message}} @enderror</p>
                  </div>

                  <div class="mb-3">
                    <label class="control-label" for="rate">Rate</label>
                    <input  name="rate" placeholder="" value="{{old('rate')}}" class="form-control rounded-0 text-end" 
                      type="number" step="any">
                    <p class="error">@error('rate') {{$message}} @enderror</p>
                  </div>


                  <!-- Select Basic -->
                  <div class="mb-3">
                    <label class="control-label" for="month">Month</label>
                    <div class="">
                      <select id="month" name="month" class="form-select rounded-0">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="Decemeber">Decemeber</option>
                      </select>
                      <p class="error">@error('month') {{$message}} @enderror</p>
                    </div>
                  </div>

                  <!-- Select Basic -->
                  <div class="mb-3">
                    <label class="control-label" for="year">Year</label>
                    <div class="">
                      <select id="year" name="year" class="form-select rounded-0">
                        @php
                        for($i= (date("Y") - 20); $i < (date("Y") + 5); $i++ ): $year=$i; @endphp <option
                          <?=$i==date('Y')? "selected" : '' ?>>
                          <?= $i ?>
                          </option>

                          @php
                          endfor;
                          @endphp
                          <p class="error">@error('year') {{$message}} @enderror</p>
                      </select>
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="mb-3">
                    <div class="d-grid">
                      <button style="background-color: #317874 " type="submit" class="btn btn-primary  rounded-0">Submit</button>
                    </div>
                  </div>
                </div>
              {{-- </fieldset> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection