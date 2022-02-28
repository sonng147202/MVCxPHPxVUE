<template>
    <nav class="navbar navbar-expand-lg navbar-scroll fixed-top shadow-0 border-bottom border-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fab fa-mdb fa-4x"></i>
            </a>
            <button 
            class="navbar-toggler" 
            type="button" 
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false"
            aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <router-link tag="a" class="nav-link" to="/">Home</router-link>
                    </li>
                    <li class="nav-item">
                      <router-link tag="a" class="nav-link" to="/about">About</router-link>
                    </li>
                    <li class="nav-item">
                      <router-link tag="a" class="nav-link" to="/form">Form</router-link>
                    </li>
                    <li class="nav-item">
                      <router-link tag="a" class="nav-link" to="/data">Data</router-link>
                    </li>
                    <button type="button" class="btn btn-dark ms-3">Get Started</button>
                </ul>
            </div>
        </div>
    </nav>
</template>
<script>
export default {

}
</script>
<style>
.navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler-icon,
.navbar-scroll .navbar-brand {
  color: #262626;
}

.navbar-scroll {
  background-color: #FFC017;
}

.navbar-scrolled .nav-link,
.navbar-scrolled .navbar-toggler-icon,
.navbar-scroll .navbar-brand {
  color: #262626;
}

.navbar-scrolled {
  background-color: #fff;
}

.navbar.navbar-scroll.navbar-scrolled {
  padding-top: auto;
  padding-bottom: auto;
}
.navbar-brand {
  font-size: unset;
  height: 3.5rem;
}
</style>