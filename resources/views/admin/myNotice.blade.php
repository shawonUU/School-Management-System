
<?php
   use App\Models\notice;
   $allNotice = notice::all();

?>

<?php $arr = array(); unset($arr); $arr  = array(); ?>
            @foreach($allNotice->reverse() as $notice)
            @if(Auth::user()->uid == $notice->sender && !array_key_exists($notice->serial,$arr))
            <?php $arr[$notice->serial] = "1";?>
              <div id="{{$notice->serial}}" class="tstb mb-3  sdo text-white" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="row " >
                        <div class="col">
                          <span class="d-flex justify-content-end" style="background: none; vertical-align: top; font-size: 20px;">
                            <a onclick="deleteMyNotice('{{$notice->serial}}')" style=" text-decoration: none; color: white; font-size: 20px;">&times;</a>
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