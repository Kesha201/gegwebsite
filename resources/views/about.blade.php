<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>About</title>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">{{ __('message.geg')}}</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="/">{{ __('message.home')}}</a>
    <a class="p-2 text-dark" href="/about">{{ __('message.abouto')}}</a>
    <a class="p-2 text-dark" href="/contact">{{ __('message.contact')}}</a>
  </nav>
</header>

<main class="container">
  <div class="pr">
    <img src="https://sun9-52.userapi.com/impf/Y9b8WCUbzmDs6F2Ic1_PpQ13S1okXYNro0yVvA/Ys_MDxL3-cA.jpg?size=812x1080&quality=96&sign=f17be88e3b9b46b16c79378a89290473&type=album" style="width: 300px;" alt="" />
    <h1 class="hello">{{ __('message.hello')}}</h1>
    <p class="lea">{{ __('message.text')}}</p>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted"></small>
      </div>
      <div class="col-6 col-md">
      <h5>{{ __('message.features')}}</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">{{ __('message.cool')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.random')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.team')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.stuff')}}</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>{{ __('message.resource')}}</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">{{ __('message.ekinshi')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.name')}}</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>{{ __('message.turaly')}}</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">{{ __('message.tea')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.locat')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.privacy')}}</a></li>
          <li><a class="link-secondary" href="#">{{ __('message.terms')}}</a></li>
        </ul>
      </div>
    </div>
  </footer>
</main>
</body>
</html>