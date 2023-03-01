


<x-layout>
  @extends('layouts.app')

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
  </style>
  <div class="container contain">

    <div class="row bg-dark mt-4">
      <div class="col-md-8  col-md-offset-2 box">
        <div class="card rounded-0  shadow text-reset">
          <div class="card-header">
            <div class="card-title h3 my-2 text-center">Welcome, {{$user->name}}!</div>
          </div>

          <div class="card-body">
            <div class="container-fluid">
              @if (session('status'))
              <div class="alert alert-success">
                {{ session('status')}}
              </div>
              @endif

              <fieldset class="border pb-2">
                <legend class="w-auto mx-3 border-0 mb-0 px-4">Your Details</legend>
                <div class="container-fluid">
                  <div class="lh-1">
                    <dl class="d-flex w-100 my-0">
                      <dt class="col-auto pe-2">Connection ID:</dt>
                      <dd class="col-auto flex-shrink-1 flex-grow-1">{{$user->id}}</dd>
                    </dl>
                    <dl class="d-flex w-100 my-0">
                      <dt class="col-auto pe-2">Name:</dt>
                      <dd class="col-auto flex-shrink-1 flex-grow-1">{{$user->name}}</dd>
                    </dl>
                    <dl class="d-flex w-100 my-0">
                      <dt class="col-auto pe-2">Email:</dt>
                      <dd class="col-auto flex-shrink-1 flex-grow-1">{{$user->email}}</dd>
                    </dl>
                    <dl class="d-flex w-100 my-0">
                      <dt class="col-auto pe-2">Billing Address:</dt>
                      <dd class="col-auto flex-shrink-1 flex-grow-1">{{$user->address}}</dd>
                    </dl>
                  </div>
                </div>
              </fieldset>
              <div class="clear-fix"></div>
              <div class="row text-center">
                <h3 class="text-center my-2 pt-3">You Have a pending Bill Amount of:
                  <span class="text-muted"> {{ $bills->where('status', 'pending')->sum('amount') }} FCFA </span>
                </h3>
              </div>
              <center>
                <hr class="bg-primary bg-opacity-100" width="40%" style="opacity: 1; height:2px my-1">
              </center>
              <div class="clear-fix"></div>

              <fieldset class="border pb-4">
                <legend class="w-auto mx-3 border-0 mb-0 px-4">Payment</legend>
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                      <div class="d-grid">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">MTN MOMO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                 <input type="number" class="form-control" placeholder="Enter Your Momo Number">
                              </div>
                              <div class="modal-footer">
                                <a href="/pay" type="button" style="background-color: #317874 "
                                  class="btn btn-primary">Next</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- End Model --}}
                        <button type="button" style="background-color: #317874 "
                          class="btn btn-primary rounded-pill px-4" data-toggle="modal" data-target="#exampleModal">
                          Pay</button>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <div class="clear-fix py-3"></div>
              <fieldset class="border pb-4">
                <legend class="w-auto mx-3 border-0 mb-0 px-4">Issued Bills</legend>
                <div class="container-fluid">
                  <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Month</th>
                        <th scope="col">Year</th>
                        <th scope="col">Status</th>
                        <th scope="col">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($bills as $bill)

                      <tr>
                        <td>{{ $bill->month }}</td>
                        <td>{{ $bill->year }}</td>
                        <td>{{ $bill->status }}</td>
                        <td>{{ $bill->amount }} FCFA</td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </fieldset>
              <div class="clear-fix mb-3"></div>
              <fieldset class="border pb-4">
                <legend class="w-auto mx-3 border-0 mb-0 px-4">Download Bills</legend>
                <div class="container-fluid">
                  <form class="form-inline" action="" method="POST" target="_blank">
                    {{csrf_field()}}
                    <!-- Form Name -->
                    <div class="row align-items-end">
                      <!-- Select Basic -->
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                        <label class=" control-label" for="month">Month</label>
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
                      </div>

                      <!-- Select Basic -->
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                        <label class=" control-label" for="year">Year</label>
                        <select id="year" name="year" class="form-select rounded-0">
                          @php
                          for($i= (date("Y") - 20); $i < (date("Y") + 5); $i++ ): $year=$i; @endphp <option
                            <?=$i==date('Y')? "selected" : '' ?>>
                            <?= $i ?>
                            </option>

                            @php
                            endfor;
                            @endphp
                        </select>
                      </div>
                      <!-- Button -->
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                        <div class="d-grid">
                          <button style="background-color: #317874 " type="submit"
                            class="btn btn-sm text-white rounded-0 bg-gradient">Download</button>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </fieldset>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-layout>