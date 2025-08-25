<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card subscribe-card shadow-lg p-5 bg-light">
                    <h2 class="card-title text-center mb-4 text-danger"><?= TITLE_JOIN?></h2>
                    <form id="subscribeForm" method="POST">
                        <div class="mb-3">
                            <label for="selAddressType" class="form-label text-muted"><?= TXT_HOW_DO_YOU_PREFER?></label>
                            <select class="form-select" 
                                    id="selAddressType" 
                                    name="selAddressType" required>
                                <option value="e"><?php echo MAIL; ?></option>
                                <option value="p"><?php echo PHONE; ?></option>
                            </select>
                        </div>
                        
                            <div class="mb-4">
                            <label for="iptAddress" class="form-label text-muted"><?= TXT_TU_EMAIL?></label>
                            <input type="text" class="form-control" id="iptAddress" name="iptAddress" required>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" id="btnSubmitSubscribe" class="btn btn-danger btn-lg"><?= TXT_BTN_SUB?></button>
                        </div>
                    </form>

                    <p id="pMessage" class="d-none text-center fw-bold"></p>
                    <ul id="ulErrors" class="list-unstyled d-none ps-3"></ul>

                </div>
            </div>
        </div>
    </div>
</section>