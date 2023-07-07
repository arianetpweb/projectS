  const header=document.querySelector("header");
  window.addEventListener("scroll",function(){
      header.classList.toggle("sticky", this.window.scrollY >0 )
  });
  let menu=document.querySelector(".fa");
  document.addEventListener("DOMContentLoaded", function() {
      var banner = document.querySelector(".banner");
      banner.classList.add("zoom-in");
    });
