<!DOCTYPE html>
<html>
<head>
    <title>R&R Transportation Inc.</title>
      <link rel="stylesheet" type="text/css" href="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
      
.co_employment{
  padding: 70px 0px;
  background-color: #f7f7f7;
}
.first-section{
  margin: 35px 0px;
}
.first-section h2{
  padding: 9px 20px;
    background-color: #f17ac1;
    font-size: 17px;
    color: white;
    text-align: center;
    text-transform: uppercase;
    margin: 0;
}
.employee-form{
  border-top: unset;
}
.employee-form h4 {
     margin: 2rem 0rem 1rem;
}
.employee-form  .table {
    margin-bottom: 0!important;
}
.table-image td, .table-image th {
    vertical-align: middle;
}
.table td, .table th {
    padding: 5px 12px!important;
    vertical-align:middle!important;
}
.table th{
  text-transform: uppercase;
}
.table td{
  vertical-align:top!important;
}
.head_1{
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
}
.text_1 input {
    border: unset;
    width: 100%;
    background: transparent;
    height: 35px;
    font-size: 15px;
    font-weight: 400;
}
.text_1 input:focus{
  outline: none;
}
.text_1 input[type="date"]::-webkit-calendar-picker-indicator {
  filter: unset;
}
.add-textfield {
    display: flex;
    flex-wrap: wrap;
    margin-top: 7px;
    padding-left: 7px;
}
.add-textfield p {
    font-size: 16px;
    margin: 0;
}
.checkbox_2 {
    width: 25%;
    text-align: right;
}
.checkbox_2 label {
    margin: 0px 11px;
    font-size: 17px;
}
.checkbox_2 span{
  padding-left: 9px;
}
.text_1 textarea {
    border: unset;
    width: 100%;
    background: transparent;
    font-size: 15px;
    font-weight: 400;
}
.text_1 textarea:focus{
  outline: none;
}
.employee-form .info_1 {
    border: 1px solid #ccc;
    border-top: unset;
    border-bottom: unset;
    margin: 0;
    padding: 11px;
    font-size: 15px;
    letter-spacing: 0.5px;
    line-height: 22px;
}
.info_1 label{
  margin-left: 10px;
  margin-bottom: 0;
}
.info_2{
  text-align: center;
}
.explain{
  font-size: 15px;
    letter-spacing: 0.5px;
    line-height: 22px;
    display: none;
    padding-left: 7px;
}
.explain p{
  margin: 5px 0px 0px;
}
.explain textarea {
    border: 1px solid #ccc;
    background: transparent;
    padding: 10px;
}
.add-textfield1 p{
  width: 70%;
}
.employee-form .info_3{
  border: unset;
  /*margin-bottom: 10px;*/
}
.employee-form .th1{
  background: rgb(128 128 128 / 20%);
}
.table-1 {
    margin-bottom: 30px;
}
.table-1:last-child{
  margin: 0;
}
.table-1 .add-textfield {
    border: 1px solid #ccc;
    border-top: unset;
    margin: 0;
    padding: 10px;
}
.last-quali{
  border: 1px solid #ccc;
  padding: 10px;
}
.employee-form.read {
    border: 1px solid #ccc;
    padding: 20px;
}
.read p{
  font-size: 15px;
  letter-spacing: 0.5px;
  line-height: 24px;
}
.read li{
  font-size: 15px;
  letter-spacing: 0.5px;
  line-height: 24px;
}
.explain_1 {
    width: 100%;
    display: block;
}
.explain_1 textarea {
    width: 100%;
    border: 1px solid #ccc;
    background: transparent;
    padding: 10px;
}
.explain_1 textarea:focus{
    outline: none;
}

