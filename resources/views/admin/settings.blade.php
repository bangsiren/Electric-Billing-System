@extends('layouts.admin')

@section('content')
Current Rate: {{ auth()->user()->rate }}
<form class="form-inline" action="{{ route('admin.settings')}}" method="POST">
    @csrf
    @method('put')

    <fieldset class="border pb-3 mb-3">

      <!-- Form Name -->
      <legend class="w-auto mx-3 px-4 border-0 mt-n4 h4 fw-bolder">Update Electricty Rate</legend>
      <div class="container-fluid">
        <p class="current">Current Rate = <span>&#x20B1; </span></p>

        <!-- Text input-->
        <div class="mb-3">
          <label class="control-label" for="rate">New Rate</label>
          <input id="rate" name="rate" placeholder="" class="form-control rounded-0 text-end"
            type="number" step="any">
        </div>
        <!-- Button -->
        <div class="mb-3">
          <div class="d-grid">
            
            <button type="submit" class="btn btn-primary bg-gradient rounded-0">Update</button>
          </div>
        </div>
      </div>
    </fieldset>
  </form>
  
@endsection