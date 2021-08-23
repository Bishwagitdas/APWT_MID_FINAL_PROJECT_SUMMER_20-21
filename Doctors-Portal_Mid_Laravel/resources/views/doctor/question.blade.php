@extends('master')

@section('title')
<title>Doctor ViewQuestion</title>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"># </th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Date</th>
                            <th scope="col">question</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>June 20, 2021</td>
                            <td>i have have a question? </td>
                             
                         <td></a><a href="/questiondetails"><button type="button" class="btn btn-success">Details</button></a></td>
                        </tr>
                        <tr>

                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>June 20, 2021</td>
                            <td>i have have a question?</td>

                            <td></a><a href="/questiondetails"><button type="button" class="btn btn-success">Details</button></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>June 20, 2021</td>
                            <td>i have have a question?</td>
                        

                            <td></a><a href="/questiondetails"><button type="button" class="btn btn-success">Details</button></a></td>
                        </tr>
                        <tr>

                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>June 20, 2021</td>
                            <td>i have have a question?</td>
                            
                            <td></a><a href="/questiondetails"><button type="button" class="btn btn-success">Details</button></a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>June 20, 2021</td>
                            <td>i have have a question?</td>
                            <td></a><a href="/questiondetails"><button type="button" class="btn btn-success">Details</button></a></td>
                        </tr>
                        <tr>
                    
                            <th scope="row">6</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>June 20, 2021</td>
                            <td>i have have a question?</td>
                             <!-- <td><a href="">accept |</a><a href="">reject</a></td> -->

                             <td></a><a href="/questiondetails"><button type="button" class="btn btn-success">Details</button></a></td>
                        </tr>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
     
        </div>
    </div>
</div>
@endsection

