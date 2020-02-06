<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ElibMo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
.fas-3x {
    size: 50px;
    color: brown;
}
</style>

<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    function getTimeStamp() {
        var now = new Date();
        return (now.getHours() + ':' +
            ((now.getMinutes() < 10) ? ("0" + now.getMinutes()) : (now.getMinutes())) + ':' + ((now.getSeconds() <
                10) ? ("0" + now.getSeconds()) : (now.getSeconds())));
    }

    function setTime() {
        document.getElementById('clockin').value = getTimeStamp();
    }
    </script>

    <!-- <onload="setTime()"> -->

    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form method="post" action="">
                    <div class="card shadow">

                        <div class="car-header bg-success pt-2">
                            <div class="card-title font-weight-bold text-white text-center">Time Tracker</div>
                        </div>

                        <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                            @endif
                            <?php
                                date_default_timezone_set('Asia/Manila');
                                $todays_date = date("y-m-d h:i:sa");
                                $today = strtotime($todays_date);
                                echo "<br>";echo "<br>";
                                echo "Current time ";
                                echo "<br>";
                                echo date("Y-m-d h:i:sa", $today);

                                ?>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button"
                                            onclick="setTime()">Clock In</button>

                                    </div>
                                    <input id="clockin" class="form-control" name="clockin" placeholder=""
                                        aria-label="">
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Break</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">Start</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">End</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon1">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password"> Take Another Break </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button" action="{{route('getTime')}}">Break</button>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">Clock Out</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label=""
                                        aria-describedby="basic-addon1">

                                </div>
                            </div>
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    @foreach($users as $user)
                                    <option value="">{{$user['firstname']}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Name</button>
                                </div>
                            </div>
                            <label>Total Time Work</label>
                            <input type="text" class="form-control" placeholder="" aria-label=""
                                aria-describedby="basic-addon1">
                                <label>Hours left before timeout</label>
                            <input type="text" class="form-control" placeholder="" aria-label=""
                                aria-describedby="basic-addon1">
                            
                                <label>ToTal break used</label>
                            <input type="text" class="form-control" placeholder="" aria-label=""
                                aria-describedby="basic-addon1">
                                
                        </div>

                    
                            
                        @csrf
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>