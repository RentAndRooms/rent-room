
    <div class="container mt-5">
        <!-- Success Message -->
        <div class="alert alert-success d-none" id="successMessage">
            Terms and conditions saved successfully!
        </div>

        <form id="termsForm">
            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>
                <div>
                    <textarea  class="form-control"></textarea>
                </div>
                <span class="text-danger d-none" id="titleError">Title is required</span>
            </div>

            <div class="form-group mb-3">
                <label for="content" class="form-label">Content</label>
                <div>
                    <textarea id="tinymce-editor" class="form-control" style="height: 300px;"></textarea>
                </div>
                <span class="text-danger d-none" id="contentError">Content is required</span>
            </div>

            <button type="submit" class="btn btn-primary me-2">
                <span id="submitText">Save</span>
            </button>
            <button type="button" class="btn btn-secondary" id="cancelBtn">Cancel</button>
        </form>

        <!-- Terms and Conditions List -->
        <div class="mt-5">
            <h4>Terms and Conditions</h4>
            <ul class="list-group" id="termsList">
                <!-- Sample items -->
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="flex-grow-1">
                        <strong>Privacy Policy</strong><br>
                        <small class="text-muted">We collect and process your personal data in accordance with applicable privacy laws...</small>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm me-1" onclick="editItem(1)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteItem(1)">Delete</button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="flex-grow-1">
                        <strong>User Agreement</strong><br>
                        <small class="text-muted">By using our services, you agree to comply with all applicable terms and conditions...</small>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm me-1" onclick="editItem(2)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteItem(2)">Delete</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

