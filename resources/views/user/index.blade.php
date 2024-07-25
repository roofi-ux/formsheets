@extends('_layout_dashboard', ['title' => 'Dashboard'])
@section('contents')
  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Multi Columns Form</h5>

            <!-- Multi Columns Form -->
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Shift</label>
                {{-- <input type="email" class="form-control" id="inputEmail5"> --}}
                <select id="inputEmail5" class="form-control">
                  <option value="">--Silahkan pilih shift anda--</option>
                  <option value="shift 1">Shift 1</option>
                  <option value="shift 2">Shift 2</option>
                  <option value="shift 3">Shift 3</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Kepala Regu</label>
                {{-- <input type="password" class="form-control" id="inputPassword5"> --}}
                <select id="inputEmail5" class="form-control">
                  <option value="">--Silahkan Karu anda--</option>
                  <option value="Panji Hakiki Fauzi">Panji Hakiki Fauzi</option>
                  <option value="M Agus Nurul Febrianto">M Agus Nurul Febrianto</option>
                  <option value="Moch Shobirin">Moch Shobirin</option>
                </select>
              </div>
              <div class="col-6">
                <label for="inputAddress5" class="form-label">Operator</label>
                <input type="text" class="form-control" id="inputAddres5s" placeholder="Nama Operatornya dong">

              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Jenis Produk</label>
                {{-- <input type="password" class="form-control" id="inputPassword5"> --}}
                <select id="inputEmail5" class="form-control">
                  <option value="">--Silahkan pilih produk anda--</option>
                  <option value="Blackmond">Blackmond</option>
                  <option value="Blackmond Mini">Blackmond Mini</option>
                  <option value="Pumberry">Pumberry</option>
                  <option value="Pumberry Mini">Pumberry Mini</option>
                  <option value="Blackthins">Blackthins</option>
                  <option value="Blackthins Mini">Blackthins Mini</option>
                  <option value="Cheesethins">Cheesethins</option>
                </select>
              </div>

              <div class="text-right">
                <button type="submit" class="btn btn-primary">Next</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End Multi Columns Form -->

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
@endpush
