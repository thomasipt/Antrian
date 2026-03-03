<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Login Antrian</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="stylesheet" href="css/bootstrap.min.css"/>

<style>body {
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
}
.card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    animation: fadeInUp 0.6s ease-out;
}
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.btn-primary {
    transition: all 0.2s ease;
}
.btn-primary:hover {
    transform: translateY(-2px);
}
</style>

</head>
<body>

<section class="d-flex align-items-center justify-content-center min-vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-lg-4">
        <div class="card shadow-lg rounded-4">
          <div class="card-body p-4">

            <h4 class="text-center mb-4 fw-semibold">Login Antrian</h4>

            <form method="post">
              <div class="mb-3">
                <label class="form-label fw-semibold">Layanan</label>
                <input required name="layanan" type="text"
                       class="form-control form-control-lg"
                       placeholder="Masukkan layanan"/>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Loket</label>
                <input required name="loket" type="text"
                       class="form-control form-control-lg"
                       placeholder="Masukkan loket"/>
              </div>

              <div class="mb-4">
                <label class="form-label fw-semibold">Password</label>
                <input required name="password" type="password"
                       class="form-control form-control-lg"
                       placeholder="Password"/>
              </div>

              <button type="submit"
                      class="btn btn-primary w-100 btn-lg rounded-3">
                Sign in
              </button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
