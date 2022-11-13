<div id="course_create" class="modal fade in" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h5 class="modal-title">Create Course</h5>
            </div>

            <form action="#" class="form-horizontal" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="course_title">Course Title</label>
                        <div class="col-sm-9">
                            <input type="text" id="course_title" name="course_title" placeholder="Course Title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="course_description">Course Description</label>
                        <div class="col-sm-9">
                            <input type="text" id="course_description" name="course_description" placeholder="Course Description" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="course_categorie">Course Category</label>
                        <div class="col-sm-9">
                            <select name="course_categorie" class="form-control">
                                <option value="Select">Select</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="course_categorie">Course Categorie</label>
                        <div class="col-sm-9">
                            <select name="course_categorie" class="form-control">
                                <option value="Select">Select</option>
                                <option value="all-level"> All Level </option>
                                <option value="Beginer"> Beginer </option>
                                <option value="Intermediate"> Intermediate </option>
                                <option value="Advanced"> Advanced </option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="course_language">Course Language</label>
                        <div class="col-sm-9">
                            <select name="course_language" class="form-control">
                                <option value="Select">Select Language</option>
                                <option value="English">English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="course_language">Course Language</label>
                        <div class="col-sm-9">
                            <div class="checkbox checkbox-switchery">
                                <label>
                                    <input type="checkbox" class="switchery-info" checked="checked" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(0, 188, 212); border-color: rgb(0, 188, 212); box-shadow: rgb(0, 188, 212) 0px 0px 0px 12px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 22px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small></span>
                                    Switch in <span class="text-semibold">info</span> context
                                </label>
                            </div>
                        </div>
                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
