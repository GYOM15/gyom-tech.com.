document.addEventListener("DOMContentLoaded",()=>{const l=document.querySelectorAll(".card"),s=document.getElementById("hover-message");l.forEach(e=>{e.addEventListener("mousemove",t=>{s.style.display="block",s.style.left=t.pageX+"px",s.style.top=t.pageY+"px"}),e.addEventListener("mouseleave",()=>{s.style.display="none"}),e.addEventListener("click",()=>{e.classList.contains("is-flipped")?e.classList.remove("is-flipped"):(l.forEach(t=>t.classList.remove("is-flipped")),e.classList.add("is-flipped"))})})});
