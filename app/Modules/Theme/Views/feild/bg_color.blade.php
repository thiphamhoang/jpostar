<div class="form-group row">
    <div class="col-md-6">
        <label>Màu nền</label>
        <input id="" type="text" name="bg_color" value="{{$row->bg_color}}" class="form-control demo-input" />
        
    </div>
    <div class="col-md-3">
        <label>Màu nền</label>
        <div class="  demo" style="background-color: {{$row->bg_color}}; height:30px; width:50px"></div>
    </div>
</div>

<script>
    $(function () {
        // Basic instantiation:
        $('.demo-input').colorpicker();
     
    });
  </script>