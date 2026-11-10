<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Borrow Request</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body { background: linear-gradient(135deg, #eef2ff 0%, #f8f9fa 100%); min-height: 100vh; }
    .card { border: none; border-radius: 1rem; }
    .form-control, .input-group-text { border-radius: .5rem; }
    .input-group-text { background: #f1f3f5; }
    .form-control:focus { box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .15); }
    .icon-badge { width: 56px; height: 56px; }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="#">
        <i class="bi bi-box-seam me-2"></i>Equipment Lending
      </a>
    </div>
  </nav>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">

        <div class="card shadow-lg">
          <div class="card-body p-4 p-md-5">

            <div class="text-center mb-4">
              <div class="icon-badge rounded-circle bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-3">
                <i class="bi bi-clipboard-check fs-3"></i>
              </div>
              <h2 class="fw-bold mb-1">Borrow Request</h2>
              <p class="text-muted mb-0">Fill in the details below to request equipment.</p>
            </div>

            <form action="save_request.php" method="POST">

              <div class="mb-3">
                <label for="student_id" class="form-label fw-semibold">Student ID</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                  <input type="text" class="form-control" name="student-id" id="student_id"
                         placeholder="e.g. 2024-00123" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="equipment-name" class="form-label fw-semibold">Equipment Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-tools"></i></span>
                  <input type="text" class="form-control" name="equipment-name" id="equipment-name"
                         placeholder="e.g. Projector, Laptop, HDMI cable" required>
                </div>
              </div>

              <div class="row g-3 mb-4">
                <div class="col-sm-5">
                  <label for="quantity" class="form-label fw-semibold">Quantity</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-123"></i></span>
                    <input type="number" class="form-control" name="quantity" id="quantity" min="1" required>
                  </div>
                </div>
                <div class="col-sm-7">
                  <label for="borrow-date" class="form-label fw-semibold">Borrow Date</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                    <input type="date" class="form-control" name="borrow-date" id="borrow-date" required>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">
                <i class="bi bi-send me-2"></i><a href="borrowing_log.php" class="text-white text-decoration-none">Submit</a>
              </button>

              <p class="text-center text-muted small mt-3 mb-0">
                <i class="bi bi-shield-check me-1"></i>Your request will be reviewed by staff.
              </p>

            </form>

          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>