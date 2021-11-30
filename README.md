# REJEE
<html>
  <body>
  <nav class="navbar navbar-expand-lg bg-gradient navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand d-none-sm d-none-xs" href=""
        >OpenOrigin <span class="text-success">SportsLive</span></a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarmenu"
        aria-controls="navbarmenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarmenu">
      <hr class="dropdown-divider bg-light">
      <ul id="nav" class="navbar-nav p-2 mb-lg-0">
        <li class="nav-item">
          <router-link to="/" class="nav-link" aria-current="page"
            >Home</router-link
          >
        </li>
        <li class="nav-item">
          <router-link to="/events" class="nav-link" aria-current="page"
            >Events</router-link
          >
        </li>
        <li class="nav-item">
          <router-link
            to="/live"
        aria-controls="navbarmenu"
        aria-expanded="false"
            class="nav-link text-success"
            aria-current="page"
            >Live&star;</router-link
          >
        </li>
        <li class="nav-item">
          <router-link to="/leagues" class="nav-link" aria-current="page"
            >Leagues</router-link
          >
        </li>
        <li class="nav-item">
          <router-link to="/teams" class="nav-link" aria-current="page"
            >Fixtures</router-link
          >
        </li>
        <li class="nav-item">
          <router-link to="/teams" class="nav-link" aria-current="page"
            >Odds</router-link
          >
        </li>
      </ul>
    </div>
  </nav>
    <span><image src="src/assets/logo.png"width="20%"/>V 0.1</span>
  </body>
  </html>

## Project setup
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

### Lints and fixes files
```
npm run lint
```

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).
