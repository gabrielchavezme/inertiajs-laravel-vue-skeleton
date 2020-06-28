<template>
  <div class="layout">
    <div class="container text-center h-100">
      <div class="row align-items-center h-100">
        <div class="col-12 mx-auto">
          <div class="content_logo">
            <img
              src="https://gabrielchavez.me/inertiajs-laravel-skeleton.png"
              alt="inertiajs and laravel skeleton"
            />
          </div>
          <div class="content_body">
            <ul>
              <li>
                <a target="_blank" href="https://laravel.com">Laravel</a>
              </li>
              <li>
                <a target="_blank" href="https://inertiajs.com/">Inertia.js</a>
              </li>
              <li>
                <a target="_blank" href="https://gabrielchavez.me">Author</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["foo"],

  mounted() {
    console.log(this.foo);
  }
};
</script>

<style>
body {
  font-family: "Montserrat", sans-serif;
}
.layout {
  height: 100vh;
}
.content_logo img {
  width: 100%;
  max-width: 300px;
}
.content_body {
    margin-top: 2rem;
}
.content_body ul {
  list-style: none;
}
.content_body ul li {
  display: inline-block;
  margin-right: 1rem;
}
.content_body ul li a {
    text-decoration: none;
    font-size: 18px;
    color: #4c4c4c;
}

.content_body ul li a:hover {
    font-weight: 700;
}
</style>