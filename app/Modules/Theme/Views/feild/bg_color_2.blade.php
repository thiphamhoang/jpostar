<div class="form-group row">
    <div class="col-md-6">
        <label>Màu nền 2</label>
        <input id="" type="text" name="bg_color_2" value="{{$row->bg_color_2}}" class="form-control demo-input-2" />
        
    </div>
    <div class="col-md-3">
        <label>Màu nền 2</label>
        <div class="  demo-2" style="background-color: {{$row->bg_color_2}}; height:30px; width:50px"></div>
    </div>
</div>

<script>
    $(function () {
        // Basic instantiation:
        $('.demo-input-2').colorpicker();
     
    });
  </script>