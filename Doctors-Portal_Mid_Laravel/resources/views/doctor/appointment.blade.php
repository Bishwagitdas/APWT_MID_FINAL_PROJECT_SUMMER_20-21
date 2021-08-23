
@extends('master')

@section('title')
<title>Doctor viewAppointment</title>
@endsection
@section('mycss')
<style>

    body { background:rgb(171, 235, 198 ); }
  
</style>

@endsection

@section('myjsfiles')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
    @endsection


@section('mycontent')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2>pending appointment</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Date</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>pending</td>

                        <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                        </a><a href=""><button type="button" class="btn btn-success">accept</button>
                        </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                       <!--  <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Otto</td>
                        <td>23</td>
                        <td><a href="">Edit |</a><a href="">Delete |</a> <a href="">View</a></td> -->

                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>pending</td>

                        <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                        </a><a href=""><button type="button" class="btn btn-success">accept</button>
                        </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>pending</td>

                        <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                        </a><a href=""><button type="button" class="btn btn-success">accept</button>
                        </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                       <!--  <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Otto</td>
                        <td>23</td>
                        <td><a href="">Edit |</a><a href="">Delete |</a> <a href="">View</a></td> -->

                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>pending</td>

                        <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                        </a><a href=""><button type="button" class="btn btn-success">accept</button>
                        </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>pending</td>

                        <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                        </a><a href=""><button type="button" class="btn btn-success">accept</button>
                        </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>

                        <th scope="row">6</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>pending</td>

                        <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                        </a><a href=""><button type="button" class="btn btn-success">accept</button>
                        </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    
                </tbody>
            </table>
            <h2>prosessing appointment</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Date</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>accept</td>

                       <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>

                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>accept</td>

                       <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>accept</td>

                       <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>

                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>accept</td>

                       <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>accept</td>

                       <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>accept</td>

                       <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a><a href=""><button type="button" class="btn btn-danger">Reject</button></a></td>
                    </tr>
                    
                </tbody>
            </table>
            <h2>Cancel appointment</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Date</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>Reject</td>

                         <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a></a><a href=""><button type="button" class="btn btn-success">accept</button></a></td>
                    </tr>
                    <tr>
                     

                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>Reject</td>


                         <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a></a><a href=""><button type="button" class="btn btn-success">accept</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>Reject</td>


                         <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a></a><a href=""><button type="button" class="btn btn-success">accept</button></a></td>
                    </tr>
                    <tr>

                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>Reject</td>


                         <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a></a><a href=""><button type="button" class="btn btn-success">accept</button></a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>Reject</td>


                         <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a></a><a href=""><button type="button" class="btn btn-success">accept</button></a></td>
                    </tr>
                    <tr>
                      

                        <th scope="row">6</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>June 20, 2021</td>
                        <td>Reject</td>


                         <td><a href="/appointmentdetails"><button type="button" class="btn btn-primary">Details</button>
                       </a></a><a href=""><button type="button" class="btn btn-success">accept</button></a></td>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
 

        </div>
    </div>
</div>
@endsection

