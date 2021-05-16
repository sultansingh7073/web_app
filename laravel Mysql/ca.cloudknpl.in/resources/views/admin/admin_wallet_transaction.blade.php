@extends('layouts.master')


@section('title','Client Registration')



@section('content')
<style type="text/css">
  body {
  margin: 0;
  padding: 0;
  background-color: #004882;
}

.box {
  position: absolute;
  top: 40%;
  left: 20%;
  transform: translate(-50%, -50%);
}

.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box::before {
  content: "\f13a";
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}

.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

.box select option {
  padding: 30px;
}
</style>
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div align="right" class="mr-5">
                  <a href="Regclient" class="btn btn-info" role="button">+ Add Student</a>

                </div>
                <h4 class="card-title"><strong>List All Document</strong>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ml-3">
                <form method="post" action="{{ url('wallet_list_tra') }}">
                  {{csrf_field()}}
                  <table>
                    <tr>
                      <th>Select Client</th>
                      <th>
                        <select name="client_list">
                          <option>Client List</option>
                          @foreach($data_user as $datavalue)
                          <option value="{{ $datavalue->id }}">{{ $datavalue->name }}</option>
                          @endforeach
                        </select>
                      </th>
                    </tr>
                  </table><br><br>
                </form>
                <div class="table-responsive ml-3">
                  <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid  lightgrey; ">
                      <th>Client Name</th>
                      <th>Date</th>
                      <th>Deposit Amount</th>
                      <th>Withdrawal Amount</th>
                      <th>Document Name</th>
                    </thead>
                     <tbody>
                    </tbody>
                  </table>
  </div>

  @endsection