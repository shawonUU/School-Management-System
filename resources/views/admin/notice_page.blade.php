<?php
   use Illuminate\Support\Facades\DB;
   use App\Models\User;
   use App\Models\notice;
   //$teachers = DB::select('select * from users WHERE user_type = "Teacher"')->toArray();
   $teachers = User::all();
   $allNotice = notice::all();

?>

@extends('loginhome')

@section('containt')


@extends('admin.drawer')


<div class="pt-5" style="display: inline-block float: left">
    

    <div class="pl-2" style="padding-top: 2rem !important;">
        <a hresf="" onclick="modal()" class="text-decoration-none d-inline-flex"> <i style="margin-left: 5px;" class="fas fa-plus-circle text-white display-6 text-center"> </i> <span class="text-white" style=" font-size: 20px; padding-left: 2px !important;">Add Notice</span></a>
    </div>


    

<!-- Modal -->
<div class="hid-t" id="modl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog sdo" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Notice</h5>
        <button onclick="modal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="addNotification" action="{{route('add-notice')}}">
          @csrf
          <div class="form-group">
            
            <div class="d-flex">
            <select id="teacher_reng" name="teacher_reng"class="m-2  form-select" aria-label="Default select example">
                                                    <option selected value="All">All Teachers</option>
                                                    <option value="No">No Teachers</option>
            </select>
            <select id="student_reng" name="student_reng"class="m-2  form-select" aria-label="Default select example">
                                                    <option selected value="All">All Students</option>
                                                    <option value="One">Only Class One</option>
                                                    <option value="Two">Only Class Two</option>
                                                    <option value="Three">Only Class Three</option>
                                                    <option value="Four">Only Class Four</option>
                                                    <option value="Five">Only Class Five</option>
                                                    <option value="Six">Only Class Six</option>
                                                    <option value="Seven">Only Class Seven</option>
                                                    <option value="Eight">Only Class Eight</option>
                                                    <option value="Nine">Only Class Nine</option>
                                                    <option value="Ten">Only Class Ten</option>
                                                    <option value="No">No Students</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea id="message" class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}" required autocomplete="message" autofocus name="message" id="message-text" autofocus></textarea>
            @error('message')
              <span class="invalid-feedback" role="alert">
                <strong class="text-white">{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="modal-footer">
              <button onclick="modal()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submite" class="btn btn-primary">Send message</button>
          </div>
        </form>


       
        <div class="continer d-flex">
          <div id="myNotice" class="d-block w-100 mt-5">
          <?php $arr = array(); unset($arr); $arr  = array(); ?>
            @foreach($allNotice->reverse() as $notice)
            @if(Auth::user()->uid == $notice->sender && !array_key_exists($notice->serial,$arr))
            <?php $arr[$notice->serial] = "1";?>
              <div id="{{$notice->serial}}" class="tstb mb-3  sdo text-white" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="row " >
                        <div class="col">
                          <span class="d-flex justify-content-end" style="background: none; vertical-align: top; font-size: 20px;">
                            <a  onclick="deleteMyNotice('{{$notice->serial}}')"   style=" text-decoration: none; color: white; font-size: 20px;">&times;</a>
                          </span>
                        </div>
                    </div>
                    <div class="row pr-5 pb-2">
                        <div style="padding-left: 40px;"class=" col-12 col-md-6 d-flex justify-content-start ">
                          <strong class="mr-auto">You</strong>
                        </div>
                      
                        <div style="padding-right: 40px; padding-left: 40px;" class=" col-12 col-md-6 pr-5 d-flex justify-content-start justify-content-md-end">
                        
                            <small class="">{{$notice->time}}</small>
                          
                        </div>
                    </div>

                    <div style="padding-left: 35px;" class="toast-body text-left">
                        {{$notice->body}}
                    </div>
              </div>
              @endif
              @endforeach
          </div>
    </div>
    



      </div>
    </div>
  </div>
</div>






<!-- Model end-->


<div class="continer d-flex">
          <div class="d-block w-100 px-5 mt-5">
          @foreach($allNotice->reverse() as $notice)
            @if(Auth::user()->uid == $notice->uid))
            <div id="{{$notice->serial}}" class="mb-5 tst text-center  sdo text-white" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="row " style="margin:0px; vertical-align: top;">
                      <div class="col" style="margin:0px; vertical-align: top;">
                          <span class="d-flex justify-content-end" style="background: none; vertical-align: top; font-size: 20px;">
                              <a onclick="deleteNotice('{{$notice->serial}}')" style=" text-decoration: none; color: red; font-size: 20px;" href="">&times;</a>
                          </span>
                      </div>
                  </div>
                <div class="row pr-5 pb-5">
                      <div style="padding-left: 40px;"class=" col-12 col-md-6 d-flex justify-content-start ">
                        <strong class="mr-auto">Bootstrap</strong>
                      </div>
                    
                      <div style="padding-right: 40px; padding-left: 40px;" class=" col-12 col-md-6 pr-5 d-flex justify-content-start justify-content-md-end">
                      
                          <small class="">{{$notice->time}}</small>
                        
                      </div>
                </div>

                  <div class="toast-body pb-5">
                  {{$notice->body}}
                  </div>
             </div>
             @endif
              @endforeach
          </div>
    </div>

  




</div>
















<span  style="position: relative; display: inline-block; border: 2px solid #a9a9a9;  height: 40px;width: 200px">
    <input   type="date" class="xDateContainer" onchange="setCorrect(this,'xTime');" style=" height: 100%;width: 100%;">
    <input type="text" id="xTime" name="xTime" value="dd / mm / yyyy" style=" border: none;height: 100%; width: 100%;" tabindex="-1">
</span>

<script language="javascript">
var matchEnterdDate=0;
//function to set back date opacity for non supported browsers
    window.onload =function(){
        var input = document.createElement('input');
        input.setAttribute('type','date');
        input.setAttribute('value', 'some text'); 
        if(input.value === "some text"){
            allDates = document.getElementsByClassName("xDateContainer");
            matchEnterdDate=1;
            for (var i = 0; i < allDates.length; i++) {
                allDates[i].style.opacity = "1";
            } 
        }
    }

//function to convert enterd date to any format
function setCorrect(xObj,xTraget){
    var date = new Date(xObj.value);
    var month = date.getMonth()+1;
    var day = date.getDate();
    var year = date.getFullYear();
    if(month==null){
      alert(month);
        document.getElementById(xTraget).value=day+" / "+month+" / "+year;
    }else{
      alert(date);
        if(matchEnterdDate==1){document.getElementById(xTraget).value='dd / m0m / yyyy';}
    }
}
   </script>






























<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("#addNotification").submit(function(event){ 
      var data = $("#addNotification").serialize();
      $.post("{{route('add-notice')}}", data, function(res){
        document.getElementById("message").value = "";
        $("#myNotice").show().html(res);
      })
      return false;
    })
});

</script>

<script>
 
    function deleteMyNotice(id){
      if(confirm('Dou you want to delete?')){
          $.ajax({
            url: "{{route('admin/delete_my_notice')}}",
            type: 'get',
            data:{id:id},
            success:function(res){
              $("#myNotice").show().html(res);
            }
          })
        }
    }
  
  
</script>






<script type="text/javascript">
    function modal(){
        
        if( document.getElementById('modl').classList.contains('hid-t')){
           document.getElementById('modl').classList.remove('hid-t');
            document.getElementById('modl').classList.add('sow');
        }
        else{
            document.getElementById('modl').classList.remove('sow');
            document.getElementById('modl').classList.add('hid-t');
        }
    }
</script>
@endsection












                                        