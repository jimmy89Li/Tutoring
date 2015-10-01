<form class="form-horizontal" action="regprocess.php" method="get">
    <fieldset>
      <legend class="text-center">Create workshop</legend>

        <div class="form-group">
          <label class="col-md-3 control-label" for="workshopname">Title</label>
            <div class="col-md-9">
              <input id="name" name="workshopname" type="text" placeholder="Workshop name" class="form-control">
            </div>
        </div>
      
        <div class="form-group">
          <label class="col-md-3 control-label" for="datetime">Date & time</label>
            <div class="col-md-9">
              <input id="datetime" name="datetime" type="datetime" placeholder="Date & time" class="form-control">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label" for="location">Location</label>
            <div class="col-md-9">
              <input id="location" name="location" type="text" placeholder="Location" class="form-control">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label" for="category">Category</label>
            <div class="col-md-9">
              <input id="category" name="category" type="text" placeholder="Category" class="form-control">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label" for="tutorname">Tutor</label>
            <div class="col-md-9">
              <input id="tutorname" name="tutorname" type="text" placeholder="Tutor" class="form-control">
            </div>
        </div>
    
        <div class="form-group">
          <label class="col-md-3 control-label" for="description">Description</label>
            <div class="col-md-9">
              <textarea class="form-control" id="description" name="message" placeholder="Write description here..." rows="5"></textarea>
            </div>
        </div>
      
        <div class="form-group">
          <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary btn-lg">Create</button>
          </div>
        </div>
    </fieldset>
  </form>