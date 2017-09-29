<div class="row">
@foreach($detaildivision as $key=>$value)
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <a href="#division{{$key}}" class="no-text-decoration panel-collapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="division1">
            <div>{{$value['division']}}<i class="fa fa-chevron-down pull-right"></i></div>
          </a>
        </h3>
      </div>
      <div id="division{{$key}}" class="panel-body collapse">
        <div class="table-responsive">
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>Group</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              @foreach($value['group'] as $group)
              <tr>
              <td>{{$group->name}}</td>
                <td>{{$group->description}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>           
  @endforeach
</div>
</div>