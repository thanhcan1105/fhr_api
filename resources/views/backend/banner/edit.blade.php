@extends('backend.layouts.master')

@section('main-content')
<div class="container cropper">
    <div class="row">
      <div class="col-md-9">
        <div class="img-container">
          <img id="image" src="images/cropper.jpg" alt="Picture" class="cropper-hidden"><div class="cropper-container cropper-bg" style="width: 635px; height: 516px;"><div class="cropper-wrap-box"><div class="cropper-canvas" style="width: 565.434px; height: 318.057px; left: -31.1224px; top: -30.356px;"><img src="file:///C:/Users/ASUS/Downloads/gentelella-1.4.0/gentelella-1.4.0/production/images/cropper.jpg" style="width: 565.434px; height: 318.057px; margin-left: 0px; margin-top: 0px; transform: scale(1, 1) rotate(0deg);"></div></div><div class="cropper-drag-box cropper-modal cropper-crop"></div><div class="cropper-crop-box" style="width: 405.16px; height: 227.902px; left: 125.61px; top: 0px;"><span class="cropper-view-box"><img src="file:///C:/Users/ASUS/Downloads/gentelella-1.4.0/gentelella-1.4.0/production/images/cropper.jpg" style="width: 565.434px; height: 318.057px; margin-left: -156.733px; margin-top: -30.356px; transform: scale(1, 1) rotate(0deg);"></span><span class="cropper-dashed dashed-h"></span><span class="cropper-dashed dashed-v"></span><span class="cropper-center"></span><span class="cropper-face cropper-move"></span><span class="cropper-line line-e" data-action="e"></span><span class="cropper-line line-n" data-action="n"></span><span class="cropper-line line-w" data-action="w"></span><span class="cropper-line line-s" data-action="s"></span><span class="cropper-point point-e" data-action="e"></span><span class="cropper-point point-n" data-action="n"></span><span class="cropper-point point-w" data-action="w"></span><span class="cropper-point point-s" data-action="s"></span><span class="cropper-point point-ne" data-action="ne"></span><span class="cropper-point point-nw" data-action="nw"></span><span class="cropper-point point-sw" data-action="sw"></span><span class="cropper-point point-se" data-action="se"></span></div></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg" style="width: 263px; height: 147.938px;"><img src="file:///C:/Users/ASUS/Downloads/gentelella-1.4.0/gentelella-1.4.0/production/images/cropper.jpg" style="display: block; width: 367.038px; height: 206.459px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: -101.739px; margin-top: -19.7049px; transform: scale(1, 1) rotate(0deg);"></div>
          <div class="img-preview preview-md" style="width: 138.667px; height: 78px;"><img src="file:///C:/Users/ASUS/Downloads/gentelella-1.4.0/gentelella-1.4.0/production/images/cropper.jpg" style="display: block; width: 193.521px; height: 108.855px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: -53.642px; margin-top: -10.3894px; transform: scale(1, 1) rotate(0deg);"></div>
          <div class="img-preview preview-sm" style="width: 69px; height: 38.8125px;"><img src="file:///C:/Users/ASUS/Downloads/gentelella-1.4.0/gentelella-1.4.0/production/images/cropper.jpg" style="display: block; width: 96.2952px; height: 54.166px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: -26.6921px; margin-top: -5.16972px; transform: scale(1, 1) rotate(0deg);"></div>
          <div class="img-preview preview-xs" style="width: 35px; height: 19.6875px;"><img src="file:///C:/Users/ASUS/Downloads/gentelella-1.4.0/gentelella-1.4.0/production/images/cropper.jpg" style="display: block; width: 48.8454px; height: 27.4755px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: -13.5395px; margin-top: -2.62232px; transform: scale(1, 1) rotate(0deg);"></div>
        </div>

        <div class="docs-data">
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataX">X</label>
            <input type="text" class="form-control" id="dataX" placeholder="x">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataY">Y</label>
            <input type="text" class="form-control" id="dataY" placeholder="y">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataWidth">Width</label>
            <input type="text" class="form-control" id="dataWidth" placeholder="width">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataHeight">Height</label>
            <input type="text" class="form-control" id="dataHeight" placeholder="height">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataRotate">Rotate</label>
            <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
            <span class="input-group-addon">deg</span>
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataScaleX">ScaleX</label>
            <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
          </div>
          <div class="input-group input-group-sm">
            <label class="input-group-addon" for="dataScaleY">ScaleY</label>
            <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 docs-buttons">
        <!-- <h3 class="page-header">Toolbar:</h3> -->
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
              <span class="fa fa-arrows"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
              <span class="fa fa-crop"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, 0.1)">
              <span class="fa fa-search-plus"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, -0.1)">
              <span class="fa fa-search-minus"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, -10, 0)">
              <span class="fa fa-arrow-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, 10, 0)">
              <span class="fa fa-arrow-right"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, 0, -10)">
              <span class="fa fa-arrow-up"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, 0, 10)">
              <span class="fa fa-arrow-down"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;rotate&quot;, -45)">
              <span class="fa fa-rotate-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;rotate&quot;, 45)">
              <span class="fa fa-rotate-right"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;scaleX&quot;, -1)">
              <span class="fa fa-arrows-h"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;scaleY&quot;, -1)">
              <span class="fa fa-arrows-v"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;crop&quot;)">
              <span class="fa fa-check"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;clear&quot;)">
              <span class="fa fa-remove"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;disable&quot;)">
              <span class="fa fa-lock"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;enable&quot;)">
              <span class="fa fa-unlock"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;reset&quot;)">
              <span class="fa fa-refresh"></span>
            </span>
          </button>
          <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="Import image with Blob URLs">
              <span class="fa fa-upload"></span>
            </span>
          </label>
          <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;destroy&quot;)">
              <span class="fa fa-power-off"></span>
            </span>
          </button>
        </div>

        <div class="btn-group btn-group-crop">
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCroppedCanvas&quot;)">
              Get Cropped Canvas
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
              160×90
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
              320×180
            </span>
          </button>
        </div>

        <!-- Show the cropped image in modal -->
        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->

        <button type="button" class="btn btn-primary" data-method="getData" data-option="" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getData&quot;)">
            Get Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setData&quot;, data)">
            Set Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="getContainerData" data-option="" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getContainerData&quot;)">
            Get Container Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="getImageData" data-option="" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getImageData&quot;)">
            Get Image Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option="" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCanvasData&quot;)">
            Get Canvas Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setCanvasData&quot;, data)">
            Set Canvas Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option="" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCropBoxData&quot;)">
            Get Crop Box Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setCropBoxData&quot;, data)">
            Set Crop Box Data
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.moveTo(0)">
            0,0
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.zoomTo(1)">
            100%
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="cropper.rotateTo(180)">
            180°
          </span>
        </button>
        <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
      </div><!-- /.docs-buttons -->

      <div class="col-md-3 docs-toggles">
        <!-- <h3 class="page-header">Toggles:</h3> -->
        <div class="btn-group btn-group-justified" data-toggle="buttons">
          <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="aspectRatio: 16 / 9">
              16:9
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="aspectRatio: 4 / 3">
              4:3
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="aspectRatio: 1 / 1">
              1:1
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="aspectRatio: 2 / 3">
              2:3
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="aspectRatio: NaN">
              Free
            </span>
          </label>
        </div>

        <div class="btn-group btn-group-justified" data-toggle="buttons">
          <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked="">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="View Mode 0">
              VM0
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="View Mode 1">
              VM1
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="View Mode 2">
              VM2
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="View Mode 3">
              VM3
            </span>
          </label>
        </div>

        <div class="dropdown dropup docs-options">
          <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
            Toggle Options
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="responsive" checked="">
                responsive
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="restore" checked="">
                restore
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="checkCrossOrigin" checked="">
                checkCrossOrigin
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="checkOrientation" checked="">
                checkOrientation
              </label>
            </li>

            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="modal" checked="">
                modal
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="guides" checked="">
                guides
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="center" checked="">
                center
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="highlight" checked="">
                highlight
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="background" checked="">
                background
              </label>
            </li>

            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="autoCrop" checked="">
                autoCrop
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="movable" checked="">
                movable
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="rotatable" checked="">
                rotatable
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="scalable" checked="">
                scalable
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="zoomable" checked="">
                zoomable
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="zoomOnTouch" checked="">
                zoomOnTouch
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="zoomOnWheel" checked="">
                zoomOnWheel
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="cropBoxMovable" checked="">
                cropBoxMovable
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="cropBoxResizable" checked="">
                cropBoxResizable
              </label>
            </li>
            <li role="presentation">
              <label class="checkbox-inline">
                <input type="checkbox" name="toggleDragModeOnDblclick" checked="">
                toggleDragModeOnDblclick
              </label>
            </li>
          </ul>
        </div><!-- /.dropdown -->

        <a class="btn btn-default btn-block" data-toggle="tooltip" href="https://fengyuanchen.github.io/cropperjs" title="" data-original-title="Cropper without jQuery">Cropper.js</a>

      </div><!-- /.docs-toggles -->
    </div>
  </div>

@endsection