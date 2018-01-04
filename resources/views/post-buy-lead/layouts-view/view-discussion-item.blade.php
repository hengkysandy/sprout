<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-white post">
      @foreach($discussion as $data)
      <?php 
          $userType = $data->User->id_company == $buylead[0]->User->id_company ? "(Seller)" : "(Buyer)";
       ?>
      <div class="post-heading col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-2 col-sm-2 col-xs-3 no-padding image">
          <img src="{{$data->User->photo_image}}" class="img-circle avatar" alt="user profile image">
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8 meta no-padding">
          <div class="title h5">
            <b>{{$data->User->Company->name}}</b> - {{$data->User->first_name . ' ' . $data->User->last_name}} {{$userType}}
          </div>
          <h6 class="text-muted time">{{$data->created_at->diffForHumans(CarBon\Carbon::now(), true)}}</h6>
        </div>
      </div>
      <div class="post-description">
          <p>{{$data->message}}</p>
      </div>
      <a data-value="{{$data->id}}" id="replyDiscussion" href="#replyMessage" class="no-text-decoration" data-toggle="modal">
        <div class="reply">
          <i class="fa fa-reply"></i><span class="padding-btn-rl">reply</span>
        </div>
      </a>
      <hr>

        @foreach($data->DiscussionDetail()->get() as $dt)
        <?php 
            $userTypeDt = $dt->User->id_company == $buylead[0]->User->id_company ? "(Seller)" : "(Buyer)";
         ?>
        <div class="reply-box col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
          <ul class="reply-list">
            <li>
              <div class="reply-heading">
                <div class="no-padding image col-md-2 col-sm-2 col-xs-3">
                  <img src="{{$data->User->photo_image}}" class="img-circle avatar" alt="user profile image">
                </div>
                <div>
                  <div class="title h5 ">
                    <b>{{$dt->User->Company->name}}</b> - {{$dt->User->first_name . ' ' . $dt->User->last_name}} {{$userTypeDt}}
                  </div>
                  <h6 class="text-muted time">{{$dt->created_at->diffForHumans(CarBon\Carbon::now(), true)}}</h6>
                </div>
              </div>
              <div class="post-description">
                <p> {{$dt->message}}</p>
              </div>
              <hr>
            </li>
          </ul>
        </div>
        @endforeach

      @endforeach

    </div>

    <form class="margin-top" action="{{url('createDiscussionItem')}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="idBuyLead" value="{{$buylead[0]->id}}">
      <h4>Add Discussion :</h4>
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label></label>
                <textarea name="discussion" rows="6" class="form-control no-resize" placeholder="Your discussion..."></textarea>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  $("a#replyDiscussion").click(function(){
      var id =$(this).data("value");
      $('input[name=currDiscussionId]').val(id);
  });
</script>