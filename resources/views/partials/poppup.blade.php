@section('css')
    <style>

    </style>
@endsection

<!--modal popup start-->
<div aria-hidden="true" class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" role="dialog"
tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body modal1 p-0">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-5 modal-bg">
                        <img alt="" class="bg-img" src="../assets/images/inner-page/collection/1.jpg">
                    </div>
                    <div class="col-sm-7 offer-content">
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                        </button>
                        <div>
                            <h2>newsletter</h2>
                            <p>Subscribe Our Newsletters Now And Stay Up-To-Date With New Collections</p>
                            <form action="#" class="auth-form needs-validation" id="mc-embedded-subscribe-form"
                                    method="post" name="mc-embedded-subscribe-form" target="_blank">
                                <div class="form-group">
                                    <input class="form-control" id="mce-EMAIL" name="EMAIL" placeholder="Enter your email"
                                            required="required" type="text">
                                    <button class="btn btn-default primary-btn  radius-0" id="mc-submit"
                                            type="submit">subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!--modal popup end-->

@section('js')
<script type="text/javascript">

</script>
@endsection
