document.addEventListener("DOMContentLoaded",function(){const s=document.querySelectorAll(".filter-link"),l=document.getElementById("projects-row");s.forEach(e=>{e.addEventListener("click",function(a){a.preventDefault();const t=this.getAttribute("data-filter");n(t),s.forEach(i=>i.classList.remove("active")),this.classList.add("active")})});function n(e){fetch(`/projects/filter?category=${e}`).then(a=>a.json()).then(a=>{l.innerHTML="",a.projects.forEach(t=>{const i=`
                            <div class="col-md-12 col-lg-6 col-x-12 item  fadeInUp"  data-aos="fade-in" data-aos-duration="1000">
                                <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine active">
                                    <div class="dlab-media dlab-img-overlay1">
                                        <img src="${t.image}" alt="">
                                        <span class="lightimg" title="Design">
                                            <i class="la la-plus"></i>
                                        </span>
                                    </div>
                                    <div class="dlab-info">
                                        <h5 class="title"><a href="${t.link}">${t.title}</a></h5>
                                        <p class="post-author"><a href="${t.link}">${t.category}</a></p>
                                        <p class="post-date"><a href="${t.link}">${t.date}</a></p>
                                    </div>
                                </div>
                            </div>`;l.innerHTML+=i})})}n("web")});
