<form  method="get">
    <div class="col-md-6 mb-3 m-auto" >
        <div class="input-group">
        <input type="text" name='s' value='{{ Request::query("s") }}' class="form-control" aria-describedby="inputGroupPrepend" >
        <div class="input-group-append">
            <button type="submit"  class="input-group-text bg-light btn btn-light" id="inputGroupPrepend">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        </div>
    </div>
</form>