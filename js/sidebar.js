function openSidebar() {
    document.getElementById("sidebar").style.width = "350px";
  }

function closeSidebar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("open-btn").style.marginRight = "0";
    document.querySelector(".content").style.marginRight = "0";
  }