@extends('Cockpit.Layout.MainLayout')

@section('content')

    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block"><i class="mdi mdi-plus"></i> Create A New event</button>
                      <div class="wrapper mt-4">
                        <div class="item-wrapper d-flex pb-4 border-bottom">
                          <div class="status-wrapper d-flex align-items-start pr-3">
                            <span class="bg-warning rounded-circle p-1 mt-2 mx-auto"></span>
                          </div>
                          <div class="text-wrapper">
                            <h6 class="d-block mb-1">Dentist appoinment:metro</h6>
                            <small class="d-block mb-2"><strong>7 Feb 2017, 16:00</strong></small>
                            <small class="text-gray d-block">First Remainder : 1 Hours min before</small>
                          </div>
                        </div>
                        <div class="item-wrapper d-flex py-4">
                          <div class="status-wrapper d-flex align-items-start pr-3">
                            <span class="bg-success rounded-circle p-1 mt-2 mx-auto"></span>
                          </div>
                          <div class="text-wrapper">
                            <h6 class="d-block mb-1">Job appoinment:metro</h6>
                            <small class="d-block mb-2"><strong>9 Feb 2017, 20:00</strong></small>
                            <small class="text-gray d-block">First Remainder : 1 Hours min before</small>
                          </div>
                        </div>
                      </div>
                      <div class="wrapper">
                        <div class="wrapper d-flex justify-content-between align-items-center mb-4">
                          <div class="d-flex align-items-center">
                            <small class="font-weight-bold mr-2 mb-0">Calendars</small>
                            <div class="badge badge-inverse-primary badge-pill">2</div>
                          </div>
                          <span class="text-gray"><i class="mdi mdi-dots-horizontal"></i></span>
                        </div>
                        <div class="calendar-aside">
                          <div class="list">
                            <img class="img-xs rounded-circle" src="../../images/faces/face2.jpg" alt="profile image" />
                            <span class="user-text">Luke Pachytel</span>
                            <span class="count online ml-auto">
                              <i class="close ml-auto mdi mdi-close-circle-outline"></i>
                            </span>
                          </div>
                          <div class="list">
                            <img class="img-xs rounded-circle" src="../../images/faces/face3.jpg" alt="profile image" />
                            <span class="user-text">Allen Donald</span>
                            <span class="count offline ml-auto">
                              <i class="close ml-auto mdi mdi-close-circle-outline"></i>
                            </span>
                          </div>
                          <div class="list">
                            <img class="img-xs rounded-circle" src="../../images/faces/face4.jpg" alt="profile image" />
                            <span class="user-text">Gabriel Rouge</span>
                            <span class="count offline ml-auto">
                              <i class="close ml-auto mdi mdi-close-circle-outline"></i>
                            </span>
                          </div>
                          <div class="list">
                            <img class="img-xs rounded-circle" src="../../images/faces/face5.jpg" alt="profile image" />
                            <span class="user-text">Marina Michel</span>
                            <span class="count online ml-auto">
                              <i class="close ml-auto mdi mdi-close-circle-outline"></i>
                            </span>
                          </div>
                          <div class="list">
                            <img class="img-xs rounded-circle" src="../../images/faces/face6.jpg" alt="profile image" />
                            <span class="user-text">Amanda Stone</span>
                            <span class="count online ml-auto">
                              <i class="close ml-auto mdi mdi-close-circle-outline"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div id="calendar"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

@endsection