@media only screen and (min-width: 1024px) and (max-width: 1260px){
  .co_employment .title {
        font-size: 29px;
        line-height: 35px;
    }
    .employee-form .info_3 {
        line-height: 25px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1023px){
    .co_employment .title {
        font-size: 26px;
    }
    /*.employee-form {
        overflow-x: auto;
    }*/
}

@media only screen and (max-width: 767px){
    .co_employment .title {
        font-size: 26px;
    }
   /* .employee-form {
        overflow-x: auto;
    }*/
    .add-textfield p {
        width: 56%;
        font-size: 14px;
    }
    .checkbox_2 {
        width: 44%;
    }
    .checkbox_2 label {
        margin: 0px 4px;
        font-size: 15px;
    }
}

@media only screen and (max-width: 320px){
    .co_employment .title {
        font-size: 18px;
    }
}


      
    </style>

</head>
<body class="body"> 

   <div class="co_employment">
        <div class="container">
            <div class="title-head">
                <h1 class="title">COMMERCIAL DRIVER EMPLOYMENT APPLICATION</h1>
            </div>
         <form  method="post"  action="{{url('/employmentappliction')}}">
            @csrf
            <div class="first-section">
                <h2>APPLICANT INFORMATION</h2>
                <div class="employee-form">
                    @foreach($app_personalinfo as $ap)
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <!-- <thead>
                                        <tr>
                                            <th scope="col">Day</th>
                                            <th scope="col">Article Name</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Shares</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead> -->

                               
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="head_1">First Name</th>
                                            <td class="text_1"><input type="text" name="fname"  value="{{$ap->fname}}" readonly></td>
                                            <th scope="row" class="head_1">Last Name</th>
                                            <td class="text_1"><input type="text" name="lname" value="{{$ap->lname}}" readonly></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1">Phone Number</th>
                                            <td class="text_1"><input type="number" name="mobileno" value="{{$ap->mobileno}}" readonly></td>
                                            <th scope="row" class="head_1">Email</th>
                                            <td class="text_1"><input type="email" name="email" value="{{$ap->email}}" readonly></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1">DATE OF BIRTH</th>
                                            <td class="text_1"><input type="date" name="birthdate" value="{{$ap->dob}}" readonly></td>
                                            <th scope="row" class="head_1">DATE OF APPLICATION</th>
                                           
                                            <td class="text_1"><input type="date" name="applicationdate" value="{{$ap->application_date}}" readonly></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1">POSITION APPLIED FOR</th>
                                            <td class="text_1"><input type="text" name="position" value="{{$ap->position}}" readonly></td>
                                            <th scope="row" class="head_1">DATE AVAILABLE FOR WORK</th>
                                            <td class="text_1"><input type="date" name="workdate" value="{{$ap->work_date}}" readonly></td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                            </div>
                                <div class="add-textfield">
                                    <p>Do you have legal right to work in the United States?</p>
                                    <div class="checkbox_2">

                                        @if($ap->workpermit==1)
                                       <label><input type="radio" class="radio" value="1" id="1" name="permission" checked readonly /><span>Yes</span></label  >
                                         <label><input type="radio" class="radio" value="0" id="0" name="permission" / readonly=""><span>No</span></label>
                                        @else
                                        <label><input type="radio" class="radio" value="1" id="1" name="permission"  readonly /><span>Yes</span></label>
                                        <label><input type="radio" class="radio" value="0" id="0" name="permission" checked  readonly/><span>No</span></label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                  @endforeach
                </div>
            </div>
            <div class="first-section">
                <h2>PREVIOUS THREE YEARS RESIDENCY</h2>
                <div class="employee-form">
                
                        <div class="row">
                            <div class="col-12">
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">STREET</th>
                                            <th scope="col">CITY</th>
                                            <th scope="col">STATE</th>
                                            <th scope="col">ZIP CODE</th>
                                            <th scope="col"># OF YEARS AT ADDRESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                      @foreach($app_residency as $r)
                                        <tr>
                                            <th scope="row" class="head_1" name="current_status" value="Current">{{$r->status}}</th>
                                            <td class="text_1"><textarea type="text" name="current_street" value="{{$r->street}}" rows="2" readonly>{{$r->street}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="current_city" value="{{$r->city}}" readonly>{{$r->city}}</textarea></td>
                                            <td class="text_1"><input type="text" name="current_state" value="{{$r->state}}"readonly></td>
                                            <td class="text_1"><input type="number" name="current_zipcode" value="{{$r->zipcode}}" readonly></textarea></td>
                                            <td class="text_1"><textarea type="text" name="current_address" value="{{$r->time}}" readonly>{{$r->time}}</textarea></td>
                                        </tr>
                                       @endforeach
                               
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                  
                   
                </div>
            </div>
            <div class="first-section">
                <h2>LICENSE INFORMATION</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1">No person who operates a commercial motor vehicle shall at any time have more than one driver’s license (49 CFR 383.21). I certify that I do not have more than one motor vehicle license, the information for which is listed below. Include all licenses held for the past 3 years; attach additional sheets if needed.</p>
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">STATE</th>
                                            <th scope="col">LICENSE #</th>
                                            <th scope="col">TYPE/CLASS</th>
                                            <th scope="col">ENDORSEMENTS</th>
                                            <th scope="col">EXPIRATION DATE</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>

                                      @foreach($app_currentlicense as $ac)
                                        <tr>
                                            <td class="text_1"><input type="text" name="currentlicense_state" value="{{$ac->state}}" readonly></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_licenseno" value="{{$ac->licenseno}}" rows="2" readonly>{{$ac->licenseno}} </textarea></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_class" value="{{$ac->type}}"readonly>{{$ac->type}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_endorsement" rows="2"  value="{{$ac->endorsement}}"readonly> {{$ac->endorsement}}</textarea></td>
                                            <td class="text_1"><input type="date" name="currentlicense_expriedate" value="{{$ac->expire_date}}" readonly></td>
                                        </tr>   
                                      @endforeach

                                        <tr><td colspan="5" style="text-align: center;">PREVIOUSLY HELD LICENSES</td></tr>




                                      @foreach($app_previouslicense as $ap)
                                        <tr>
                                            <td class="text_1"><input type="text" name="currentlicense_state" value="{{$ap->state}}" readonly></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_licenseno" value="{{$ap->licenseno}}" rows="2" readonly>{{$ap->licenseno}} </textarea></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_class" value="{{$ap->type}}"readonly>{{$ap->type}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="currentlicense_endorsement" rows="2"  value="{{$ap->endorsement}}"readonly> {{$ap->endorsement}}</textarea></td>
                                            <td class="text_1"><input type="date" name="currentlicense_expriedate" value="{{$ap->expire_date}}" readonly></td>
                                        </tr>   
                                      @endforeach



                                       <!--  <tr>
                                           <input type="hidden" name="previous1license_stauts" vlaue="previous1">
                                            <td class="text_1"><input type="text" name="previous1license_state"></td>
                                            <td class="text_1"><textarea type="text" name="previous1license_licenseno" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous1license_class"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous1license_endorsement" rows="2"></textarea></td>
                                            <td class="text_1"><input type="date" name="previous1license_expriedate"></td>
                                        </tr>
                                        <tr>
                                           <input type="hidden" name="previous2license_stauts" vlaue="previous2">
                                            <td class="text_1"><input type="text" name="previous2license_state"></td>
                                            <td class="text_1"><textarea type="text" name="previous2license_licenseno" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous2license_class"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="previous2license_endorsement" rows="2"></textarea></td>
                                            <td class="text_1"><input type="date" name="previous2license_expriedate"></td>
                                        </tr> -->
                                    </tbody>
                                 
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>DRIVING EXPERIENCE</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">CLASS OF EQUIPMENT</th>
                                            <th scope="col">TYPE OF EQUIPMENT (VAN, TANK, FLAT, ETC.)</th>
                                            <th scope="col">DATE FROM</th>
                                            <th scope="col">DATE TO</th>
                                            <th scope="col">APPROX # OF MILES (TOTAL)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($app_experience as $ae)
                                        <tr>  
                                            <th scope="row" class="head_1" name="straight_class" value="{{$ae->class}}" readonly>{{$ae->class}}</th>
                                            <td class="text_1"><textarea type="text" name="straight_equipment" rows="2" readonly>{{$ae-> type}}</textarea></td>
                                            <td class="text_1"><input type="date" name="straight_fromdate" value="{{$ae->from_date}}" readonly></td>
                                            <td class="text_1"><input type="date" name="straight_todate" value="{{$ae->to_date}}" readonly></td>
                                            <td class="text_1"><input type="number" name="straight_totalmile" value="{{$ae->approx_mile}}" readonly></td>
                                        </tr>
                                        @endforeach
                                       <!--  <tr>
                                            <th scope="row" class="head_1" name="semi_class" value="STRACTOR & SEMI-TRAILER">TRACTOR & SEMI-TRAILER</th>
                                             <td class="text_1"><textarea type="text" name="semi_equipment" rows="2"></textarea></td>
                                            <td class="text_1"><input type="date" name="semi_fromdate"></td>
                                            <td class="text_1"><input type="date" name="semi_todate"></td>
                                            <td class="text_1"><input type="number" name="semi_totalmile"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="tailer_class" value="TRACTOR & 2 TRAILERS">TRACTOR & 2 TRAILERS</th>
                                            <td class="text_1"><textarea type="text" name="tailer_equipment" rows="2"></textarea></td>
                                            <td class="text_1"><input type="date" name="tailer_fromdate"></td>
                                            <td class="text_1"><input type="date" name="tailer_todate"></td>
                                            <td class="text_1"><input type="number" name="tailer_totalmile"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="tanker_class" value="TRACTOR & 2 TRAILERS">TRACTOR & TANKER</th>
                                            <td class="text_1"><textarea type="text" name="tanker_equipment" rows="2"></textarea></td>
                                            <td class="text_1"><input type="date" name="tanker_fromdate"></td>
                                            <td class="text_1"><input type="date" name="tanker_todate"></td>
                                            <td class="text_1"><input type="number" name="tanker_totalmile"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="head_1" name="other_class" value="TRACTOR & 2 TRAILERS">OTHER</th>
                                           <td class="text_1"><textarea type="text" name="other_equipment" rows="2"></textarea></td>
                                            <td class="text_1"><input type="date" name="other_fromdate"></td>
                                            <td class="text_1"><input type="date" name="other_todate"></td>
                                            <td class="text_1"><input type="number" name="other_totalmile"></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>ACCIDENT RECORD FOR THE PAST 3 YEARS</h2>
                <div class="employee-form">
                  
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1 info_2">Attach additional sheet if more space is needed. Check this box if none  <label><input type="checkbox" class="radio" value="1" name="fooby[1][]" /></label> </p>
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">DATES(List most recent first)</th>
                                            <th scope="col">NATURE OF ACCIDENT (Head-on, rear-end, upset, etc.)</th>
                                            <th scope="col"># FATALITIES</th>
                                            <th scope="col"># INJURIES</th>
                                            <th scope="col">CHEMICAL SPILLS (Y/N)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach($app_accidentrecord as $aa )
                                        <tr>
                                            <input type="hidden" name="accidentrecord1" value="{{$aa->status}}" readonly="" >  
                                            <td class="text_1"><input type="date" name="record1_date"value="{{$aa->date}}" readonly></td>
                                            <td class="text_1"><textarea type="text" name="record1_accident" rows="2" value="{{$aa->nature}}" readonly>{{$aa->nature}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="record1_fatalities" rows="2" value="{{$aa->fatalities}}" readonly>{{$aa->fatalities}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="record1_injuries" rows="2" value="{{$aa->injuries}}" readonly>{{$aa->injuries}}</textarea></td>
                                            <td class="text_1"><input type="tex" name="record1_spills" value="{{$aa->chemicalspill}}" readonly></td>
                                        </tr>
                                        @endforeach
                                       <!--  <tr> 
                                            <input type="hidden" name="accidentrecord2" value="record2" >   
                                            <td class="text_1"><input type="date" name="record2_date"></td>
                                            <td class="text_1"><textarea type="text" name="record2_accident" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record2_fatalities" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record2_injuries" rows="2"></textarea></td>
                                            <td class="text_1"><input type="tex" name="record2_spills"></td>
                                        </tr>
                                        <tr>
                                            <input type="hidden" name="accidentrecord3" value="record3" >    
                                            <td class="text_1"><input type="date" name="record3_date"></td>
                                            <td class="text_1"><textarea type="text" name="record3_accident" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record3_fatalities" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="record3_injuries" rows="2"></textarea></td>
                                            <td class="text_1"><input type="tex" name="record3_spills"></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="first-section">
                <h2>TRAFFIC CONVICTIONS AND FORFEITURES FOR THE PAST 3 YEARS (OTHER THAN PARKING VIOLATIONS)</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1 info_2">Attach additional sheet if more space is needed. Check this box if none  <label><input type="checkbox" class="radio" value="1" name="fooby[1][]" /></label> </p>
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">DATE CONVICTED <br> (Month/Year)</th>
                                            <th scope="col">VIOLATION</th>
                                            <th scope="col">STATE OF VIOLATION</th>
                                            <th scope="col">PENALTY (Forfeited bond, collateral, and/or points)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach($app_traffic as $at )   
                                        <tr>
                                            <input type="hidden" name="convicted1" value="{{$at->status}}" readonly>
                                            <td class="text_1"><input type="month" name="convicted1_month" value="{{$at->date}}" readonly></td>
                                            <td class="text_1"><textarea type="text" name="convicted1_violation" rows="2" value="{{$at->violation}}" readonly>{{$at->violation}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted1_stateviolation" rows="2" value="{{$at->state}}" readonly>{{$at->state}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted1_penalty" rows="2" value="{{$at->penlty}}" readonly>{{$at->penlty}}</textarea></td>
                                        </tr>
                                        @endforeach
                                       <!--  <tr> 
                                         <input type="hidden" name="convicted2" value="convicted2"> 
                                            <td class="text_1"><input type="month" name="convicted2_month"></td>
                                            <td class="text_1"><textarea type="text" name="convicted2_violation" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted2_stateviolation" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted2_penalty" rows="2"></textarea></td>
                                        </tr>
                                        <tr>    
                                         <input type="hidden" name="convicted3" value="convicted3"> 
                                            <td class="text_1"><input type="month" name="convicted3_month"></td>
                                            <td class="text_1"><textarea type="text" name="convicted3_violation" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted3_stateviolation" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted3_penalty" rows="2"></textarea></td>
                                        </tr>
                                        <tr> 
                                          <input type="hidden" name="convicted4" value="convicted4"> 
                                            <td class="text_1"><input type="month" name="convicted4_month"></td>
                                            <td class="text_1"><textarea type="text" name="convicted4_violation" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted4_stateviolation" rows="2"></textarea></td>
                                            <td class="text_1"><textarea type="text" name="convicted4_penalty" rows="2"></textarea></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>

                            @foreach($app_restriction as $ar )
                                <div class="add-textfield">
                                    <p>Have you ever been denied a license, permit, or privilege to operate a motor vehicle?</p>
                                    <div class="checkbox_2">
                                        @if($ar->restriction==1)
                                        <label><input class="explain-box" type="checkbox" class="radio" value="1" name="restriction" checked /><span>Yes</span></label>
                                        <label><input class="explain-box1" type="checkbox" class="radio" value="0" name="restriction" /><span>No</span></label>
                                       
                                        @else

                                        <label><input class="explain-box" type="checkbox" class="radio" value="1" name="restriction"  /><span>Yes</span></label>
                                        <label><input class="explain-box1" type="checkbox" class="radio" value="0" name="restriction"checked /><span>No</span></label>
                                       @endif
                                    </div>
                                @if($ar->restriction==1)
                                     <div class="explain1  explain_1">
                                          <p>If yes, explain<textarea type="text" name="restriction_description" value="{{$ar->restriction_description}}" readonly rows="3">{{$ar->restriction_description}}</textarea></p>
                                         </div>
                                @endif         


                                </div>
                            
                                
                                <div class="add-textfield">
                                    <p>Has any license, permit, or privilege ever been suspended or revoked?</p>
                                    <div class="checkbox_2">
                                     @if($ar->suspended==1)
                                        <label><input class="explain-box2" type="checkbox" class="radio" value="1" name="suspended" checked /><span>Yes</span></label>
                                        <label><input class="explain-box3" type="checkbox" class="radio" value="0" name="suspended" /><span>No</span></label>

                                        
                                        @else

                                         <label><input class="explain-box2" type="checkbox" class="radio" value="1" name="suspended"  /><span>Yes</span></label>
                                        <label><input class="explain-box3" type="checkbox" class="radio" value="0" name="suspended" checked /><span>No</span></label>

                                        @endif
                                    </div>


                                   @if($ar->suspended==1)
                                      <div class=" explain2 explain_1">

                                    <p>If yes, explain<textarea type="text" name="suspended_description"  value="{{$ar->suspended_description}}" rows="3" readonly>{{$ar->suspended_description}}</textarea></p>
                                    </div>
                                    @endif


                                </div>
                              


                                 @endforeach
                                
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="first-section">
                <h2>EMPLOYMENT HISTORY</h2>
                <div class="employee-form">
                     @foreach($app_history as $ah)
                        <div class="row">
                            <div class="col-12">
                                <p class="info_1 info_3">The Federal Motor Carrier Safety Regulations (49 CFR 391.21)require that all applicants wishing to drive a commercial vehicle list all employment for the last three (3) years.<strong> In addition, if you have driven a commercial vehicle previously, you must provide employment history for an additional seven (7) years (for a total of ten (10) years). Any gaps in employment in excess of one (1) month must be explained.</strong></p>

                                <p class="info_1 info_3">Start with the last or current position, including any military experience, and work  backward(attach separate sheets if necessary). You are required to list the complete mailing address, including street number, city, state, zip; and complete all other information.</p>
                                <div class="table-1">
                                     <div class="table-responsive">
                                     
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="th1" scope="col" colspan="4">{{$ah->status}} (MOST RECENT) EMPLOYER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="current" value="{{$ah->status}}">
                                                <th scope="row" class="head_1">Name</th>
                                                <td class="text_1"><input type="text" name="current_cname" value="{{$ah->name}}" readonly></td>
                                                <th scope="row" class="head_1">Phone Number</th>
                                                <td class="text_1"><input type="number" name="current_cmobileno" value="{{$ah->mobileno}}" readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">POSITION HELD</th>
                                                <td class="text_1"><input type="text" name="current_position"  value="{{$ah->position}}"readonly></td>
                                                <th scope="row" class="head_1">Salary</th>
                                                <td class="text_1"><input type="number" name="current_salary"  value="{{$ah->salary}}"readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">address</th>
                                                <td class="text_1"><textarea type="text" name="current_caddress" rows="3" value="{{$ah->address}}"readonly>{{$ah->address}}</textarea></td>
                                                <th scope="row" class="head_1">REASON FOR LEAVING</th>
                                                <td class="text_1"><textarea type="text" name="current_reason" rows="3" value="{{$ah->reason}}"readonly>{{$ah->reason}}</textarea></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">From month/year</th>
                                                <td class="text_1"><input type="month" name="current_frommonth" value="{{$ah->job_from}}"readonly></td>
                                                <th scope="row" class="head_1">to month/year</th>
                                                <td class="text_1"><input type="month" name="current_tomonth" value="{{$ah->job_to}}"readonly></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="head_1">EXPLAIN ANY GAPS IN<br> EMPLOYMENT (Include<br>  month/year &reason)</th>
                                                <td class="text_1" colspan="4"><textarea type="text" name="current_explain" rows="3"  value="{{$ah->gape}}"readonly>{{$ah->gape}}</textarea></td> 
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>While employed here,were you subjectto the Federal Motor Carrier Safety Regulations?</p>
                                        <div class="checkbox_2">
                                            @if($ah->regulation==1)
                                            <label><input type="checkbox" class="radio" value="1" name="current_regulation" checked /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="current_regulation" /><span>No</span></label>
                                            @else
                                             <label><input type="checkbox" class="radio" value="1" name="current_regulation" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="current_regulation" checked /><span>No</span></label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="add-textfield add-textfield1">
                                        <p>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled substances testing as required by 49 CFR, part 40?</p>
                                        <div class="checkbox_2">
                                            @if($ah->cfr==1)
                                            <label><input type="checkbox" class="radio" value="1" name="current_CFR" checked /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="current_CFR" /><span>No</span></label>
                                              @else
                                                <label><input type="checkbox" class="radio" value="1" name="current_CFR" /><span>Yes</span></label>
                                            <label><input type="checkbox" class="radio" value="0" name="current_CFR" checked /><span>No</span></label>

                                                @endif
                                        </div>
                                    </div> 
                                </div>
                               
                            
                            </div>
                          
                        </div>
                     @endforeach
                </div>
            </div>
            <div class="first-section">
                <h2>EDUCATION</h2>
                <div class="employee-form">
                   
                        <div class="row">
                            <div class="col-12">
                                 <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">SCHOOL</th>
                                            <th scope="col">NAME & LOCATION</th>
                                            <th scope="col">COURSE OF STUDY</th>
                                            <th scope="col">YEARS COMPLETED</th>
                                            <th scope="col">GRADUATE Y/N</th>
                                            <th scope="col">DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach($app_education as $ae) 
                                        <tr>  
                                            <th scope="row" class="head_1">{{$ae->school}}</th>
                                              <input type="hidden" name="eduction1" value="{{$ae->school}}">
                                            <td class="text_1"><textarea type="text" name="school_name" rows="2" value="{{$ae->name}}" readonly>{{$ae->name}}</textarea></td>
                                            <td class="text_1"><textarea type="text" name="school_study" rows="2" value="{{$ae->course}}" readonly>{{$ae->course}}</textarea></td>
                                            <td class="text_1"><input type="number" name="school_year" value="{{$ae->year}}" readonly></td>
                                            <td class="text_1"><input type="text" name="school_graduate" value="{{$ae->graduate}}" readonly></td>
                                            <td class="text_1"><textarea type="text" name="school_details" rows="2" value="{{$ae->detail}}" readonly>{{$ae->detail}}</textarea></td>
                                        </tr>

                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <div class="first-section">
                <h2>OTHER QUALIFICATIONS</h2>
                <div class="employee-form">
                        @foreach($app_othereduction as $ao) 
                        <div class="row">
                            <div class="col-12">
                                <div class="last-quali text_1">
                                    <label>Please list any other qualifications that you have and which you believe should be considered.</label>
                                    <textarea type="text" name="other_qualifications" rows="3" value="{{$ae->detail}}" readonly>{{$ae->detail}}</textarea>
                                </div>
                            </div>
                        </div>
                     @endforeach
                   
                </div>
            </div>
            <div class="first-section">
                <h2>to be read</h2>
                <div class="employee-form read">
                    <p> I authorize you to make investigations (including contacting current and prior employers) into my personal, employment, financial, medical history, and other related matters as may be necessary for arriving at an employment decision. I hereby release employers, schools, health care providers, and other persons from all liability in responding to inquiries and releasing information in connection with my application.</p>
                    <p>In the event of employment, I understand that false or misleading information given in my application or interview(s) may result in discharge. I also understand that I am required to abide by all rules and regulations of the Company.</p>
                    <p>I understand that the information I provide regarding my current and/or prior employers may be used, and those employer(s) will be contacted for the purpose of investigating my safety performance history as required by 49 CFR 391.23. I understand that I have the right to:</p>
                    <ul>
                        <li>Review information provided by current/previous employers;</li>
                        <li>Have errors in the information corrected by previous employers, and for those previous employers to resend the corrected information to the prospective employer; and</li>
                        <li>Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information.</li>
                    </ul>
                    <p>This certifies that I completed this application, and that all entries on it and information in it are true and complete to the best of my knowledge. Note: A motor carrier may require an applicant to provide more information than that required by the Federal Motor Carrier Safety Regulations.</p>
                </div>
            </div>
            <div class="button_container_11">
             <button value="submit" style="background: #f17ac1 ; "> <a style="color: white" href="{{url('admin/home')}}">
             Back to Home?</button> 
            <!--  <div class="btn-1" value="submit"><span>submit</span></div>  -->
            </div>
        </form>

        </div>
    </div>
   
    
  
   
    

</body>
</html>