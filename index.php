<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Creation Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Table Creation Form</h2>
    <form id="tableCreationForm" method="post" action="save.php">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="faculty">Faculty:</label>
            <select class="form-control" id="faculty" name="faculty" required>
              <option value="">Select Faculty</option>
              <option value="1">Faculty A</option>
                  <option value="2">Faculty B</option>
                  <option value="3">Faculty C</option>
                  <option value="4">Faculty D</option>
              <!-- Populate faculty dropdown dynamically if needed -->
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="subject">Subject:</label>
            <select class="form-control" id="subject" name="subject" required>
              <option value="">Select Subject</option>
              <option value="math">Mathematics</option>
                  <option value="sci">Science</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="standard">Standard:</label>
            <input type="text" class="form-control" id="standard" name="standard" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="timing">Timing:</label>
            <input type="time" class="form-control" id="timing" name="timing" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
