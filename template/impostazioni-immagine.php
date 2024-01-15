<form method="POST" action="#" enctype="multipart/form-data">
    <header class="px-3 mt-3 mb-3">
        <div class="row justify-content-center align-items-end">
            <div class="col d-flex justify-content-center">
                    <img src="<?php echo UPLOAD_DIR . $templateparams["img-profilo"][0]["Immagine"]; ?>" alt="Immagine-Profilo" id="profilo" />
                <label for="fileInput" style="display: none;">Choose a file:</label>
                <input type="file" id="fileInput" style="display: none;" name="img" />
                <a class="nav-link" href="#" title="Add image" onclick="addImg()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16" id="addImg">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <div class="mb-3">
        <div class="col-12 text-end">
            <input id="back" type="button" class="btn btn-outline-primary" value="Back" onclick="backImp()" />
            <input type="submit" class="btn btn-outline-primary" value="Save" />
        </div>
    </div>
</form>