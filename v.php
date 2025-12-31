<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Perfect Dashboard Layout</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
  margin:0;
  font-family:"Segoe UI",sans-serif;
  background:#f4f6f9;
  overflow-x:hidden;
}

/* ===== SIDEBAR ===== */
#sidebar{
  position:fixed;
  top:0;
  left:0;
  width:220px;
  height:100vh;
  background:#1f2937;
  transition:0.3s;
  z-index:1100;
}

#sidebar.collapsed{
  width:70px;
}

.sidebar-brand{
  height:56px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#fff;
  font-weight:600;
  border-bottom:1px solid #374151;
}

#sidebar.collapsed .sidebar-brand span{
  display:none;
}

.sidebar-menu .nav-link{
  color:#e5e7eb;
  display:flex;
  align-items:center;
  padding:12px 15px;
  margin:6px 10px;
  border-radius:8px;
}

.sidebar-menu .nav-link i{
  width:30px;
  text-align:center;
  font-size:1.2rem;
}

.sidebar-menu .nav-link span{
  margin-left:10px;
}

#sidebar.collapsed .nav-link span{
  display:none;
}

#sidebar.collapsed .nav-link{
  justify-content:center;
}

/* .sidebar-menu .nav-link:hover,
.sidebar-menu .nav-link.active{
  background:#2563eb;
  color:#fff;
} */

/* ===== NAVBAR ===== */
.top-navbar{
  height:56px;
  position:fixed;
  top:0;
  left:220px;
  right:0;
  z-index:1200;
  transition:0.3s;
}

/* when sidebar collapsed */
body.sidebar-collapsed .top-navbar{
  left:70px;
}

/* ===== MAIN ===== */
#main{
  margin-left:220px;
  margin-top:56px;
  padding:25px;
  transition:0.3s;
}

body.sidebar-collapsed #main{
  margin-left:70px;
}

/* ===== CARDS ===== */
.dashboard-card{
  border:none;
  border-radius:12px;
  box-shadow:0 6px 15px rgba(0,0,0,0.08);
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary top-navbar px-3 d-flex justify-content-between">
<div class="d-flex align-items-center">
      <button class="btn btn-light" id="toggleSidebar">
    <i class="bi bi-list"></i>
  </button>
  <span class="navbar-brand ms-3">Dashboard</span>
</div>
   <div class="d-flex align-items-center">
    <a href="#" class="btn btn-light me-2"><i class="bi bi-bag"></i></a>
    <button class="btn btn-light me-2 position-relative">
      <i class="bi bi-bell"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
    </button>
    <a href="#" class="btn btn-light"><i class="bi bi-box-arrow-right"></i></a>
  </div>
</nav>

<!-- SIDEBAR -->
<div id="sidebar">
  <div class="sidebar-brand">
    <i class="bi bi-code-slash"></i>
    <span class="ms-2">SourceCodeSter</span>
  </div>

  <ul class="nav flex-column sidebar-menu mt-3">
    <li class="nav-item">
      <a class="nav-link active">
        <i class="bi bi-speedometer2"></i><span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link">
        <i class="bi bi-arrow-left-right"></i><span>Transaction</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link">
        <i class="bi bi-book"></i><span>Books</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link">
        <i class="bi bi-people"></i><span>Students</span>
      </a>
    </li>
  </ul>
</div>

<!-- MAIN CONTENT -->
<div id="main">
  <div class="row g-4 mb-4">
    <div class="col-md-4">
      <div class="card dashboard-card bg-info text-white text-center">
        <div class="card-body">
          <h3>12</h3><p>Total Books</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card dashboard-card bg-success text-white text-center">
        <div class="card-body">
          <h3>2</h3><p>Total Students</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card dashboard-card bg-warning text-white text-center">
        <div class="card-body">
          <h3>0</h3><p>Returned Today</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card dashboard-card">
    <div class="card-header fw-semibold">Monthly Transaction Report</div>
    <div class="card-body text-center text-muted" style="height:220px">
      Chart Area
    </div>
  </div>
</div>

<script>
document.getElementById("toggleSidebar").onclick = function(){
  document.getElementById("sidebar").classList.toggle("collapsed");
  document.body.classList.toggle("sidebar-collapsed");
};
</script>

</body>
</html>
