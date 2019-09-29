<template>
  <div class="vue-page">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="row text-center">
        <h1 class="section-headline">
          Thanks for taking the time to reach out.
          <br />
          <small class="text-mint">How can I help you today?</small>
        </h1>
      </div>
      <div class="row w-100">
        <div class="col col-md-8 mx-auto">
          <form class="p-4" id="contact" @submit.prevent="onSubmit">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter your name"
                v-model="name"
              />
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input
                type="email"
                class="form-control"
                id="email"
                aria-describedby="emailHelp"
                placeholder="Enter email"
                v-model="email"
              />
              <small
                id="emailHelp"
                class="form-text text-muted"
              >We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="message">Your message</label>
              <textarea class="form-control" id="message" rows="3" v-model="message"></textarea>
            </div>
            <div class="form-group text-right">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "contact",
  data() {
    return {
      name: "",
      email: "",
      message: ""
    };
  },
  methods: {
    onSubmit() {
      this.errors = {};
      let formData = {
        name: this.name,
        email: this.email,
        message: this.message
      };
      axios
        .post("/", formData)
        .then(response => {
          alert("Message sent!");
        })
        .catch(error => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
            alert(errors);
          }
        });
    }
  }
};
</script>
