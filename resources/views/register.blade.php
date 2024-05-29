<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>
<body style="height: 100vh; margin: 0;">  <div class="container-fluid px-0 h-100 d-flex justify-content-center align-items-center">  <div class="row g-0">
      <div class="col-lg-6" style="background-image: url('rsl.webp'); background-size: cover; background-position: center;">
        </div>

      <div class="col-lg-6">
        <div class="container px-4 py-16">
          <div class="mx-auto text-center">
            <h1 class="display-4 font-weight-bold">Welcome Back!</h1>
            <p class="mt-4 text-secondary">
                Create an account to show up when new Equipments are added to the Application
                Connect with motivated I2TN
              </p>
          </div>
        
          <form class="mx-auto mb-0 mt-8" method="POST">
            @csrf
            <div class="mb-3">
              <label class="visually-hidden" for="email">Name</label>
              <div class="input-group">
                <input  placeholder="Enter your name"  class="form-control rounded-lg border"   id="name"    type="name" name="name" />
                <span class="input-group-text">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="h-6 w-6 text-gray-400"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    ></path>
                  </svg>
                </span>
              </div>
            </div>

            <div class="mb-3">
              <label class="visually-hidden" for="email">Email</label>
              <div class="input-group">
                <input  placeholder="Enter your email"  class="form-control rounded-lg border"   id="email"    type="email" name="email" />
                <span class="input-group-text">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="h-6 w-6 text-gray-400"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    ></path>
                  </svg>
                </span>
              </div>
            </div>
        
            <div class="mb-3">
              <label class="visually-hidden" for="password">Password</label>
              <div class="input-group">
                <input
                  placeholder="Enter your password"
                  class="form-control rounded-lg border"
                  id="password"
                  type="password" name="password"
                />
                <span class="input-group-text">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="h-6 w-6 text-gray-400"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    ></path>
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    ></path>
                  </svg>
                </span>
              </div>
            </div>
        
            <div class="d-flex justify-content-between align-items-center">
              <p class="text-secondary">
                Already have an account ?
                <a href="{{route('login')}}" class="text-decoration-none">login</a>
              </p>
              <button
                class="btn btn-primary"
                type="submit"
              >
                Sign Up
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
