    document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.filter-link');
        const container = document.getElementById('projects-row');

        links.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');
                fetchProjects(filter);

                // Remove active class from all links
                links.forEach(link => link.classList.remove('active'));

                // Add active class to the current link
                this.classList.add('active');
            });
        });

        function fetchProjects(filter) {
            fetch(`/projects/filter?category=${filter}`)
                .then(response => response.json())
                .then(data => {
                    container.innerHTML = '';
                    data.projects.forEach(project => {
                        const projectHTML = `
                            <div class="col-md-12 col-lg-6 col-x-12 item  fadeInUp"  data-aos="fade-in" data-aos-duration="1000">
                                <div class="dlab-box dlab-overlay-box style-4 m-b30 overlay-shine active">
                                    <div class="dlab-media dlab-img-overlay1">
                                        <img src="${project.image}" alt="">
                                        <span class="lightimg" title="Design">
                                            <i class="la la-plus"></i>
                                        </span>
                                    </div>
                                    <div class="dlab-info">
                                        <h5 class="title"><a href="${project.link}">${project.title}</a></h5>
                                        <p class="post-author"><a href="${project.link}">${project.category}</a></p>
                                        <p class="post-date"><a href="${project.link}">${project.date}</a></p>
                                    </div>
                                </div>
                            </div>`;
                        container.innerHTML += projectHTML;
                    });
                });
        }

        // Load default projects on page load
        fetchProjects('web'); // Load AI projects by default
    });
