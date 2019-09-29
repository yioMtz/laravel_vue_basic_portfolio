<template>
  <div class="vue-page">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="text-center">
        <h1 class="display-4 text-white">
          Hi, I'm
          <span class="text-mint">John</span>
        </h1>
        <h2 class="text-secondary">full-stack web developer</h2>
      </div>
      <div class="p-5">
        <div class="row">
          <div class="col">
            <div
              class="btn-group flex-wrap"
              role="group"
              aria-label="Contact, Social media, Github and projects buttons group"
            >
              <a class="btn btn-secondary m-1 text-white" href="#" target="_blank">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>GitHub</span>
              </a>

              <router-link to="projects" class="btn btn-info m-1">
                <span class="icon">
                  <i class="fas fa-project-diagram"></i>
                </span>
                <span>Projects</span>
              </router-link>

              <a class="btn btn-primary m-1" href="#" target="_blank">
                <span class="icon">
                  <i class="fab fa-linkedin"></i>
                </span>
                <span>Linkedin</span>
              </a>
              <router-link to="contact" class="btn btn-light m-1">
                <span>Get in touch</span>
                <span class="icon is-small">
                  <i class="fas fa-paper-plane"></i>
                </span>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
