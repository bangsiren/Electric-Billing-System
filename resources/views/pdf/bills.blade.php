
<style>
    #app {
        width: 100%;
        height: 100vh;
        .contain {
        display: flex;
        justify-content: center;
        align-items: center;
        justify-items: center;
      }
  
      .box {
        width: 100%;
      }
    }
</style>

<body>

    <div class="container contain">
  
      <div class="row bg-dark mt-4">
        <div class="col-md-8  col-md-offset-2 box">
          <div class="card rounded-0  shadow text-reset">
            <div class="card-header">
              <div class="card-title h3 my-2 text-center">{{$user->name}}!</div>
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
                  <h3 class="text-center my-2 pt-3 ">You Have a pending Bill Amount of:
                    <span class="text-muted"> {{ $bills->where('status', 'pending')->sum('amount') }} FCFA </span>
                  </h3>
                </div>
                <center>
                  <hr class="bg-primary bg-opacity-100" width="40%" style="opacity: 1; height:2px my-1">
                </center>
                <div class="clear-fix"></div>
  

  
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
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

