<template>
  <div class="vue-page">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="row text-center">
        <h1 class="section-headline">About me</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <figure class="image mx-auto" style="width: 150px;">
            <img
              class="img-fluid img-thumbnail rounded-circle"
              width="150"
              height="150"
              src="../../img/placeholder.jpg"
            />
          </figure>
          <br />
          <p
            class="text-white text-justify"
          >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-md-6 text-center">
          <h2 class="section-subTitle">
            Technologies
            <i class="fas fa-code text-dark"></i>
          </h2>
          <div class="row">
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
            <div class="col-2 col-md-3">
              <figure class="figure">
                <img
                  class="figure-img img-fluid rounded-circle"
                  src="https://via.placeholder.com/150"
                />
              </figure>
            </div>
          </div>
        </div>
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

              <a class="btn btn-primary m-1" href="#" target="_blank">
                <span class="icon">
                  <i class="fab fa-linkedin"></i>
                </span>
                <span>Linkedin</span>
              </a>
              <router-link to="contact" class="btn btn-light m-1" style="background-color:#ffA361;">
                <span>Say Hi!</span>
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
