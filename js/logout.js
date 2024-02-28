function confirmLogout() {
    const isConfirmed = window.confirm("Are you sure you want to logout?");

    if (isConfirmed) {
        window.location.href = 'http://localhost/patrice-proj/login.php';
    } else {

    }
  }